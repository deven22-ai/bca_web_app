document.addEventListener('DOMContentLoaded', function () {
    const pills = document.querySelectorAll('.bca-team__pill');
    const members = document.querySelectorAll('.bca-member');
    const countEl = document.getElementById('visibleCount');
    
    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            const office = pill.dataset.office;

            pills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');

            let visible = 0;
            members.forEach(m => {
                const offices = m.dataset.office.split(',');
                m.classList.remove('bca-member--portsmouth', 'bca-member--romsey', 'bca-member--kumar', 'bca-member--swindon');

                if (office === 'all' || offices.includes(office)) {
                    m.classList.remove('hidden');
                    m.classList.add('bca-member--' + office);
                    visible++;
                } else {
                    m.classList.add('hidden');
                }
            });

            if (countEl) countEl.textContent = visible;
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