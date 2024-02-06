const countries = [
    { name: "France", code: "fr" },
    { name: "United States", code: "us" },
    // autres pays...
];

const selectElement = document.querySelector('#phoneNumber');

countries.forEach(country => {
  const option = document.createElement('option');
  option.value = country.name;
  option.innerHTML = `<i class="flag-icon flag-icon-${country.code}"></i> ${country.name}`;
  selectElement.appendChild(option);
});