const header = document.querySelectorAll('header')[0];

window.addEventListener('scroll', () =>{
    header.classList.toggle("sticky", window.scrollY > 60);

})

document.querySelector('.menu-toggle').addEventListener('click', () => {
    document.querySelector('.nav-links').classList.toggle('nav-active');
});
