document.addEventListener('DOMContentLoaded', function () {
    const pills = document.querySelectorAll('.bca-team__pill');
    const members = document.querySelectorAll('.bca-member');
    const countEl = document.getElementById('visibleCount');
    const container = document.getElementById('teamGrid');
    const originalOrder = [...container.querySelectorAll('.bca-member')]; // Save original order on load
    
    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            const office = pill.dataset.office;

            pills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
            
            // Fade out all visible cards
            members.forEach(m => {
                if (!m.classList.contains('hidden')) m.classList.add('fade-out');
            });
            
            setTimeout(() => {
                let visible = 0;

                members.forEach(m => {
                    const offices = m.dataset.office.split(',');
                    m.classList.remove('bca-member--portsmouth', 'bca-member--romsey', 'bca-member--kumar', 'bca-member--swindon');

                    if (office === 'all' || offices.includes(office)) {
                        m.classList.remove('hidden', 'fade-out');
                        m.classList.add('bca-member--' + office);
                        visible++;
                    } else {
                        m.classList.add('hidden');
                        m.classList.remove('fade-out');
                    }
                });
                if (countEl) countEl.textContent = visible;

                // ---- Sort cards by data-order-{office} ----
                if (office !== 'all') {
                    const key = 'order' + office.charAt(0).toUpperCase() + office.slice(1); // camelCase
                    const allCards = [...container.querySelectorAll('.bca-member')];
                    allCards.sort((a, b) => {
                        const aVal = parseInt(a.dataset['order' + office.charAt(0).toUpperCase() + office.slice(1)] ?? 0);
                        const bVal = parseInt(b.dataset['order' + office.charAt(0).toUpperCase() + office.slice(1)] ?? 0);
                        return aVal - bVal;
                    });
                    allCards.forEach(card => container.appendChild(card));
                } else originalOrder.forEach(card => container.appendChild(card));
                // -------------------------------------------

                // Stagger fade-in for each visible card
                const visibleCards = document.querySelectorAll('.bca-member:not(.hidden)');
                visibleCards.forEach((card, i) => {
                    card.classList.add('fade-out');
                    setTimeout(() => {
                        card.classList.remove('fade-out');
                    }, 50 * i); // 50ms stagger per card
                });
            }, 250);
        });
    });
    
    var office = selectedOffice.office;
    const section = document.querySelector('#teamSection');
    const pill = document.querySelector('.bca-team__pill[data-office="' + office + '"]');
    if(pill) {
        pill.click(); 
        if(office != '' && section != null) section.scrollIntoView({ behavior: 'smooth' });
        else document.querySelector('.bca-team__pill[data-office="all"]').click(); 
    } 
});