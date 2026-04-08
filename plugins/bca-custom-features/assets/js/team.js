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
            if (office === 'all' || offices.includes(office)) {
                m.classList.remove('hidden');
                visible++;
            } else {
                m.classList.add('hidden');
            }
            });

            if (countEl) countEl.textContent = visible;
        });
    });
    
    console.log(selectedOffice.office);
    if(selectedOffice != '') {
        document.querySelector('.bca-team__pill[data-office="' + selectedOffice.office + '"]').click(); 
        const section = document.querySelector('#teamSection');
        section.scrollIntoView({ behavior: 'smooth' });
    } else document.querySelector('.bca-team__pill[data-office="all"]').click(); 
});