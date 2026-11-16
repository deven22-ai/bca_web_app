const ALLOWED_EXT = [
  "pdf",
  "doc",
  "docx",
  "jpg",
  "jpeg",
  "png",
  "xlsx",
  "xls",
  "csv",
];
const MAX_SIZE = 10 * 1024 * 1024;
const IGNORED_FILES = [".ds_store", "thumbs.db", "desktop.ini"];
const canPickFolder = "webkitdirectory" in HTMLInputElement.prototype;

let selectedFiles = [];

function getPath(file) {
  return file.relPath || file.webkitRelativePath || file.name;
}

function updateSubmitBtn() {
  const hasFiles = selectedFiles.length > 0;
  const hasOffice = officeInput.value !== "";
  const hasName = nameInput.value.trim() !== "";
  submitBtn.disabled = !(hasFiles && hasOffice && hasName);
}

function addFiles(files) {
  const skipped = [];
  files.forEach((file) => {
    const lower = file.name.toLowerCase();
    if (IGNORED_FILES.includes(lower)) return;

    const ext = lower.includes(".") ? lower.split(".").pop() : "";
    if (!ALLOWED_EXT.includes(ext) || file.size > MAX_SIZE) {
      skipped.push(file.name);
      return;
    }
    if (
      !selectedFiles.find(
        (f) => getPath(f) === getPath(file) && f.size === file.size,
      )
    ) {
      selectedFiles.push(file);
    }
  });
  showSkipped(skipped);
  renderFileList();
  updateSubmitBtn();
}

function showSkipped(names) {
  if (!names.length) {
    fileNote.hidden = true;
    return;
  }
  const shown = names.slice(0, 3).join(", ");
  const more = names.length > 3 ? ` and ${names.length - 3} more` : "";
  fileNote.textContent = `${names.length} file${names.length === 1 ? " was" : "s were"} skipped (unsupported type or over 10MB): ${shown}${more}`;
  fileNote.hidden = false;
}

function formatSize(bytes) {
  if (bytes < 1024) return bytes + " B";
  if (bytes < 1048576) return (bytes / 1024).toFixed(1) + " KB";
  return (bytes / 1048576).toFixed(1) + " MB";
}

function getFileIcon() {
  return `<svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>`;
}

function getFolderIcon() {
  return `<svg viewBox="0 0 24 24"><path d="M22 19a2 2 0 01-2 2H4a2 2 0 01-2-2V5a2 2 0 012-2h5l2 3h9a2 2 0 012 2z"/></svg>`;
}

// One row per loose file, one row per top-level folder
function renderFileList() {
  fileList.innerHTML = "";

  const groups = new Map();
  selectedFiles.forEach((file) => {
    const path = getPath(file);
    const key = path.includes("/")
      ? "dir:" + path.split("/")[0]
      : "file:" + path;
    if (!groups.has(key)) groups.set(key, []);
    groups.get(key).push(file);
  });

  groups.forEach((files, key) => {
    const isFolder = key.startsWith("dir:");
    const label = key.slice(key.indexOf(":") + 1);
    const size = files.reduce((sum, f) => sum + f.size, 0);

    const item = document.createElement("div");
    item.className = "bca-file-item";
    item.innerHTML = `
            <div class="bca-file-item__icon">${isFolder ? getFolderIcon() : getFileIcon()}</div>
            <div class="bca-file-item__info">
                <div class="bca-file-item__name"></div>
                <div class="bca-file-item__size"></div>
            </div>
            <div class="bca-file-item__remove" title="Remove">
                <svg viewBox="0 0 12 12"><line x1="2" y1="2" x2="10" y2="10"/><line x1="10" y1="2" x2="2" y2="10"/></svg>
            </div>
        `;
    item.querySelector(".bca-file-item__name").textContent = label;
    item.querySelector(".bca-file-item__size").textContent = isFolder
      ? `Folder · ${files.length} file${files.length === 1 ? "" : "s"} · ${formatSize(size)}`
      : formatSize(size);

    item
      .querySelector(".bca-file-item__remove")
      .addEventListener("click", () => {
        selectedFiles = selectedFiles.filter((f) => !files.includes(f));
        renderFileList();
        updateSubmitBtn();
      });
    fileList.appendChild(item);
  });
}

