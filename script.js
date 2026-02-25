
const tabs = document.querySelectorAll('.tab');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        // 1. Remove 'active' class from whichever tab currently has it
        document.querySelector('.tab.active').classList.remove('active');

        // 2. Add 'active' class to the clicked tab
        tab.classList.add('active');
    });
});

const dotsMenu = document.querySelector('.dots-menu');
const editBtn = document.querySelector('.edit-button');

dotsMenu.addEventListener('click', () => {
    // .toggle adds the class if it's missing, and removes it if it's there
    editBtn.classList.toggle('show');
});



document.addEventListener('DOMContentLoaded', () => {
    const editBtn = document.getElementById('edit-btn');
    const cancelBtn = document.getElementById('cancel-btn');
    const profileView = document.getElementById('profile-view');
    const editForm = document.getElementById('edit-form-container');


    editBtn.addEventListener('click', () => {
        profileView.classList.add('hidden');
        editForm.classList.remove('hidden');
    });


    cancelBtn.addEventListener('click', () => {
        editForm.classList.add('hidden');
        profileView.classList.remove('hidden');
    });


    document.getElementById('profile-form').addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Profile Updated!');
        editForm.classList.add('hidden');
        profileView.classList.remove('hidden');
    });
});

const tab = document.querySelectorAll('.tab');
const profileView = document.getElementById('profile-view');
const petsView = document.getElementById('pets-view');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {

        tabs.forEach(t => t.classList.remove('active'));

        tab.classList.add('active');

        if (tab.textContent.trim() === 'My Pets') {
            profileView.style.display = 'none';
            petsView.style.display = 'block';
        } else if (tab.textContent.trim() === 'My Profile') {
            profileView.style.display = 'block';
            petsView.style.display = 'none';
        }
    });
});



