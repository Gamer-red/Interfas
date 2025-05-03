// Efecto sticky para el header
const header = document.querySelector('header');

window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
        header.classList.add('sticky');
    } else {
        header.classList.remove('sticky');
    }
});

// Menú hamburguesa
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav-links');

    toggle.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        // Elimina la línea que usa 'active' para mantener consistencia
    });
});