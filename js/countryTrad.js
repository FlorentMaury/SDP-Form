// Liste des pays ainsi que leurs traduction dans les six langues définies.
const countries = [
    {
        name: {
            fr: "Afghanistan",
            en: "Afghanistan",
            es: "Afganistán",
            pt: "Afeganistão",
            ru: "Афганистан",
            ar: "أفغانستان"
        },
        dial_code: "+93"
    },
    {
        name: {
            fr: "Albanie",
            en: "Albania",
            es: "Albania",
            pt: "Albânia",
            ru: "Албания",
            ar: "ألبانيا"
        },
        dial_code: "+355"
    },
    {
        name: {
            fr: "Algérie",
            en: "Algeria",
            es: "Argelia",
            pt: "Argélia",
            ru: "Алжир",
            ar: "الجزائر"
        },
        dial_code: "+213"
    },
    {
        name: {
            fr: "Afghanistan",
            en: "Afghanistan",
            es: "Afganistán",
            pt: "Afeganistão",
            ru: "Афганистан",
            ar: "أفغانستان"
        },
        dial_code: "+93"
    },
    {
        name: {
            fr: "Albanie",
            en: "Albania",
            es: "Albania",
            pt: "Albânia",
            ru: "Албания",
            ar: "ألبانيا"
        },
        dial_code: "+355"
    },
    {
        name: {
            fr: "Algérie",
            en: "Algeria",
            es: "Argelia",
            pt: "Argélia",
            ru: "Алжир",
            ar: "الجزائر"
        },
        dial_code: "+213"
    },
    {
        name: {
            fr: "Allemagne",
            en: "Germany",
            es: "Alemania",
            pt: "Alemanha",
            ru: "Германия",
            ar: "ألمانيا"
        },
        dial_code: "+49"
    },
    {
        name: {
            fr: "Andorre",
            en: "Andorra",
            es: "Andorra",
            pt: "Andorra",
            ru: "Андорра",
            ar: "أندورا"
        },
        dial_code: "+376"
    },
    {
        name: {
            fr: "Angola",
            en: "Angola",
            es: "Angola",
            pt: "Angola",
            ru: "Ангола",
            ar: "أنغولا"
        },
        dial_code: "+244"
    },
    {
        name: {
            fr: "Antigua-et-Barbuda",
            en: "Antigua and Barbuda",
            es: "Antigua y Barbuda",
            pt: "Antígua e Barbuda",
            ru: "Антигуа и Барбуда",
            ar: "أنتيغوا وباربودا"
        },
        dial_code: "+1-268"
    },
    {
        name: {
            fr: "Arabie saoudite",
            en: "Saudi Arabia",
            es: "Arabia Saudita",
            pt: "Arábia Saudita",
            ru: "Саудовская Аравия",
            ar: "المملكة العربية السعودية"
        },
        dial_code: "+966"
    },
    {
        name: {
            fr: "Argentine",
            en: "Argentina",
            es: "Argentina",
            pt: "Argentina",
            ru: "Аргентина",
            ar: "الأرجنتين"
        },
        dial_code: "+54"
    },
    {
        name: {
            fr: "Arménie",
            en: "Armenia",
            es: "Armenia",
            pt: "Armênia",
            ru: "Армения",
            ar: "أرمينيا"
        },
        dial_code: "+374"
    },
    {
        name: {
            fr: "Australie",
            en: "Australia",
            es: "Australia",
            pt: "Austrália",
            ru: "Австралия",
            ar: "أستراليا"
        },
        dial_code: "+61"
    },
    {
        name: {
            fr: "Autriche",
            en: "Austria",
            es: "Austria",
            pt: "Áustria",
            ru: "Австрия",
            ar: "النمسا"
        },
        dial_code: "+43"
    },
    {
        name: {
            fr: "Azerbaïdjan",
            en: "Azerbaijan",
            es: "Azerbaiyán",
            pt: "Azerbaijão",
            ru: "Азербайджан",
            ar: "أذربيجان"
        },
        dial_code: "+994"
    },
    {
        name: {
            fr: "Bahamas",
            en: "Bahamas",
            es: "Bahamas",
            pt: "Bahamas",
            ru: "Багамские Острова",
            ar: "البهاما"
        },
        dial_code: "+1-242"
    },
    {
        name: {
            fr: "Bahreïn",
            en: "Bahrain",
            es: "Baréin",      
            pt: "Bahrein",
            ru: "Бахрейн",
            ar: "البحرين"
        },
        dial_code: "+973"
    },
    {
        name: {
            fr: "Bangladesh",
            en: "Bangladesh",
            es: "Bangladesh",
            pt: "Bangladesh",
            ru: "Бангладеш",
            ar: "بنغلاديش"
        },
        dial_code: "+880"
    },
    {
        name: {
            fr: "Barbade",
            en: "Barbados",
            es: "Barbados",
            pt: "Barbados",
            ru: "Барбадос",
            ar: "بربادوس"
        },
        dial_code: "+1-246"
    },
    {
        name: {
            fr: "Belgique",
            en: "Belgium",
            es: "Bélgica",
            pt: "Bélgica",
            ru: "Бельгия",
            ar: "بلجيكا"
        },
        dial_code: "+32"
    },
    {
        name: {
            fr: "Belize",
            en: "Belize",
            es: "Belice",
            pt: "Belize",
            ru: "Белиз",
            ar: "بليز"
        },
        dial_code: "+501"
    },
    {
        name: {
            fr: "Bénin",
            en: "Benin",
            es: "Benín",
            pt: "Benin",
            ru: "Бенин",
            ar: "بنين"
        },
        dial_code: "+229"
    },
    {
        name: {
            fr: "Bhoutan",
            en: "Bhutan",
            es: "Bután",
            pt: "Butão",
            ru: "Бутан",
            ar: "بوتان"
        },
        dial_code: "+975"
    },
    {
        name: {
            fr: "Biélorussie",
            en: "Belarus",
            es: "Bielorrusia",
            pt: "Bielorrússia",
            ru: "Беларусь",
            ar: "روسيا البيضاء"
        },
        dial_code: "+375"
    },
    {
        name: {
            fr: "Birmanie",
            en: "Myanmar",
            es: "Myanmar",
            pt: "Myanmar",
            ru: "Мьянма",
            ar: "ميانمار"
        },
        dial_code: "+95"
    },
    {
        name: {
            fr: "Bolivie",
            en: "Bolivia",
            es: "Bolivia",
            pt: "Bolívia",
            ru: "Боливия",
            ar: "بوليفيا"
        },
        dial_code: "+591"
    },
    {
        name: {
            fr: "Bosnie-Herzégovine",
            en: "Bosnia and Herzegovina",
            es: "Bosnia y Herzegovina",
            pt: "Bósnia e Herzegovina",
            ru: "Босния и Герцеговина",
            ar: "البوسنة والهرسك"
        },
        dial_code: "+387"
    },
    {
        name: {
            fr: "Botswana",
            en: "Botswana",
            es: "Botsuana",
            pt: "Botsuana",
            ru: "Ботсвана",
            ar: "بوتسوانا"
        },
        dial_code: "+267"
    },
    {
        name: {
            fr: "Brésil",
            en: "Brazil",
            es: "Brasil",
            pt: "Brasil",
            ru: "Бразилия",
            ar: "البرازيل"
        },
        dial_code: "+55"
    },
    {
        name: {
            fr: "Brunei",
            en: "Brunei",
            es: "Brunéi",
            pt: "Brunei",
            ru: "Бруней",
            ar: "بروناي"
        },
        dial_code: "+673"
    },
    {
        name: {
            fr: "Bulgarie",
            en: "Bulgaria",
            es: "Bulgaria",
            pt: "Bulgária",
            ru: "Болгария",
            ar: "بلغاريا"
        },
        dial_code: "+359"
    },
    {
        name: {
            fr: "Burkina Faso",
            en: "Burkina Faso",
            es: "Burkina Faso",
            pt: "Burkina Faso",
            ru: "Буркина-Фасо",
            ar: "بوركينا فاسو"
        },
        dial_code: "+226"
    },
    {
        name: {
            fr: "Burundi",
            en: "Burundi",
            es: "Burundi",
            pt: "Burundi",
            ru: "Бурунди",
            ar: "بوروندي"
        },
        dial_code: "+257"
    },
    {
        name: {
            fr: "Cambodge",
            en: "Cambodia",
            es: "Camboya",
            pt: "Camboja",
            ru: "Камбоджа",
            ar: "كمبوديا"
        },
        dial_code: "+855"
    },
    {
        name: {
            fr: "Cameroun",
            en: "Cameroon",
            es: "Camerún",
            pt: "Camarões",
            ru: "Камерун",
            ar: "الكاميرون"
        },
        dial_code: "+237"
    },
    {
        name: {
            fr: "Canada",
            en: "Canada",
            es: "Canadá",
            pt: "Canadá",
            ru: "Канада",
            ar: "كندا"
        },
        dial_code: "+1"
    },
    {
        name: {
            fr: "Cap-Vert",
            en: "Cape Verde",
            es: "Cabo Verde",
            pt: "Cabo Verde",
            ru: "Кабо-Верде",
            ar: "الرأس الأخضر"
        },
        dial_code: "+238"
    },
    {
        name: {
            fr: "Centrafrique",
            en: "Central African Republic",
            es: "República Centroafricana",
            pt: "República Centro-Africana",
            ru: "Центральноафриканская Республика",
            ar: "جمهورية أفريقيا الوسطى"
        },
        dial_code: "+236"
    },
    {
        name: {
            fr: "Chili",
            en: "Chile",
            es: "Chile",
            pt: "Chile",
            ru: "Чили",
            ar: "تشيلي"
        },
        dial_code: "+56"
    },
    {
        name: {
            fr: "Chine",
            en: "China",
            es: "China",
            pt: "China",
            ru: "Китай",
            ar: "الصين"
        },
        dial_code: "+86"
    },
    {
        name: {
            fr: "Chypre",
            en: "Cyprus",
            es: "Chipre",
            pt: "Chipre",
            ru: "Кипр",
            ar: "قبرص"
        },
        dial_code: "+357"
    },
    {
        name: {
            fr: "Colombie",
            en: "Colombia",
            es: "Colombia",
            pt: "Colômbia",
            ru: "Колумбия",
            ar: "كولومبيا"
        },
        dial_code: "+57"
    },
    {
        name: {
            fr: "Comores",
            en: "Comoros",
            es: "Comoras",
            pt: "Comores",
            ru: "Коморские Острова",
            ar: "جزر القمر"
        },
        dial_code: "+269"
    },
    {
        name: {
            fr: "Congo",
            en: "Congo",
            es: "Congo",
            pt: "Congo",
            ru: "Конго",
            ar: "الكونغو"
        },
        dial_code: "+242"
    },
    {
        name: {
            fr: "Corée du Nord",
            en: "North Korea",
            es: "Corea del Norte",
            pt: "Coreia do Norte",
            ru: "Северная Корея",
            ar: "كوريا الشمالية"
        },
        dial_code: "+850"
    },
    {
        name: {
            fr: "Corée du Sud",
            en: "South Korea",
            es: "Corea del Sur",
            pt: "Coreia do Sul",
            ru: "Южная Корея",
            ar: "كوريا الجنوبية"
        },
        dial_code: "+82"
    },
    {
        name: {
            fr: "Costa Rica",
            en: "Costa Rica",
            es: "Costa Rica",
            pt: "Costa Rica",
            ru: "Коста-Рика",
            ar: "كوستاريكا"
        },
        dial_code: "+506"
    },
    {
        name: {
            fr: "Côte d'Ivoire",
            en: "Ivory Coast",
            es: "Costa de Marfil",
            pt: "Costa do Marfim",
            ru: "Кот-д'Ивуар",
            ar: "ساحل العاج"
        },
        dial_code: "+225"
    },
    {
        name: {
            fr: "Croatie",
            en: "Croatia",
            es: "Croacia",
            pt: "Croácia",
            ru: "Хорватия",
            ar: "كرواتيا"
        },
        dial_code: "+385"
    },
    {
        name: {
            fr: "Cuba",
            en: "Cuba",
            es: "Cuba",
            pt: "Cuba",
            ru: "Куба",
            ar: "كوبا"
        },
        dial_code: "+53"
    },
    {
        name: {
            fr: "Danemark",
            en: "Denmark",
            es: "Dinamarca",
            pt: "Dinamarca",
            ru: "Дания",
            ar: "الدنمارك"
        },
        dial_code: "+45"
    },
    {
        name: {
            fr: "Djibouti",
            en: "Djibouti",
            es: "Yibuti",
            pt: "Djibouti",
            ru: "Джибути",
            ar: "جيبوتي"
        },
        dial_code: "+253"
    },
    {
        name: {
            fr: "Dominique",
            en: "Dominica",
            es: "Dominica",
            pt: "Dominica",
            ru: "Доминика",
            ar: "دومينيكا"
        },
        dial_code: "+1-767"
    },
    {
        name: {
            fr: "Égypte",
            en: "Egypt",
            es: "Egipto",
            pt: "Egito",
            ru: "Египет",
            ar: "مصر"
        },
        dial_code: "+20"
    },
    {
        name: {
            fr: "Émirats arabes unis",
            en: "United Arab Emirates",
            es: "Emiratos Árabes Unidos",
            pt: "Emirados Árabes Unidos",
            ru: "Объединенные Арабские Эмираты",
            ar: "الإمارات العربية المتحدة"
        },
        dial_code: "+971"
    },
    {
        name: {
            fr: "Équateur",
            en: "Ecuador",
            es: "Ecuador",
            pt: "Equador",
            ru: "Эквадор",
            ar: "الإكوادور"
        },
        dial_code: "+593"
    },
    {
        name: {
            fr: "Érythrée",
            en: "Eritrea",
            es: "Eritrea",
            pt: "Eritreia",
            ru: "Эритрея",
            ar: "إريتريا"
        },
        dial_code: "+291"
    },
    {
        name: {
            fr: "Espagne",
            en: "Spain",
            es: "España",
            pt: "Espanha",
            ru: "Испания",
            ar: "إسبانيا"
        },
        dial_code: "+34"
    },
    {
        name: {
            fr: "Estonie",
            en: "Estonia",
            es: "Estonia",
            pt: "Estônia",
            ru: "Эстония",
            ar: "إستونيا"
        },
        dial_code: "+372"
    },
    {
        name: {
            fr: "Eswatini",
            en: "Eswatini",
            es: "Esuatini",
            pt: "Eswatini",
            ru: "Эсватини",
            ar: "إسواتيني"
        },
        dial_code: "+268"
    },
    {
        name: {
            fr: "États-Unis",
            en: "United States",
            es: "Estados Unidos",
            pt: "Estados Unidos",
            ru: "Соединенные Штаты",
            ar: "الولايات المتحدة"
        },
        dial_code: "+1"
    },
    {
        name: {
            fr: "Éthiopie",
            en: "Ethiopia",
            es: "Etiopía",
            pt: "Etiópia",  
            ru: "Эфиопия",
            ar: "إثيوبيا"
        },
        dial_code: "+251"
    },
    {
        name: {
            fr: "Fidji",
            en: "Fiji",
            es: "Fiyi",
            pt: "Fiji",
            ru: "Фиджи",
            ar: "فيجي"
        },
        dial_code: "+679"
    },
    {
        name: {
            fr: "Finlande",
            en: "Finland",
            es: "Finlandia",
            pt: "Finlândia",
            ru: "Финляндия",
            ar: "فنلندا"
        },
        dial_code: "+358"
    },
    {
        name: {
            fr: "France",
            en: "France",
            es: "Francia",
            pt: "França",
            ru: "Франция",
            ar: "فرنسا"
        },
        dial_code: "+33"
    },
    {
        name: {
            fr: "Gabon",
            en: "Gabon",
            es: "Gabón",
            pt: "Gabão",
            ru: "Габон",
            ar: "الغابون"
        },
        dial_code: "+241"
    },
    {
        name: {
            fr: "Gambie",
            en: "Gambia",
            es: "Gambia",
            pt: "Gâmbia",
            ru: "Гамбия",
            ar: "غامبيا"
        },
        dial_code: "+220"
    },
    {
        name: {
            fr: "Géorgie",
            en: "Georgia",
            es: "Georgia",
            pt: "Geórgia",
            ru: "Грузия",
            ar: "جورجيا"
        },
        dial_code: "+995"
    },
    {
        name: {
            fr: "Ghana",
            en: "Ghana",
            es: "Ghana",
            pt: "Gana",
            ru: "Гана",
            ar: "غانا"
        },
        dial_code: "+233"
    },
    {
        name: {
            fr: "Grèce",
            en: "Greece",
            es: "Grecia",
            pt: "Grécia",
            ru: "Греция",
            ar: "اليونان"
        },
        dial_code: "+30"
    },
    {
        name: {
            fr: "Grenade",
            en: "Grenada",
            es: "Granada",
            pt: "Granada",
            ru: "Гренада",
            ar: "غرينادا"
        },
        dial_code: "+1-473"
    },
    {
        name: {
            fr: "Guatemala",
            en: "Guatemala",
            es: "Guatemala",
            pt: "Guatemala",
            ru: "Гватемала",
            ar: "غواتيمالا"
        },
        dial_code: "+502"
    },
    {
        name: {
            fr: "Guinée",
            en: "Guinea",
            es: "Guinea",
            pt: "Guiné",
            ru: "Гвинея",
            ar: "غينيا"
        },
        dial_code: "+224"
    },
    {
        name: {
            fr: "Guinée équatoriale",
            en: "Equatorial Guinea",
            es: "Guinea Ecuatorial",
            pt: "Guiné Equatorial",
            ru: "Экваториальная Гвинея",
            ar: "غينيا الاستوائية"
        },
        dial_code: "+240"
    },
    {
        name: {
            fr: "Guinée-Bissau",
            en: "Guinea-Bissau",
            es: "Guinea-Bisáu",
            pt: "Guiné-Bissau",
            ru: "Гвинея-Бисау",
            ar: "غينيا بيساو"
        },
        dial_code: "+245"
    },
    {
        name: {
            fr: "Guyana",
            en: "Guyana",
            es: "Guyana",
            pt: "Guiana",
            ru: "Гайана",
            ar: "غيانا"
        },
        dial_code: "+592"
    },
    {
        name: {
            fr: "Haïti",
            en: "Haiti",
            es: "Haití",
            pt: "Haiti",
            ru: "Гаити",
            ar: "هايتي"
        },
        dial_code: "+509"
    },
    {
        name: {
            fr: "Honduras",
            en: "Honduras",
            es: "Honduras",
            pt: "Honduras",
            ru: "Гондурас",
            ar: "هندوراس"
        },
        dial_code: "+504"
    },
    {
        name: {
            fr: "Hongrie",
            en: "Hungary",
            es: "Hungría",
            pt: "Hungria",
            ru: "Венгрия",
            ar: "هنغاريا"
        },
        dial_code: "+36"
    },
    {
        name: {
            fr: "Inde",
            en: "India",
            es: "India",
            pt: "Índia",
            ru: "Индия",
            ar: "الهند"
        },
        dial_code: "+91"
    },
    {
        name: {
            fr: "Indonésie",
            en: "Indonesia",
            es: "Indonesia",
            pt: "Indonésia",
            ru: "Индонезия",
            ar: "إندونيسيا"
        },
        dial_code: "+62"
    },
    {
        name: {
            fr: "Irak",
            en: "Iraq",
            es: "Irak",
            pt: "Iraque",
            ru: "Ирак",
            ar: "العراق"
        },
        dial_code: "+964"
    },
    {
        name: {
            fr: "Iran",
            en: "Iran",
            es: "Irán",
            pt: "Irã",
            ru: "Иран",
            ar: "إيران"
        },
        dial_code: "+98"
    },
    {
        name: {
            fr: "Irlande",
            en: "Ireland",
            es: "Irlanda",
            pt: "Irlanda",
            ru: "Ирландия",
            ar: "أيرلندا"
        },
        dial_code: "+353"
    },
    {
        name: {
            fr: "Islande",
            en: "Iceland",
            es: "Islandia",
            pt: "Islândia",
            ru: "Исландия",
            ar: "آيسلندا"
        },
        dial_code: "+354"
    },
    {
        name: {
            fr: "Israël",
            en: "Israel",
            es: "Israel",
            pt: "Israel",
            ru: "Израиль",
            ar: "إسرائيل"
        },
        dial_code: "+972"
    },
    {
        name: {
            fr: "Italie",
            en: "Italy",
            es: "Italia",
            pt: "Itália",
            ru: "Италия",
            ar: "إيطاليا"
        },
        dial_code: "+39"
    },
    {
        name: {
            fr: "Jamaïque",
            en: "Jamaica",
            es: "Jamaica",
            pt: "Jamaica",
            ru: "Ямайка",
            ar: "جامايكا"
        },
        dial_code: "+1-876"
    },
    {
        name: {
            fr: "Japon",
            en: "Japan",
            es: "Japón",
            pt: "Japão",
            ru: "Япония",
            ar: "اليابان"
        },
        dial_code: "+81"
    },
    {
        name: {
            fr: "Jordanie",
            en: "Jordan",
            es: "Jordania",
            pt: "Jordânia",
            ru: "Иордания",
            ar: "الأردن"
        },
        dial_code: "+962"
    },
    {
        name: {
            fr: "Kazakhstan",
            en: "Kazakhstan",
            es: "Kazajistán",
            pt: "Cazaquistão",
            ru: "Казахстан",
            ar: "كازاخستان"
        },
        dial_code: "+7"
    },
    {
        name: {
            fr: "Kenya",
            en: "Kenya",
            es: "Kenia",
            pt: "Quênia",
            ru: "Кения",
            ar: "كينيا"
        },
        dial_code: "+254"
    },
    {
        name: {
            fr: "Kirghizistan",
            en: "Kyrgyzstan",
            es: "Kirguistán",
            pt: "Quirguistão",
            ru: "Киргизия",
            ar: "قيرغيزستان"
        },
        dial_code: "+996"
    },
    {
        name: {
            fr: "Kiribati",
            en: "Kiribati",
            es: "Kiribati",
            pt: "Kiribati",
            ru: "Кирибати",
            ar: "كيريباتي"
        },
        dial_code: "+686"
    },
    {
        name: {
            fr: "Koweït",
            en: "Kuwait",
            es: "Kuwait",
            pt: "Kuwait",
            ru: "Кувейт",
            ar: "الكويت"
        },
        dial_code: "+965"
    },
    {
        name: {
            fr: "Laos",
            en: "Laos",
            es: "Laos",
            pt: "Laos",
            ru: "Лаос",
            ar: "لاوس"
        },
        dial_code: "+856"
    },
    {
        name: {
            fr: "Lesotho",
            en: "Lesotho",
            es: "Lesoto",
            pt: "Lesoto",
            ru: "Лесото",
            ar: "ليسوتو"
        },
        dial_code: "+266"
    },
    {
        name: {
            fr: "Lettonie",
            en: "Latvia",
            es: "Letonia",
            pt: "Letônia",
            ru: "Латвия",
            ar: "لاتفيا"
        },
        dial_code: "+371"
    },
    {
        name: {
            fr: "Liban",
            en: "Lebanon",
            es: "Líbano",
            pt: "Líbano",
            ru: "Ливан",
            ar: "لبنان"
        },
        dial_code: "+961"
    },
    {
        name: {
            fr: "Liberia",
            en: "Liberia",
            es: "Liberia",
            pt: "Libéria",
            ru: "Либерия",
            ar: "ليبيريا"
        },
        dial_code: "+231"
    },
    {
        name: {
            fr: "Libye",
            en: "Libya",
            es: "Libia",
            pt: "Líbia",
            ru: "Ливия",
            ar: "ليبيا"
        },
        dial_code: "+218"
    },
    {
        name: {
            fr: "Liechtenstein",
            en: "Liechtenstein",
            es: "Liechtenstein",
            pt: "Liechtenstein",
            ru: "Лихтенштейн",
            ar: "ليختنشتاين"
        },
        dial_code: "+423"
    },
    {
        name: {
            fr: "Lituanie",
            en: "Lithuania",
            es: "Lituania",
            pt: "Lituânia",
            ru: "Литва",
            ar: "ليتوانيا"
        },
        dial_code: "+370"
    },
    {
        name: {
            fr: "Luxembourg",
            en: "Luxembourg",
            es: "Luxemburgo",
            pt: "Luxemburgo",
            ru: "Люксембург",
            ar: "لوكسمبورغ"
        },
        dial_code: "+352"
    },
    {
        name: {
            fr: "Macédoine du Nord",
            en: "North Macedonia",
            es: "Macedonia del Norte",
            pt: "Macedônia do Norte",
            ru: "Северная Македония",
            ar: "مقدونيا الشمالية"
        },
        dial_code: "+389"
    },
    {
        name: {
            fr: "Madagascar",
            en: "Madagascar",
            es: "Madagascar",
            pt: "Madagáscar",
            ru: "Мадагаскар",
            ar: "مدغشقر"
        },
        dial_code: "+261"
    },
    {
        name: {
            fr: "Malaisie",
            en: "Malaysia",
            es: "Malasia",
            pt: "Malásia",
            ru: "Малайзия",
            ar: "ماليزيا"
        },
        dial_code: "+60"
    },
    {
        name: {
            fr: "Malawi",
            en: "Malawi",
            es: "Malaui",
            pt: "Malawi",
            ru: "Малави",
            ar: "مالاوي"
        },
        dial_code: "+265"
    },
    {
        name: {
            fr: "Maldives",
            en: "Maldives",
            es: "Maldivas",
            pt: "Maldivas",
            ru: "Мальдивы",
            ar: "جزر المالديف"
        },
        dial_code: "+960"
    },
    {
        name: {
            fr: "Mali",
            en: "Mali",
            es: "Mali",
            pt: "Mali",
            ru: "Мали",
            ar: "مالي"
        },
        dial_code: "+223"
    },
    {
        name: {
            fr: "Malte",
            en: "Malta",
            es: "Malta",
            pt: "Malta",
            ru: "Мальта",
            ar: "مالطا"
        },
        dial_code: "+356"
    },
    {
        name: {
            fr: "Maroc",
            en: "Morocco",
            es: "Marruecos",
            pt: "Marrocos",
            ru: "Марокко",
            ar: "المغرب"
        },
        dial_code: "+212"
    },
    {
        name: {
            fr: "Marshall",
            en: "Marshall Islands",
            es: "Islas Marshall",
            pt: "Ilhas Marshall",
            ru: "Маршалловы Острова",
            ar: "جزر مارشال"
        },
        dial_code: "+692"
    },
    {
        name: {
            fr: "Maurice",
            en: "Mauritius",
            es: "Mauricio",
            pt: "Maurício",
            ru: "Маврикий",
            ar: "موريشيوس"
        },
        dial_code: "+230"
    },
    {
        name: {
            fr: "Mauritanie",
            en: "Mauritania",
            es: "Mauritania",
            pt: "Mauritânia",
            ru: "Мавритания",
            ar: "موريتانيا"
        },
        dial_code: "+222"
    },
    {
        name: {
            fr: "Mexique",
            en: "Mexico",
            es: "México",
            pt: "México",
            ru: "Мексика",
            ar: "المكسيك"
        },
        dial_code: "+52"
    },
    {
        name: {
            fr: "Micronésie",
            en: "Micronesia",
            es: "Micronesia",
            pt: "Micronésia",
            ru: "Микронезия",
            ar: "ميكرونيزيا"
        },
        dial_code: "+691"
    },
    {
        name: {
            fr: "Moldavie",
            en: "Moldova",
            es: "Moldavia",
            pt: "Moldávia",
            ru: "Молдавия",
            ar: "مولدوفا"
        },
        dial_code: "+373"
    },
    {
        name: {
            fr: "Monaco",
            en: "Monaco",
            es: "Mónaco",
            pt: "Mônaco",
            ru: "Монако",
            ar: "موناكو"
        },
        dial_code: "+377"
    },
    {
        name: {
            fr: "Mongolie",
            en: "Mongolia",
            es: "Mongolia",
            pt: "Mongólia",
            ru: "Монголия",
            ar: "منغوليا"
        },
        dial_code: "+976"
    },
    {
        name: {
            fr: "Monténégro",
            en: "Montenegro",
            es: "Montenegro",
            pt: "Montenegro",
            ru: "Черногория",
            ar: "الجبل الأسود"
        },
        dial_code: "+382"
    },
    {
        name: {
            fr: "Mozambique",
            en: "Mozambique",
            es: "Mozambique",
            pt: "Moçambique",
            ru: "Мозамбик",
            ar: "موزمبيق"
        },
        dial_code: "+258"
    },
    {
        name: {
            fr: "Namibie",
            en: "Namibia",
            es: "Namibia",
            pt: "Namíbia",
            ru: "Намибия",
            ar: "ناميبيا"
        },
        dial_code: "+264"
    },
    {
        name: {
            fr: "Nauru",
            en: "Nauru",
            es: "Nauru",
            pt: "Nauru",
            ru: "Науру",
            ar: "ناورو"
        },
        dial_code: "+674"
    },
    {
        name: {
            fr: "Népal",
            en: "Nepal",
            es: "Nepal",
            pt: "Nepal",
            ru: "Непал",
            ar: "نيبال"
        },
        dial_code: "+977"
    },
    {
        name: {
            fr: "Nicaragua",
            en: "Nicaragua",
            es: "Nicaragua",
            pt: "Nicarágua",
            ru: "Никарагуа",
            ar: "نيكاراغوا"
        },
        dial_code: "+505"
    },
    {
        name: {
            fr: "Niger",
            en: "Niger",
            es: "Níger",
            pt: "Níger",
            ru: "Нигер",
            ar: "النيجر"
        },
        dial_code: "+227"
    },
    {
        name: {
            fr: "Nigeria",
            en: "Nigeria",
            es: "Nigeria",
            pt: "Nigéria",
            ru: "Нигерия",
            ar: "نيجيريا"
        },
        dial_code: "+234"
    },
    {
        name: {
            fr: "Norvège",
            en: "Norway",
            es: "Noruega",
            pt: "Noruega",
            ru: "Норвегия",
            ar: "النرويج"
        },
        dial_code: "+47"
    },
    {
        name: {
            fr: "Nouvelle-Zélande",
            en: "New Zealand",
            es: "Nueva Zelanda",
            pt: "Nova Zelândia",
            ru: "Новая Зеландия",
            ar: "نيوزيلندا"
        },
        dial_code: "+64"
    },
    {
        name: {
            fr: "Oman",
            en: "Oman",
            es: "Omán",
            pt: "Omã",
            ru: "Оман",
            ar: "عمان"
        },
        dial_code: "+968"
    },
    {
        name: {
            fr: "Ouganda",
            en: "Uganda",
            es: "Uganda",
            pt: "Uganda",
            ru: "Уганда",
            ar: "أوغندا"
        },
        dial_code: "+256"
    },
    {
        name: {
            fr: "Ouzbékistan",
            en: "Uzbekistan",
            es: "Uzbekistán",
            pt: "Uzbequistão",
            ru: "Узбекистан",
            ar: "أوزبكستان"
        },
        dial_code: "+998"
    },
    {
        name: {
            fr: "Pakistan",
            en: "Pakistan",
            es: "Pakistán",
            pt: "Paquistão",
            ru: "Пакистан",
            ar: "باكستان"
        },
        dial_code: "+92"
    },
    {
        name: {
            fr: "Palaos",
            en: "Palau",
            es: "Palaos",
            pt: "Palau",
            ru: "Палау",
            ar: "بالاو"
        },
        dial_code: "+680"
    },
    {
        name: {
            fr: "Panama",
            en: "Panama",
            es: "Panamá",
            pt: "Panamá",
            ru: "Панама",
            ar: "بنما"
        },
        dial_code: "+507"
    },
    {
        name: {
            fr: "Papouasie-Nouvelle-Guinée",
            en: "Papua New Guinea",
            es: "Papúa Nueva Guinea",
            pt: "Papua Nova Guiné",
            ru: "Папуа - Новая Гвинея",
            ar: "بابوا غينيا الجديدة"
        },
        dial_code: "+675"
    },
    {
        name: {
            fr: "Paraguay",
            en: "Paraguay",
            es: "Paraguay",
            pt: "Paraguai",
            ru: "Парагвай",
            ar: "باراغواي"
        },
        dial_code: "+595"
    },
    {
        name: {
            fr: "Pays-Bas",
            en: "Netherlands",
            es: "Países Bajos",
            pt: "Países Baixos",
            ru: "Нидерланды",
            ar: "هولندا"
        },
        dial_code: "+31"
    },
    {
        name: {
            fr: "Pérou",
            en: "Peru",
            es: "Perú",
            pt: "Peru",
            ru: "Перу",
            ar: "بيرو"
        },
        dial_code: "+51"
    },
    {
        name: {
            fr: "Philippines",
            en: "Philippines",
            es: "Filipinas",
            pt: "Filipinas",
            ru: "Филиппины",
            ar: "الفلبين"
        },
        dial_code: "+63"
    },
    {
        name: {
            fr: "Pologne",
            en: "Poland",
            es: "Polonia",
            pt: "Polônia",
            ru: "Польша",
            ar: "بولندا"
        },
        dial_code: "+48"
    },
    {
        name: {
            fr: "Portugal",
            en: "Portugal",
            es: "Portugal",
            pt: "Portugal",
            ru: "Португалия",
            ar: "البرتغال"
        },
        dial_code: "+351"
    },
    {
        name: {
            fr: "Qatar",
            en: "Qatar",
            es: "Catar",
            pt: "Catar",
            ru: "Катар",
            ar: "قطر"
        },
        dial_code: "+974"
    },
    {
        name: {
            fr: "République centrafricaine",
            en: "Central African Republic",
            es: "República Centroafricana",
            pt: "República Centro-Africana",
            ru: "Центральноафриканская Республика",
            ar: "جمهورية أفريقيا الوسطى"
        },
        dial_code: "+236"
    },
    {
        name: {
            fr: "République démocratique du Congo",
            en: "Democratic Republic of the Congo",
            es: "República Democrática del Congo",
            pt: "República Democrática do Congo",
            ru: "Демократическая Республика Конго",
            ar: "جمهورية الكونغو الديمقراطية"
        },
        dial_code: "+243"
    },
    {
        name: {
            fr: "République dominicaine",
            en: "Dominican Republic",
            es: "República Dominicana",
            pt: "República Dominicana",
            ru: "Доминиканская Республика",
            ar: "جمهورية الدومينيكان"
        },
        dial_code: "+1-809"
    },
    {
        name: {
            fr: "République tchèque",
            en: "Czech Republic",
            es: "República Checa",
            pt: "República Tcheca",
            ru: "Чешская Республика",
            ar: "جمهورية التشيك"
        },
        dial_code: "+420"
    },
    {
        name: {
            fr: "Roumanie",
            en: "Romania",
            es: "Rumania",
            pt: "Romênia",
            ru: "Румыния",
            ar: "رومانيا"
        },
        dial_code: "+40"
    },
    {
        name: {
            fr: "Royaume-Uni",
            en: "United Kingdom",
            es: "Reino Unido",
            pt: "Reino Unido",
            ru: "Великобритания",
            ar: "المملكة المتحدة"
        },
        dial_code: "+44"
    },
    {
        name: {
            fr: "Russie",
            en: "Russia",
            es: "Rusia",
            pt: "Rússia",
            ru: "Россия",
            ar: "روسيا"
        },
        dial_code: "+7"
    },
    {
        name: {
            fr: "Rwanda",
            en: "Rwanda",
            es: "Ruanda",
            pt: "Ruanda",
            ru: "Руанда",
            ar: "رواندا"
        },
        dial_code: "+250"
    },
    {
        name: {
            fr: "Saint-Christophe-et-Niévès",
            en: "Saint Kitts and Nevis",
            es: "San Cristóbal y Nieves",
            pt: "São Cristóvão e Nevis",
            ru: "Сент-Китс и Невис",
            ar: "سانت كيتس ونيفيس"
        },
        dial_code: "+1-869"
    },
    {
        name: {
            fr: "Saint-Marin",
            en: "San Marino",
            es: "San Marino",
            pt: "San Marino",   
            ru: "Сан-Марино",
            ar: "سان مارينو"
        },
        dial_code: "+378"
    },
    {
        name: {
            fr: "Saint-Vincent-et-les-Grenadines",
            en: "Saint Vincent and the Grenadines",
            es: "San Vicente y las Granadinas",
            pt: "São Vicente e Granadinas",
            ru: "Сент-Винсент и Гренадины",
            ar: "سانت فينسنت والغرينادين"
        },
        dial_code: "+1-784"
    },
    {
        name: {
            fr: "Sainte-Lucie",
            en: "Saint Lucia",
            es: "Santa Lucía",
            pt: "Santa Lúcia",
            ru: "Сент-Люсия",
            ar: "سانت لوسيا"
        },
        dial_code: "+1-758"
    },
    {
        name: {
            fr: "Salomon",
            en: "Solomon Islands",
            es: "Islas Salomón",
            pt: "Ilhas Salomão",
            ru: "Соломоновы Острова",
            ar: "جزر سليمان"
        },
        dial_code: "+677"
    },
    {
        name: {
            fr: "Salvador",
            en: "El Salvador",
            es: "El Salvador",
            pt: "El Salvador",
            ru: "Сальвадор",
            ar: "السلفادور"
        },
        dial_code: "+503"
    },
    {
        name: {
            fr: "Samoa",
            en: "Samoa",
            es: "Samoa",
            pt: "Samoa",
            ru: "Самоа",
            ar: "ساموا"
        },
        dial_code: "+685"
    },
    {
        name: {
            fr: "São Tomé-et-Principe",
            en: "São Tomé and Príncipe",
            es: "Santo Tomé y Príncipe",
            pt: "São Tomé e Príncipe",
            ru: "Сан-Томе и Принсипи",
            ar: "ساو تومي وبرينسيبي"
        },
        dial_code: "+239"
    },
    {
        name: {
            fr: "Sénégal",
            en: "Senegal",
            es: "Senegal",
            pt: "Senegal",
            ru: "Сенегал",
            ar: "السنغال"
        },
        dial_code: "+221"
    },
    {
        name: {
            fr: "Serbie",
            en: "Serbia",
            es: "Serbia",
            pt: "Sérvia",
            ru: "Сербия",
            ar: "صربيا"
        },
        dial_code: "+381"
    },
    {
        name: {
            fr: "Seychelles",
            en: "Seychelles",
            es: "Seychelles",
            pt: "Seychelles",
            ru: "Сейшельские острова",
            ar: "سيشل"
        },
        dial_code: "+248"
    },
    {
        name: {
            fr: "Sierra Leone",
            en: "Sierra Leone",
            es: "Sierra Leona",
            pt: "Serra Leoa",
            ru: "Сьерра-Леоне",
            ar: "سيراليون"
        },
        dial_code: "+232"
    },
    {
        name: {
            fr: "Singapour",
            en: "Singapore",
            es: "Singapur",
            pt: "Cingapura",
            ru: "Сингапур",
            ar: "سنغافورة"
        },
        dial_code: "+65"
    },
    {
        name: {
            fr: "Slovaquie",
            en: "Slovakia",
            es: "Eslovaquia",
            pt: "Eslováquia",
            ru: "Словакия",
            ar: "سلوفاكيا"
        },
        dial_code: "+421"
    },
    {
        name: {
            fr: "Slovénie",
            en: "Slovenia",
            es: "Eslovenia",
            pt: "Eslovênia",
            ru: "Словения",
            ar: "سلوفينيا"
        },
        dial_code: "+386"
    },
    {
        name: {
            fr: "Somalie",
            en: "Somalia",
            es: "Somalia",
            pt: "Somália",
            ru: "Сомали",
            ar: "الصومال"
        },
        dial_code: "+252"
    },
    {
        name: {
            fr: "Soudan",
            en: "Sudan",
            es: "Sudán",
            pt: "Sudão",
            ru: "Судан",
            ar: "السودان"
        },
        dial_code: "+249"
    },
    {
        name: {
            fr: "Soudan du Sud",
            en: "South Sudan",
            es: "Sudán del Sur",
            pt: "Sudão do Sul",
            ru: "Южный Судан",
            ar: "جنوب السودان"
        },
        dial_code: "+211"
    },
    {
        name: {
            fr: "Sri Lanka",
            en: "Sri Lanka",
            es: "Sri Lanka",
            pt: "Sri Lanka",
            ru: "Шри-Ланка",
            ar: "سريلانكا"
        },
        dial_code: "+94"
    },
    {
        name: {
            fr: "Suède",
            en: "Sweden",
            es: "Suecia",
            pt: "Suécia",
            ru: "Швеция",
            ar: "السويد"
        },
        dial_code: "+46"
    },
    {
        name: {
            fr: "Suisse",
            en: "Switzerland",
            es: "Suiza",
            pt: "Suíça",   
            ru: "Швейцария",
            ar: "سويسرا"
        },
        dial_code: "+41"
    },
    {
        name: {
            fr: "Suriname",
            en: "Suriname",
            es: "Surinam",
            pt: "Suriname",
            ru: "Суринам",
            ar: "سورينام"
        },
        dial_code: "+597"
    },
    {
        name: {
            fr: "Syrie",
            en: "Syria",
            es: "Siria",
            pt: "Síria",
            ru: "Сирия",
            ar: "سوريا"
        },
        dial_code: "+963"
    },
    {
        name: {
            fr: "Tadjikistan",
            en: "Tajikistan",
            es: "Tayikistán",
            pt: "Tajiquistão",
            ru: "Таджикистан",
            ar: "طاجيكستان"
        },
        dial_code: "+992"
    },
    {
        name: {
            fr: "Tanzanie",
            en: "Tanzania",
            es: "Tanzania",
            pt: "Tanzânia",
            ru: "Танзания",
            ar: "تنزانيا"
        },
        dial_code: "+255"
    },
    {
        name: {
            fr: "Tchad",
            en: "Chad",
            es: "Chad",
            pt: "Chade",
            ru: "Чад",
            ar: "تشاد"
        },
        dial_code: "+235"
    },
    {
        name: {
            fr: "Thaïlande",
            en: "Thailand",
            es: "Tailandia",
            pt: "Tailândia",
            ru: "Таиланд",
            ar: "تايلاند"
        },
        dial_code: "+66"
    },
    {
        name: {
            fr: "Timor oriental",
            en: "Timor-Leste",
            es: "Timor-Leste",
            pt: "Timor-Leste",
            ru: "Восточный Тимор",
            ar: "تيمور الشرقية"
        },
        dial_code: "+670"
    },
    {
        name: {
            fr: "Togo",
            en: "Togo",
            es: "Togo",
            pt: "Togo",
            ru: "Того",
            ar: "توغو"
        },
        dial_code: "+228"
    },
    {
        name: {
            fr: "Tonga",
            en: "Tonga",
            es: "Tonga",
            pt: "Tonga",
            ru: "Тонга",
            ar: "تونغا"
        },
        dial_code: "+676"
    },
    {
        name: {
            fr: "Trinité-et-Tobago",
            en: "Trinidad and Tobago",
            es: "Trinidad y Tobago",
            pt: "Trinidad e Tobago",
            ru: "Тринидад и Тобаго",
            ar: "ترينيداد وتوباغو"
        },
        dial_code: "+1-868"
    },
    {
        name: {
            fr: "Tunisie",
            en: "Tunisia",
            es: "Túnez",
            pt: "Tunísia",
            ru: "Тунис",
            ar: "تونس"
        },
        dial_code: "+216"
    },
    {
        name: {
            fr: "Turkménistan",
            en: "Turkmenistan",
            es: "Turkmenistán",
            pt: "Turquemenistão",
            ru: "Туркменистан",
            ar: "تركمانستان"
        },
        dial_code: "+993"
    },
    {
        name: {
            fr: "Turquie",
            en: "Turkey",
            es: "Turquía",
            pt: "Turquia",
            ru: "Турция",
            ar: "تركيا"
        },
        dial_code: "+90"
    },
    {
        name: {
            fr: "Tuvalu",
            en: "Tuvalu",
            es: "Tuvalu",
            pt: "Tuvalu",
            ru: "Тувалу",
            ar: "توفالو"
        },
        dial_code: "+688"
    },
    {
        name: {
            fr: "Ukraine",
            en: "Ukraine",
            es: "Ucrania",
            pt: "Ucrânia",
            ru: "Украина",
            ar: "أوكرانيا"
        },
        dial_code: "+380"
    },
    {
        name: {
            fr: "Uruguay",
            en: "Uruguay",
            es: "Uruguay",
            pt: "Uruguai",
            ru: "Уругвай",
            ar: "أوروغواي"
        },
        dial_code: "+598"
    },
    {
        name: {
            fr: "Vanuatu",
            en: "Vanuatu",
            es: "Vanuatu",
            pt: "Vanuatu",
            ru: "Вануату",
            ar: "فانواتو"
        },
        dial_code: "+678"
    },
    {
        name: {
            fr: "Vatican",
            en: "Vatican",
            es: "Vaticano",
            pt: "Vaticano",
            ru: "Ватикан",
            ar: "الفاتيكان"
        },
        dial_code: "+379"
    },
    {
        name: {
            fr: "Venezuela",
            en: "Venezuela",
            es: "Venezuela",
            pt: "Venezuela",
            ru: "Венесуэла",
            ar: "فنزويلا"
        },
        dial_code: "+58"
    },
    {
        name: {
            fr: "Viêt Nam",
            en: "Vietnam",
            es: "Vietnam",
            pt: "Vietnã",
            ru: "Вьетнам",
            ar: "فيتنام"
        },
        dial_code: "+84"
    },
    {
        name: {
            fr: "Yémen",
            en: "Yemen",
            es: "Yemen",
            pt: "Iémen",
            ru: "Йемен",
            ar: "اليمن"
        },
        dial_code: "+967"
    },
    {
        name: {
            fr: "Zambie",
            en: "Zambia",
            es: "Zambia",
            pt: "Zâmbia",
            ru: "Замбия",
            ar: "زامبيا"
        },
        dial_code: "+260"
    },
    {
        name: {
            fr: "Zimbabwe",
            en: "Zimbabwe",
            es: "Zimbabue",
            pt: "Zimbábue",
            ru: "Зимбабве",
            ar: "زيمبابوي"
        },
        dial_code: "+263"
    }
];

