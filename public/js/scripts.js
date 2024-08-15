window.addEventListener('DOMContentLoaded', event => {
    var navbarShrink = function () {
        const mainNav = document.body.querySelector('#mainNav');
        if (!mainNav) {
            return;
        }
        if (window.scrollY === 0) {
            mainNav.classList.remove('navbar-scrolled')
        } else {
            mainNav.classList.add('navbar-scrolled')
        }
    };

    navbarShrink();
    document.addEventListener('scroll', navbarShrink);
});

document.addEventListener('DOMContentLoaded', function () {
    var navbar = document.getElementById('mainNav');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) { // Ajusta el valor según el punto en el que quieres cambiar el color
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});
