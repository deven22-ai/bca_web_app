/* Send request from frontend JS */
async function ajaxLoadNews(cat = 'all') {

    const newsContainer = document.getElementById('bca-news-results');
    newsContainer.classList.add('loading'); // Fade out

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
        newsContainer.innerHTML = data.data; // Swap content while hidden
        // Small delay then fade in
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                newsContainer.classList.remove('loading');
                scrollReveal(); // reveal the found news articles
            });
        });
    }
    else alert(data.data);
}

document.addEventListener('click', async(e) => {
    const link = e.target.closest('.bca-news__pill');
    if(!link) return;

    e.preventDefault();

    document.querySelectorAll('.bca-news__pill').forEach(item => {
        item.classList.remove('active');
    });
    link.classList.add('active');

    const cat = link.dataset.cat || 'all';
    await ajaxLoadNews(cat);
});