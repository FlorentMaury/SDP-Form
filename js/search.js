// Obtenez les éléments de recherche et de type de recherche
var searchType = document.getElementById('searchType');
var searchName = document.getElementById('searchName');
var searchDate = document.getElementById('searchDate');

// Ajoutez un écouteur d'événements pour le changement du type de recherche
searchType.addEventListener('change', function(e) {
    // Cachez les deux éléments de recherche
    searchName.style.display = 'none';
    searchDate.style.display = 'none';

    // Affichez l'élément de recherche correspondant au type de recherche sélectionné
    if (e.target.value === 'name') {
        searchName.style.display = '';
    } else if (e.target.value === 'date') {
        searchDate.style.display = '';
    }
});

// Ajoutez des écouteurs d'événements pour le changement des entrées de recherche
searchName.addEventListener('input', filterElements);
searchDate.addEventListener('input', filterElements);

function filterElements(e) {
    // Obtenez la valeur de recherche
    var searchValue = e.target.value.toLowerCase();

    // Obtenez tous les éléments li
    var liElements = document.querySelectorAll('li');

    // Parcourez tous les éléments li
    liElements.forEach(function(li) {
        // Obtenez le nom ou la date de l'élément li
        var nameOrDate = li.textContent.toLowerCase();

        // Si la valeur de recherche est dans le nom ou la date, affichez l'élément li, sinon cachez-le
        if (nameOrDate.includes(searchValue)) {
            li.style.display = '';
        } else {
            li.style.display = 'none';
        }
    });
}