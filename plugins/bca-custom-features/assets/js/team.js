document.addEventListener('DOMContentLoaded', function () {
    const filter = document.getElementById('bca-office-filter');
    const cards = document.querySelectorAll('.bca-team-card');

    if (!filter || !cards.length) return;

    filter.addEventListener('change', function () {
        const selectedOffice = this.value;

        cards.forEach(function (card) {
            const officeData = card.getAttribute('data-office') || '';
            const officeList = officeData.split(' ');
            const shouldShow = selectedOffice === 'all' || officeList.includes(selectedOffice);

            if (shouldShow) {
                if (card.classList.contains('is-hidden')) {
                    card.classList.remove('is-hidden');
                    card.classList.add('is-showing');

                    requestAnimationFrame(function () {
                        requestAnimationFrame(function () {
                            card.classList.remove('is-showing');
                        });
                    });
                } else {
                    card.classList.remove('is-hiding');
                }
            } else {
                if (!card.classList.contains('is-hidden')) {
                    card.classList.add('is-hiding');

                    setTimeout(function () {
                        card.classList.add('is-hidden');
                        card.classList.remove('is-hiding');
                    }, 350);
                }
            }
        });
    });
});