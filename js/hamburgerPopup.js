const btnBurger = document.getElementById('hamburgerBtn');
const menuBurger = document.getElementById('menu__odkazy--hamburger');

btnBurger.addEventListener('click', () => {
    menuBurger.classList.toggle('show');
});

document.addEventListener('click', (e) => {
if (!menuBurger.contains(e.target) && !btnBurger.contains(e.target)) {
    menuBurger.classList.remove('show');
    }
});