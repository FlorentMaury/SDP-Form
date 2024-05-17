// MENU.

// On récupère les éléments de la navigation.
const menuIcon  = document.querySelector('.menuIcon');
const nav       = document.querySelector('.header__nav');
const closeIcon = document.getElementById('close-icon');

// On initialise la position de la navigation.
nav.style.left = '-100%';

// Fonction pour gérer la navigation.
function toggleNav(open) {
    nav.style.left = open ? '0%' : '-100%';
    if (!open) {
        menuIcon.classList.remove('active');
    }
}

// On ajoute un écouteur d'événement sur le clic du menu.
menuIcon.addEventListener('click', () => {
    const isOpen = nav.style.left === '0%';
    toggleNav(!isOpen);
    if (!isOpen) {
        menuIcon.classList.add('active');
    }
});

// On ajoute un écouteur d'événement sur le clic de l'icône de fermeture.
closeIcon.addEventListener('click', () => toggleNav(false));

// On ajoute un écouteur d'événement sur le clic en dehors de la navigation.
document.addEventListener('click', (event) => {
    if (!nav.contains(event.target) && !menuIcon.contains(event.target)) {
        toggleNav(false);
    }
});