// Traductions pour chaque langue des éléments de formulaire.
let translations = {
    en: {
        civility: "Civility",
        firstName: "Firstname",
        lastName: "Lastname",
        address: "Address",
        city: "City",
        country: "Country",
        email: "Email",
        phoneNumber: "Phone number",
        host: "Host",
        discovery: "How did you find us?",
        submit: "Submit"
    },
    fr: {
        civility: "Civilité",
        firstName: "Prénom",
        lastName: "Nom",
        address: "Adresse",
        city: "Ville",
        country: "Pays",
        email: "Email",
        phoneNumber: "Numéro de téléphone",
        host: "Hôte",
        discovery: "Comment nous avez-vous découverts ?",
        submit: "Envoyer"
    },
    es: {
        civility: "Cortesía",
        firstName: "Nombre",
        lastName: "Apellido",
        address: "Dirección",
        city: "Ciudad",
        country: "País",
        email: "Correo electrónico",
        phoneNumber: "Número de teléfono",
        host: "Anfitrión",
        discovery: "¿Cómo nos descubriste?",
        submit: "Enviar"
    },
    ru: {
        civility: "Вежливость",
        firstName: "Имя",
        lastName: "Фамилия",
        address: "Адрес",
        city: "Город",
        country: "Страна",
        email: "Электронная почта",
        phoneNumber: "Номер телефона",
        host: "Ведущий",
        discovery: "Как вы нас нашли?",
        submit: "Отправить"
    },
    ar: {
        civility: "اللقب",
        firstName: "الاسم الأول",
        lastName: "اسم العائلة",
        address: "العنوان",
        city: "المدينة",
        country: "البلد",
        email: "البريد الإلكتروني",
        phoneNumber: "رقم الهاتف",
        host: "المضيف",
        discovery: "كيف وجدتنا؟",
        submit: "إرسال"
    },
    pt: {
        civility: "Civilidade",
        firstName: "Primeiro nome",
        lastName: "Sobrenome",
        address: "Endereço",
        city: "Cidade",
        country: "País",
        email: "Email",
        phoneNumber: "Número de telefone",
        host: "Anfitrião",
        discovery: "Como você nos encontrou?",
        submit: "Enviar"
    }
};

