// Récupération des différents filtres de recherche et ajustement de leurs afffichages.
document.getElementById('searchType').addEventListener('change', function() {
    var isDateSearch = this.value === 'date';
    document.getElementById('searchStartDate').style.display = isDateSearch ? 'block' : 'none';
    document.getElementById('searchEndDate').style.display = isDateSearch ? 'block' : 'none';
    document.getElementById('searchName').style.display = this.value === 'name' ? 'block' : 'none';
    document.getElementById('searchNumber').style.display = this.value === 'number' ? 'block' : 'none';
});

// Recherche par nom.
document.getElementById('searchName').addEventListener('keyup', function() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById('searchName');
    filter = input.value.toUpperCase();
    table = document.querySelector('.tableContainer table');
    tr = table.getElementsByTagName('tr');

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName('td')[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
});

// Recherche par date.
document.getElementById('searchStartDate').addEventListener('change', filterByDateRange);
document.getElementById('searchEndDate').addEventListener('change', filterByDateRange);

function filterByDateRange() {
    var startDate, endDate, table, tr, td, i, txtValue;
    startDate = new Date(document.getElementById('searchStartDate').value);
    endDate = new Date(document.getElementById('searchEndDate').value);
    table = document.querySelector('.tableContainer table');
    tr = table.getElementsByClassName('tr');

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByClassName('date')[0];
        if (td) {
            txtValue = new Date(td.textContent || td.innerText);
            if (txtValue >= startDate && txtValue <= endDate) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
}

// Recherche par numéro de création.
document.getElementById('searchNumber').addEventListener('keyup', function() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById('searchNumber');
    filter = input.value.toUpperCase();
    table = document.querySelector('.tableContainer table');
    tr = table.getElementsByTagName('tr');

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByClassName('creationId')[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
});

// Réinitialisation des filtres de recherche.
document.getElementById('resetButton').addEventListener('click', function() {
    // Réinitialisez les valeurs des champs de recherche
    document.getElementById('searchName').value = '';
    document.getElementById('searchStartDate').value = '';
    document.getElementById('searchEndDate').value = '';
    document.getElementById('searchNumber').value = '';

    // Affichez toutes les lignes du tableau
    var table, tr, i;
    table = document.querySelector('.tableContainer table');
    tr = table.getElementsByTagName('tr');

    for (i = 0; i < tr.length; i++) {
        tr[i].style.display = '';
    }
});