
const links = document.querySelectorAll(".nav-menu a");

links.forEach(link => {
    link.addEventListener("click", function () {
        links.forEach(l => l.classList.remove("active"));
        this.classList.add("active");
    });
});

function toggleMenu() {
    const menu = document.getElementById("editMenu");

    if (menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}

/* close menu when clicking outside */
document.addEventListener("click", function (e) {
    if (!e.target.closest(".menu-wrapper") &&
        !e.target.closest(".profile-img-box")) {
        document.getElementById("editMenu").style.display = "none";
    }
});