// Sélection les éléments de formulaire.
const selectElement = document.querySelector('#country');
const dialCodeInput = document.querySelector('#phoneNumber');

// Récupérez la langue du stockage local, ou utilisez 'fr' par défaut.
let lang = localStorage.getItem('lang') || 'fr';

// Pays à mettre en avant.
let highlightedCountries = ["France", "Royaume-Uni", "États-Unis", "Émirats Arabes Unis", "Russie", "Espagne", "Brésil"];

function createOptions() {
    // Supprimez toutes les options existantes.
    selectElement.innerHTML = '';

    // Filtrez les pays à mettre en avant.
    let highlightedCountriesList = countries.filter(country => highlightedCountries.includes(country.name.fr));

    // Filtrez les autres pays.
    let otherCountries = countries.filter(country => !highlightedCountries.includes(country.name.fr));

    // Fusionnez les deux listes.
    let finalList = [...highlightedCountriesList, ...otherCountries];

    // Créez de nouvelles options avec le nom du pays dans la langue spécifiée.
    finalList.forEach(country => {
        const option = document.createElement('option');
        option.value = country.name[lang];
        option.dataset.dialCode = country.dial_code;
        option.text = country.name[lang];
        selectElement.appendChild(option);
    });
}

createOptions(); // Créez des options au chargement de la page.

