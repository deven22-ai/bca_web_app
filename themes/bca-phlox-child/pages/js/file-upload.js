let selectedFiles = [];

function updateSubmitBtn() {
    const hasFiles = selectedFiles.length > 0;
    const hasOffice = officeInput.value !== '';
    submitBtn.disabled = !(hasFiles && hasOffice);
}

function addFiles(files) {
    files.forEach(file => {
        if (!selectedFiles.find(f => f.name === file.name && f.size === file.size)) {
            selectedFiles.push(file);
        }
    });
    renderFileList();
    updateSubmitBtn();
}

function formatSize(bytes) {
    if (bytes < 1024) return bytes + ' B';
    if (bytes < 1048576) return (bytes / 1024).toFixed(1) + ' KB';
    return (bytes / 1048576).toFixed(1) + ' MB';
}

function getFileIcon() {
    return `<svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>`;
}

function renderFileList() {
    fileList.innerHTML = '';
    selectedFiles.forEach((file, index) => {
        const item = document.createElement('div');
        item.className = 'bca-file-item';
        item.innerHTML = `
            <div class="bca-file-item__icon">${getFileIcon()}</div>
            <div class="bca-file-item__info">
                <div class="bca-file-item__name">${file.name}</div>
                <div class="bca-file-item__size">${formatSize(file.size)}</div>
            </div>
            <div type="button" class="bca-file-item__remove" title="Remove file">
                <svg viewBox="0 0 12 12"><line x1="2" y1="2" x2="10" y2="10"/><line x1="10" y1="2" x2="2" y2="10"/></svg>
            </div>
        `;
        item.querySelector('.bca-file-item__remove').addEventListener('click', () => {
            selectedFiles.splice(index, 1);
            renderFileList();
            updateSubmitBtn();
        });
        fileList.appendChild(item);
    });
}

function resetForm() {
    selectedFiles = [];
    uploadForm.reset();
    fileList.innerHTML = '';
    uploadForm.style.display = 'block';
    uploadSuccess.style.display = 'none';
    submitBtn.disabled = true;
    submitBtn.innerHTML = 'Send Files to BC&A <svg viewBox="0 0 16 16" width="14" height="14"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>';
}

/* MAIN */
let dropzone, fileInput, fileList, submitBtn, uploadForm, uploadSuccess, officeInput;

document.addEventListener('DOMContentLoaded', () => {
    dropzone      = document.getElementById('dropzone');
    fileInput     = document.getElementById('fileInput');
    fileList      = document.getElementById('fileList');
    submitBtn     = document.getElementById('submitBtn');
    uploadForm    = document.getElementById('uploadForm');
    uploadSuccess = document.getElementById('uploadSuccess');
    officeInput   = document.getElementById('office');

    dropzone.addEventListener('dragover', e => { e.preventDefault(); dropzone.classList.add('dragover'); });
    dropzone.addEventListener('dragleave', () => dropzone.classList.remove('dragover'));
    dropzone.addEventListener('drop', e => {
        e.preventDefault();
        dropzone.classList.remove('dragover');
        addFiles(Array.from(e.dataTransfer.files));
    });

    fileInput.addEventListener('change', () => {
        addFiles(Array.from(fileInput.files));
        fileInput.value = ''; // reset so same file can be re-added
    });
    officeInput.addEventListener('change', () => updateSubmitBtn());

    uploadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        if (submitBtn.disabled) return;
        submitBtn.textContent = 'Uploading…';
        submitBtn.disabled = true;
        setTimeout(() => {
            uploadForm.style.display = 'none';
            uploadSuccess.style.display = 'block';
        }, 1500);
    });
});