/* Dropped folders: walk them recursively */
async function walkEntry(entry, out) {
  if (entry.isFile) {
    const file = await new Promise((res, rej) => entry.file(res, rej));
    file.relPath = entry.fullPath.replace(/^\//, "");
    out.push(file);
  } else if (entry.isDirectory) {
    const reader = entry.createReader();
    let batch;
    do {
      batch = await new Promise((res, rej) => reader.readEntries(res, rej));
      for (const child of batch) await walkEntry(child, out);
    } while (batch.length);
  }
}

async function getDroppedFiles(dataTransfer) {
  const entries = Array.from(dataTransfer.items || [])
    .map((item) => (item.webkitGetAsEntry ? item.webkitGetAsEntry() : null))
    .filter(Boolean);
  if (!entries.length) return Array.from(dataTransfer.files);
  const out = [];
  for (const entry of entries) await walkEntry(entry, out);
  return out;
}

/* Browse menu */
function openMenu() {
  browseMenu.hidden = false;
  browseBtn.setAttribute("aria-expanded", "true");
}

function closeMenu() {
  browseMenu.hidden = true;
  browseBtn.setAttribute("aria-expanded", "false");
}

function resetForm() {
  selectedFiles = [];
  uploadForm.reset();
  fileList.innerHTML = "";
  fileNote.hidden = true;
  uploadFormWrp.style.display = "block";
  uploadSuccess.classList.remove("is-visible");
  submitBtn.disabled = true;
  submitBtn.classList.remove("is-loading");
  submitBtnTxt.textContent = "Send Files to BC&A";
}

function showUploadError(message) {
  const alert = document.getElementById("uploadError");
  const msgEl = document.getElementById("uploadErrorMsg");
  msgEl.textContent = message;
  alert.classList.add("is-visible");
  alert.scrollIntoView({ behavior: "smooth", block: "center" });
}

function hideUploadError() {
  document.getElementById("uploadError").classList.remove("is-visible");
}

async function ajaxFileUpload() {
  const formData = new FormData();
  formData.append("action", "bca_file_upload");
  formData.append("nonce", bcaAjax.nonce);
  formData.append("office", officeInput.value);
  formData.append("UploaderName", nameInput.value.trim());
  selectedFiles.forEach((file) => {
    formData.append("files[]", file, file.name);
    formData.append("paths[]", getPath(file));
  });

  try {
    const request = await fetch(bcaAjax.url, {
      method: "POST",
      body: formData,
    });
    const data = await request.json();
    if (data.success) {
      hideUploadError();
      uploadFormWrp.style.display = "none";
      uploadSuccess.classList.add("is-visible");
      uploadSuccess.scrollIntoView({ behavior: "smooth", block: "center" });
    } else {
      const msg = data.data || "An unknown error occurred. Please try again.";
      showUploadError(msg);
      resetForm();
    }
  } catch (err) {
    showUploadError(
      "Unable to reach the server. Please check your connection and try again.",
    );
    resetForm();
  }
}

/* MAIN */
let dropzone,
  fileInput,
  folderInput,
  fileList,
  fileNote,
  browseBtn,
  browseMenu,
  submitBtn,
  submitBtnTxt,
  uploadForm,
  uploadFormWrp,
  uploadSuccess,
  officeInput,
  nameInput;

document.addEventListener("DOMContentLoaded", () => {
  dropzone = document.getElementById("dropzone");
  fileInput = document.getElementById("fileInput");
  folderInput = document.getElementById("folderInput");
  fileList = document.getElementById("fileList");
  fileNote = document.getElementById("fileNote");
  browseBtn = document.getElementById("browseBtn");
  browseMenu = document.getElementById("browseMenu");
  submitBtn = document.getElementById("submitBtn");
  submitBtnTxt = submitBtn.querySelector(".bca-upload-submit__text");
  uploadForm = document.getElementById("uploadForm");
  uploadFormWrp = document.getElementById("uploadFormWrap");
  uploadSuccess = document.getElementById("uploadSuccess");
  officeInput = document.getElementById("office");
  nameInput = document.querySelector('input[name="your-name"]');

  // Devices that can't pick folders (most phones): plain file picker, no menu
  if (!canPickFolder) {
    document.getElementById("browseBtnLabel").textContent = "Choose Files";
    document.getElementById("dropzoneTitle").textContent =
      "Drop files here or click to browse";
  }

  // Clicking anywhere in the dropzone opens the menu
  dropzone.addEventListener("click", (e) => {
    if (e.target.matches('input[type="file"]')) return; // ignore our own .click() calls

    const pick = e.target.closest("[data-pick]");
    if (pick) {
      closeMenu();
      (pick.dataset.pick === "folder" ? folderInput : fileInput).click();
      return;
    }
    if (!canPickFolder) {
      fileInput.click();
      return;
    }
    browseMenu.hidden ? openMenu() : closeMenu();
  });
  document.addEventListener("click", (e) => {
    if (!dropzone.contains(e.target)) closeMenu();
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeMenu();
  });

  dropzone.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropzone.classList.add("dragover");
  });
  dropzone.addEventListener("dragleave", () =>
    dropzone.classList.remove("dragover"),
  );
  dropzone.addEventListener("drop", async (e) => {
    e.preventDefault();
    dropzone.classList.remove("dragover");
    closeMenu();
    addFiles(await getDroppedFiles(e.dataTransfer));
  });

  [fileInput, folderInput].forEach((input) => {
    input.addEventListener("change", () => {
      addFiles(Array.from(input.files));
      input.value = ""; // reset so the same selection can be re-added
    });
  });

  officeInput.addEventListener("change", () => updateSubmitBtn());
  nameInput.addEventListener("input", () => updateSubmitBtn());

  uploadForm.addEventListener("submit", function (e) {
    e.preventDefault();
    if (submitBtn.disabled) return;
    submitBtn.classList.add("is-loading");
    submitBtnTxt.textContent = "Uploading…";
    ajaxFileUpload();
  });
});
