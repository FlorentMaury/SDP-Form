        // MENU.

// On récupère les éléments de la navigation.
const menuIcon = document.querySelector('.menuIcon');
const nav = document.querySelector('.header__nav');
const closeIcon = document.getElementById('close-icon');

// Fonction pour gérer la navigation.
function toggleNav(open) {
    nav.style.left = open ? '0%' : '-100%';
}

// On ajoute un écouteur d'événement sur le clic du menu.
menuIcon.addEventListener('click', () => {
    toggleNav(nav.style.left === '-100%');
});

// On ajoute un écouteur d'événement sur le clic de l'icône de fermeture.
closeIcon.addEventListener('click', () => toggleNav(false));

// On ajoute un écouteur d'événement sur le clic en dehors de la navigation.
document.addEventListener('click', (event) => {
    if (!nav.contains(event.target) && !menuIcon.contains(event.target)) {
        toggleNav(false);
    }
});