
// Handle tab switching - wait for DOM to be ready
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab');
    const profileView = document.getElementById('profile-view');
    const petsView = document.getElementById('pets-view');

    // Set first tab as active by default
    if (tabs.length > 0) {
        tabs[0].classList.add('active');
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs
            tabs.forEach(t => t.classList.remove('active'));

            // Add active class to clicked tab
            tab.classList.add('active');

            // Handle content switching
            if (tab.textContent.trim() === 'My Pets') {
                profileView.style.display = 'none';
                petsView.style.display = 'block';
            } else if (tab.textContent.trim() === 'My Profile') {
                profileView.style.display = 'block';
                petsView.style.display = 'none';
            }
        });
    });
});

// Handle profile edit/cancel
document.addEventListener('DOMContentLoaded', () => {
    // Handle dots menu toggle
    const dotsMenu = document.querySelector('.dots-menu');
    const editBtn = document.querySelector('.edit-button');

    if (dotsMenu && editBtn) {
        dotsMenu.addEventListener('click', () => {
            editBtn.classList.toggle('show');
        });
    }
    const editBtnProfile = document.getElementById('edit-btn');
    const cancelBtn = document.getElementById('cancel-btn');
    const profileViewForm = document.getElementById('profile-view');
    const editForm = document.getElementById('edit-form-container');

    if (editBtnProfile && cancelBtn && profileViewForm && editForm) {
        editBtnProfile.addEventListener('click', () => {
            profileViewForm.classList.add('hidden');
            editForm.classList.remove('hidden');
        });

        cancelBtn.addEventListener('click', () => {
            editForm.classList.add('hidden');
            profileViewForm.classList.remove('hidden');
        });

        const profileForm = document.getElementById('profile-form');
        if (profileForm) {
            profileForm.addEventListener('submit', (e) => {
                e.preventDefault();
                alert('Profile Updated!');
                editForm.classList.add('hidden');
                profileViewForm.classList.remove('hidden');
            });
        }
    }
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
    // 1. Hide all sections
    var contents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < contents.length; i++) {
        contents[i].style.display = "none";
    }

    // 2. Remove active from ALL tab-link buttons everywhere
    var links = document.getElementsByClassName("tab-link");
    for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("active");
    }

    // 3. Show the target section
    document.getElementById(sectionId).style.display = "block";

    // 4. Activate the clicked button
    evt.currentTarget.classList.add("active");

    // 5. FIX: Also activate the matching button INSIDE the now-visible section
    var shownSection = document.getElementById(sectionId);
    var buttonsInSection = shownSection.querySelectorAll(".tab-link");
    buttonsInSection.forEach(function (btn) {
        var onclickAttr = btn.getAttribute("onclick") || "";
        if (onclickAttr.includes(sectionId)) {
            btn.classList.add("active");
        }
    });
}