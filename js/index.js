const header = document.querySelectorAll('header')[0];

window.addEventListener('scroll', () =>{
    header.classList.toggle("sticky", window.scrollY > 60);
})