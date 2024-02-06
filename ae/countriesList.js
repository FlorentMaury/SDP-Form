const countries = [
    { 
        name: {
            fr: "Afghanistan",
            en: "Afghanistan",
            es: "Afganistán",
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
            ru: "Зимбабве",
            ar: "زيمبابوي"
        }, 
        dial_code: "+263" 
    }
  ];
  
  
  // Supposons que vous ayez un élément select avec l'id "countrySelect"
  const selectElement = document.querySelector('#country');
  
  // Et un champ d'input pour l'indicatif téléphonique avec l'id "dialCodeInput"
  const dialCodeInput = document.querySelector('#phoneNumber');
  
  // Et une variable "lang" qui contient la langue actuellement sélectionnée
  let lang = 'ar'; // par exemple
  
  // Vous pouvez alors créer des options pour chaque pays comme suit :
  countries.forEach(country => {
      const option = document.createElement('option');
      option.value = country.dial_code;
      option.text = country.name[lang];
      selectElement.appendChild(option);
  });
  
  // Ajoutez un gestionnaire d'événements 'change' à l'élément select
  selectElement.addEventListener('change', function() {
      // Récupérez l'indicatif téléphonique du pays sélectionné
      const selectedDialCode = this.value;
  
      // Mettez à jour le champ de l'indicatif téléphonique
      dialCodeInput.value = selectedDialCode;
  });