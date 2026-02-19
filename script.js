
const tabs = document.querySelectorAll('.tab');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // 1. Remove 'active' class from whichever tab currently has it
        document.querySelector('.tab.active').classList.remove('active');

        // 2. Add 'active' class to the clicked tab
        tab.classList.add('active');
    });
});

