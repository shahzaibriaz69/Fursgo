
const tabs = document.querySelectorAll('.tab');

tabs.forEach(tab => {
    tab.addEventListener('click', () => {

        document.querySelector('.tab.active').classList.remove('active');


        tab.classList.add('active');
    });
});

const dotsMenu = document.querySelector('.dots-menu');
const editBtn = document.querySelector('.edit-button');

dotsMenu.addEventListener('click', () => {

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


const reviewButtons = document.querySelectorAll(".pill");
const writtenReviews = document.getElementById("written-reviews");
const receivedReviews = document.getElementById("received-reviews");

reviewButtons.forEach(button => {
    button.addEventListener("click", () => {

        reviewButtons.forEach(btn => btn.classList.remove("active"));
        button.classList.add("active");

        const type = button.getAttribute("data-review");

        writtenReviews.classList.remove("active");
        receivedReviews.classList.remove("active");


        if (type === "written") {
            writtenReviews.classList.add("active");
        }
        else if (type === "received") {
            receivedReviews.classList.add("active");
        }
        else if (type === "all") {
            writtenReviews.classList.add("active");
            receivedReviews.classList.add("active");
        }
    });
});

document.querySelector('.pill[data-review="written"]').click();

function showSection(evt, sectionId) {
    // 1. Pehle dono sections ko chupa do (Hide)
    var contents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < contents.length; i++) {
        contents[i].style.display = "none";
    }

    // 2. Button se 'active' styling hata do
    var links = document.getElementsByClassName("tab-link");
    for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("active");
    }

    // 3. Jo section click hua hai sirf usay dikhao
    document.getElementById(sectionId).style.display = "block";

    // 4. Clicked button ko 'active' class do
    evt.currentTarget.classList.add("active");
}