/* Send request from frontend JS */
async function loadNews(cat = 'all') {
    const body = new URLSearchParams({
        action : 'bca_get_news',
        nonce  : bcaAjax.nonce,
        cat
    });

    const request = await fetch(bcaAjax.url, {
        method  : 'POST',
        headers : {'Content-Type': 'application/x-www-form-urlencoded' },
        body
    });

    const data = await request.json();
    if(data.success) {
        const newsContainer = document.getElementById('bca-news-results');
        newsContainer.innerHTML = data.data;
    }
    else alert(data.data);
}

document.addEventListener('click', async(e) => {
    const link = e.target.closest('.bca-news-filter-item');
    if(!link) return;

    e.preventDefault();

    document.querySelectorAll('.bca-news-filter-item').forEach(item => {
        item.classList.remove('active');
    });
    link.classList.add('active');

    const cat = link.dataset.cat || 'all';
    await loadNews(cat);
});