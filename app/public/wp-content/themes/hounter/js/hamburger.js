document.addEventListener("DOMContentLoaded", function() {
    var navbarToggler = document.querySelector(".navbar-toggler");
    var navbarCloseIcon = document.querySelector(".navbar-close-icon");
    navbarToggler.addEventListener("click", function() {
        navbarCloseIcon.classList.toggle("d-none");
    });
});
