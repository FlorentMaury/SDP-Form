document.addEventListener('DOMContentLoaded', function() {
    const flags = document.querySelectorAll('.main__flagsList img');
    const elementsToTranslate = document.querySelectorAll('.translate');

    // Load default language on page load
    const defaultLang = 'fr';
    loadTranslations(defaultLang);
    loadCountries(defaultLang);

    // Set French flag as active on page load
    document.querySelector('.flagList__fr').classList.add('flagList__active');

    flags.forEach(flag => {
        flag.addEventListener('click', function() {
            const lang = this.classList[0].split('__')[1]; // ex: "flagList__fr" => "fr"
            loadTranslations(lang);
            loadCountries(lang);
            document.getElementById('lang').value = lang; 
            currentLang = this.classList[0].split('__')[1]; // Mettre à jour la langue actuelle

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
                    const key = element.getAttribute('data-translate-key');
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
        countrySelect.innerHTML = ''; 
    
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
    var phoneNumberInput = document.getElementById('phoneNumber');
    var selectedCountryIndex = countrySelect.selectedIndex;
    
    if (selectedCountryIndex >= 0) {
        var selectedCountry = countries[selectedCountryIndex];
        if (selectedCountry) {
            phoneNumberInput.value = selectedCountry.dial_code;
        }
    } else {
        phoneNumberInput.value = ''; // Clear phone number if no country is selected
    }
}