document.addEventListener('DOMContentLoaded', function() {
    const flags = document.querySelectorAll('.flagList__fr, .flagList__en, .flagList__es, .flagList__pt');
    const elementsToTranslate = document.querySelectorAll('.main__h1, .civility, .lastNamePrint, .firstNamePrint, .emailPrint, .country, .addressPrint, .cityPrint, .phoneNumberPrint, .hostPrint, .workshopPrint, .discoveryPrint, .news, .rgpd, .errorMessage, .successMessage');

    // Load default language on page load
    const defaultLang = 'fr';
    loadTranslations(defaultLang);
    loadCountries(defaultLang);
    
    // Set French flag as active on page load
    const frenchFlag = document.querySelector('.flagList__fr');
    frenchFlag.classList.add('flagList__active');

    flags.forEach(flag => {
        flag.addEventListener('click', function() {
            const lang = this.classList[1].split('__')[1]; // ex: "flagList__fr" => "fr"
            loadTranslations(lang);
            loadCountries(lang);
            document.getElementById('lang').value = lang; // Update hidden language input

            // Reset all flags
            resetFlags();

            // Hide the clicked flag
            this.classList.add('flagList__active');

            // Update phone number and postal code when changing country
            updatePhoneNumber();
        });
    });

    function resetFlags() {
        flags.forEach(flag => {
            flag.classList.remove('flagList__active');
        });
    }

    function loadTranslations(lang) {
        fetch(`./js/translations_${lang}.json`)
            .then(response => response.json())
            .then(translations => {
                elementsToTranslate.forEach(element => {
                    const key = element.classList[1];
                    if (translations[key]) {
                        if (element.tagName === 'INPUT' || element.tagName === 'SELECT') {
                            element.placeholder = translations[key];
                        } else {
                            element.textContent = translations[key];
                        }
                    }
                });
            })
            .catch(error => console.error('Error loading translations:', error));
    }

    function loadCountries(lang) {
        const countrySelect = document.getElementById('country');
        countrySelect.innerHTML = ''; // Clear existing options

        countries.forEach(country => {
            const option = document.createElement('option');
            option.value = country.name['fr']; // Utiliser le nom français pour la valeur
            option.textContent = country.name[lang] || country.name['en']; // Utiliser la langue de l'utilisateur
            countrySelect.appendChild(option);
        });
    }
});


function updatePhoneNumber() {
    var countrySelect = document.getElementById('country');
    var phoneNumberInput = document.getElementById('phoneNumberPrint');
    var selectedCountryIndex = countrySelect.selectedIndex;
    
    console.log('Country select:', countrySelect);
    console.log('Phone number input:', phoneNumberInput);
    console.log('Selected country index:', selectedCountryIndex);

    if (selectedCountryIndex >= 0) {
        var selectedCountry = countries[selectedCountryIndex];
        console.log('Selected country:', selectedCountry);
        if (selectedCountry) {
            phoneNumberInput.value = selectedCountry.dial_code;
        }
    } else {
        phoneNumberInput.value = ''; // Clear phone number if no country is selected
    }
}