selectElement.addEventListener('change', function () {
    const selectedOption = this.options[this.selectedIndex];
    dialCodeInput.value = selectedOption.dataset.dialCode;
});

// Lorsqu'un drapeau est cliqué, mettez à jour la langue dans le stockage local.
let elements = document.querySelectorAll('[class^="flagList__"]');

elements.forEach(element => {
    element.addEventListener('click', function () {
        lang = element.className.split('__')[1];
        localStorage.setItem('lang', lang);
        translatePage(); // Traduisez la page chaque fois qu'un drapeau est cliqué.
        createOptions(); // Mettez à jour les options de sélection de pays.
        updateFlags(); // Mettez à jour les drapeaux affichés.
    });
});

function translatePage() {
    for (let key in translations[lang]) {
        let elements = document.querySelectorAll('label.' + key + ', button.' + key);
        elements.forEach(element => {
            element.textContent = translations[lang][key];
        });
    }
}

function updateFlags() {
    // Pour chaque drapeau, s'il correspond à la langue actuelle, le masquer, sinon l'afficher.
    elements.forEach(element => {
        if (element.className.split('__')[1] === lang) {
            element.style.display = 'none';
        } else {
            element.style.display = 'inline';
        }
    });
}

// Traduisez la page et mettez à jour les drapeaux affichés au chargement de la page.
translatePage();
updateFlags();