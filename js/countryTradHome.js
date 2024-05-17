document.addEventListener('DOMContentLoaded', function() {
    const flags = document.querySelectorAll('.flagList__fr, .flagList__en, .flagList__es, .flagList__pt');
    const elementsToTranslate = document.querySelectorAll('.main__h1, .civility, .lastNamePrint, .firstNamePrint, .emailPrint, .country, .addressPrint, .cityPrint, .phoneNumberPrint, .hostPrint, .workshopPrint, .discoveryPrint, .rgpd, .errorMessage, .successMessage');

    console.log('Flags:', flags);
    console.log('Elements to translate:', elementsToTranslate);

    // Load default language on page load
    const defaultLang = 'fr';
    console.log('Default language:', defaultLang);
    loadTranslations(defaultLang);
    loadCountries(defaultLang);
    
    // Set French flag as active on page load
    const frenchFlag = document.querySelector('.flagList__fr');
    console.log('French flag:', frenchFlag);
    frenchFlag.classList.add('flagList__active');

    flags.forEach(flag => {
        flag.addEventListener('click', function() {
            const lang = this.classList[1].split('__')[1]; // ex: "flagList__fr" => "fr"
            console.log('Selected language:', lang);
            loadTranslations(lang);
            loadCountries(lang);
            document.getElementById('lang').value = lang; // Update hidden language input

            // Reset all flags
            resetFlags();

            // Hide the clicked flag
            this.classList.add('flagList__active');
            console.log('Updated language flag:', this);

            // Update phone number and postal code when changing country
            updatePhoneNumber();
            updatePostalCode();
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
                console.log('Translations:', translations);
                elementsToTranslate.forEach(element => {
                    const key = element.classList[1];
                    console.log('Element:', element, 'Key:', key);
                    if (translations[key]) {
                        if (element.tagName === 'INPUT' || element.tagName === 'SELECT') {
                            element.placeholder = translations[key];
                        } else {
                            element.textContent = translations[key];
                        }
                    }
                });

                // Translate RGPD message
                const rgpdMessage = translations['rgpdMessage'];
                const rgpdElement = document.querySelector('.rgpd');
                if (rgpdElement && rgpdMessage) {
                    rgpdElement.textContent = rgpdMessage;
                }
            })
            .catch(error => console.error('Error loading translations:', error));
    }

    function loadCountries(lang) {
        const countrySelect = document.getElementById('country');
        countrySelect.innerHTML = ''; // Clear existing options

        console.log('Country select:', countrySelect);

        countries.forEach(country => {
            const option = document.createElement('option');
            option.value = country.name['fr']; // Utiliser le nom français pour la valeur
            option.textContent = country.name[lang] || country.name['en']; // Utiliser la langue de l'utilisateur
            countrySelect.appendChild(option);
        });

        console.log('Loaded countries:', countries);
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

function updatePostalCode() {
    var countrySelect = document.getElementById('country');
    var postalCodeInput = document.getElementById('postalCodePrint');
    var selectedCountryIndex = countrySelect.selectedIndex;
    
    console.log('Country select:', countrySelect);
    console.log('Postal code input:', postalCodeInput);
    console.log('Selected country index:', selectedCountryIndex);

    if (selectedCountryIndex >= 0) {
        var selectedCountryName = countrySelect.options[selectedCountryIndex].text;
        console.log('Selected country name:', selectedCountryName);
        var postalCode = postal_codes[selectedCountryName];
        console.log('Postal code:', postalCode);
        if (postalCode) {
            postalCodeInput.value = postalCode;
        }
    } else {
        postalCodeInput.value = ''; // Clear postal code if no country is selected
    }
}
