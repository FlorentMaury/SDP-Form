document.getElementById('searchType').addEventListener('change', function() {
    document.getElementById('searchName').style.display = this.value === 'name' ? 'block' : 'none';
    document.getElementById('searchDate').style.display = this.value === 'date' ? 'block' : 'none';
});

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

document.getElementById('searchDate').addEventListener('change', function() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById('searchDate');
    filter = input.value;
    table = document.querySelector('.tableContainer table');
    tr = table.getElementsByClassName('tr');

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByClassName('date')[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.indexOf(filter) > -1) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }
        }
    }
});

document.getElementById('resetButton').addEventListener('click', function() {
    // Réinitialisez les valeurs des champs de recherche
    document.getElementById('searchName').value = '';
    document.getElementById('searchDate').value = '';

    // Affichez toutes les lignes du tableau
    var table, tr, i;
    table = document.querySelector('.tableContainer table');
    tr = table.getElementsByTagName('tr');

    for (i = 0; i < tr.length; i++) {
        tr[i].style.display = '';
    }
});