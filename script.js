
// Handle primary profile tabs (profile, pets, favourites, reviews, rewards)
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab');

    // map the text value to the corresponding section element
    const sections = {
        'My Profile': document.getElementById('profile-section'),
        'My Pets': document.getElementById('pets-view'),           // already used elsewhere
        'Favourites': document.getElementById('favourites-section'),
        'Reviews': document.getElementById('reviews-section'),
        'Rewards': document.getElementById('rewards-section')
    };

    // hide all sections initially then show profile section
    Object.values(sections).forEach(sec => {
        if (sec) {
            sec.classList.add('hidden');
            sec.style.display = 'none';
        }
    });
    if (sections['My Profile']) {
        sections['My Profile'].classList.remove('hidden');
        sections['My Profile'].style.display = 'block';
    }

    // make sure a reasonable tab is active by default
    tabs.forEach(t => t.classList.remove('active'));
    const defaultTab = Array.from(tabs).find(t => t.textContent.trim() === 'My Profile') || tabs[0];
    if (defaultTab) defaultTab.classList.add('active');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // reset all tab state
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            // hide every section
            Object.values(sections).forEach(sec => {
                if (sec) {
                    sec.classList.add('hidden');
                    sec.style.display = 'none';
                }
            });

            const label = tab.textContent.trim();
            const target = sections[label];
            if (target) {
                target.classList.remove('hidden');
                target.style.display = 'block';
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


document.getElementById('dateToggleBtn').addEventListener('click', function (e) {
    e.stopPropagation();
    const card = document.getElementById('calendarCard');
    card.classList.toggle('active');
});

// Kahin bhi bahar click karne se calendar band ho jaye
document.addEventListener('click', function (e) {
    const card = document.getElementById('calendarCard');
    const btn = document.getElementById('dateToggleBtn');
    if (!btn.contains(e.target) && !card.contains(e.target)) {
        card.classList.remove('active');
    }
});

// calendar
const monthNames = [
    "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];

let currentDate = new Date(2025, 9); // October 2025

const headerTitle = document.querySelector('.calendar-header span');
const datesContainer = document.querySelector('.dates');
const prevBtn = document.querySelector('.nav-btn:first-child');
const nextBtn = document.querySelector('.nav-btn:last-child');

// Example available dates (can come from backend later)
const availableDates = [
    "2025-10-07",
    "2025-10-09",
    "2025-10-14",
    "2025-10-15",
    "2025-10-20",
    "2025-10-26",
    "2025-10-29",
    "2025-10-30"
];

function renderCalendar() {
    datesContainer.innerHTML = '';

    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    headerTitle.textContent = `${monthNames[month]} ${year}`;

    const firstDay = new Date(year, month, 1).getDay() || 7;
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 1; i < firstDay; i++) {
        datesContainer.appendChild(document.createElement('div'));
    }

    for (let day = 1; day <= daysInMonth; day++) {
        const dateDiv = document.createElement('div');
        dateDiv.classList.add('date');
        dateDiv.textContent = day;

        const dateKey = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;

        if (availableDates.includes(dateKey)) {
            dateDiv.classList.add('available');

            dateDiv.addEventListener('click', () => {
                document.querySelectorAll('.date').forEach(d => d.classList.remove('selected'));
                dateDiv.classList.add('selected');
            });
        }

        datesContainer.appendChild(dateDiv);
    }
}

prevBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

nextBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});

// Time selection (unchanged)
document.querySelectorAll('.time').forEach(time => {
    time.addEventListener('click', () => {
        document.querySelectorAll('.time').forEach(t => t.classList.remove('selected'));
        time.classList.add('selected');
    });
});

renderCalendar();