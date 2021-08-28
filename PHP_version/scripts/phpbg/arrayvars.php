<?php
$langs = [""];
$country_flags = ["afg.svg", ""];
$country_nl = ["Afghanistan", "Albanië", "Algerije", "Andorra", "Angola", "Antigua en Barbuda", "Argentinië", "Armenië", "Australië", "Azerbeidzjan", "Bahama's", "Bahrein", "Bangladesh", "Barbados", "België", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnië en Herzegovina", "Botswana", "Brazilië", "Brunei", "Bulgarije", "Burkina Faso", "Burundi", "Cambodja", "Canada", "Centraal-Afrikaanse Republiek", "Chili", "China", "Colombia", "Comoren", "Congo-Brazzaville", "Congo-Kinshasa", "Costa Rica", "Cuba", "Cyprus", "Denemarken", "Djibouti", "Dominica", "Dominicaanse Republiek", "Duitsland", "Ecuador", "Egypte", "El Salvador", "Equatoriaal_Guinea", "Eritrea", "Estland", "Ethiopië", "Fiji", "Filipijnen", "Finland", "Frankrijk", "Gabon", "Gambia", "Georgië", "Ghana", "Grenada", "Griekenland", "Groenland", "Guatemala", "Guinee", "Guinee_Bissau", "Guyana", "Haïti", "Honduras", "Hongarije", "Ierland", "IJsland", "India", "Indonesië", "Irak", "Iran", "Israël", "Italië", "Ivoorkust", "Jamaica", "Japan", "Jemen", "Jordanië", "Kaapverdië", "Kameroen", "Kazachstan", "Kenia", "Kirgizië", "Kiribati", "Koeweit", "Kosovo", "Kroatië", "Laos", "Lesotho", "Letland", "Libanon", "Liberia", "Libië", "Liechtenstein", "Litouwen", "Luxemburg", "Madagaskar", "Malawi", "Maldiven", "Maleisië", "Mali", "Malta", "Marokko", "Marshalleilanden", "Mauritanië", "Mauritius", "Mexico", "Micronesia", "Moldavië", "Monaco", "Mongolië", "Montenegro", "Mozambique", "Myanmar", "Namibië", "Nauru", "Nederland", "Nepal", "Nicaragua", "Nieuw_Zeeland", "Niger", "Nigeria", "Noord_Korea", "Noord_Macedonië", "Noorwegen", "Oeganda", "Oekraïne", "Oezbekistan", "Oman", "Oostenrijk", "Oost_Timor", "Pakistan", "Palau", "Palestina", "Panama", "Papoea_Nieuw_Guinea", "Paraguay", "Peru", "Polen", "Portugal", "Qatar", "Roemenië", "Rusland", "Rwanda", "Saint Kitts en Nevis", "Saint Lucia", "Saint Vincent en de Grenadines", "Salomonseilanden", "Samoa", "San Marino", "Sao Tomé en Principe", "Saoedi_Arabië", "Senegal", "Servië", "Seychellen", "Sierra Leone", "Singapore", "Slovenië", "Slowakije", "Soedan", "Somalië", "Spanje", "Sri Lanka", "Suriname", "Swaziland", "Syrië", "Tadzjikistan", "taiwan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad en Tobago", "Tsjaad", "Tsjechië", "Tunesië", "Turkije", "Turkmenistan", "Tuvalu", "Uruguay", "Vanuatu", "Vaticaanstad", "Venezuela", "Verenigd Koninkrijk", "Verenigde Arabische Emiraten", "Verenigde Staten", "Vietnam", "Wit_Rusland", "Zambia", "Zimbabwe", "Zuid_Afrika", "Zuid_Korea", "Zuid_Soedan", "Zweden", "Zwitserland", "nog niet invullen"];
$country_en = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Azerbaijan", "The Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Canada", "Central African Republic", "Chile", "China", "Colombia", "Comoros", "Congo-Brazzaville", "Congo-Kinsasha", "Costa Rica", "Cuba", "Cyprus", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Germany", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "withhold for now"];
$areas = [
    $afghanistan = array("بدخشان/Badakhshān", "بادخیز/Bādghīs", "بغلان/Baghlān", "بلخ/Balkh", "بامیان/Bāmyān", "دايکندي/Dāykundī", "فراه/Farāh", "فارياب/Fāryāb", "غزني/Ghaznī", "غور/Ghōr", "هلمند/Helmand", "هرات/Herāt", "جوزجان/Jowzjān", "کابل/Kābul", "کندھار/Kandahār", "کاپيسا/Kāpīsā", "خوست/Khōst", "کونړ/Kunar", "كندوز/Kunduz", "لغمان/Laghmān", "لوگر/Lōgar", "ننګرهار/Nangarhār", "نیمروز/Nīmrōz", "نورستان/Nūristān", "اروزگان/Uruzgān", "پکتیا/Paktiyā", "پکتیکا/Paktīkā", "پنج شیر/Panjshayr", "پروان/Parwān", "سمنگان/Samangān", "سر پل/Sar-e Pul", "تخار/Takhār", "وردګ/Wardak", "زابل/Zābul"),
    $albanie = array("Berat", "Dibër", "Durrës", "Elbasan", "Fier", "Gjirokastër", "Korçë", "Kukës", "Lezhë", "Shkodër", "Tirana", "Vlorë"),
    $algerije = array("أدرار/Adrar", "عين الدفلى/Aïn-Defla", "ولاية عين تموشنت/Aïn Témouchent", "ولاية الجزائر/Algiers", "عنابة/Annaba", "ولاية باتنة/Batna", "بشار/Béchar", "بجاية/Béjaïa", "بسكرة/Biskra", "ولاية البليدة/Blida", "برج بو عريريج/Bordj Bou Arréridj", "البويرة/Bouira", "بومرداس/Boumerdès", "الشلف/Chlef", "قسنطينة/Constantine", "الجلفة/Djelfa", "البيض/El Bayadh", "الواد/El Oued", "الطارف/El Tarf", "غرداية/Ghardaïa", "قالمة/Guelma", "إليزي/Illizi", "ولاية جيجل/Jijel", "خنشلة/Khenchela", "الأغواط/Laghouat", "المدية/Médéa", "ميلة/Mila", "مستغانم/Mostaganem", "المسيلة/M'Sila", "معسكر/Mascara", "النعامة/Naama", "وهران/Oran", "ورقلة/Ouargla", "أم البواقي/Oum el-Bouaghi", "غليزان/Relizane", "سعيدة/Saïda", "سطيف/Sétif", "سيدي بلعباس/Sidi-bel-Abbès", "سكيكدة/Skikda", "سوق أهراس/Souk Ahras", "ولاية تمنراست/Tamanrasset", "تبسة/Tébessa", "تيارت/Tiaret", "تيندوف/Tindouf", "تيبازة/Tipaza", "تيسمسيلت/Tissemsilt", "تيزي وزو/Tizi Ouzou", "تلمسان/Tlemcen", "ولاية برج باجي مختار/Bordj Baji Mokhtar", "ولاية عين صالح/In Salah", "ولاية جانت/Djanet", "ولاية عين قزام/In Guezzam", "ولاية المغير/El M'Ghair", "ولاية تقرت/Touggourt", "ولاية بني عباس/Béni Abbès", "ولاية تيميمون/Timimoun", "ولاية أولاد جلال/Ouled Djellal", "ولاية المنيعة/El Menia"),
    $andorra = array("Andorra la Vella", "Canillo", "Encamp", "Escaldes-Engordany", "La Massana", "Ordino", "Sant Julià de Lòria"),
    $angola = array("Bengo", "Benguela", "Bié", "Cabinda", "Cuando Cubango", "Cuanza Norte", "Cuanza Sul", "Cunene", "Huambo", "Huíla", "Luanda", "Lunda Norte", "Lunda Sul", "Malanje", "Moxico", "Namibe", "Uíge", "Zaire"),
    $antigua_en_Barbuda = array("Saint George", "Saint John", "Saint Mary", "Saint Paul", "Saint Peter", "Saint Philip", "Barbuda"),
    $argentinie = array("Buenos Aires (provincia)", "Buenos Aires (ciudad autónoma)", "Catamarca", "Chaco", "Chubut", "Córdoba", "Corrientes", "Entre Ríos", "Formosa", "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquén", "Río Negro", "Salta", "San Juan", "San Luis", "Santa Cruz", "Santa Fe", "Santiago del Estero", "Tierra del Fuego, Antártida e Islas del Atlántico Sur", "Tucumán"),
    $armenie = array("Արագածոտն/Aragatsotn", "Արարատ/Ararat", "Արմավիր/Armavir", "Գեղարքունիք/Gecharkoenik", "Կոտայք/Kotajk", "Լոռի/Lori", "Շիրակ/Sjirak", "Սյունիք/Sjoenik", "Տավուշ/Tavoesj", "Վայոց Ձոր/Vajots Dzor", "Երևան/Jerevan"),
    $australie = array("Australian Capital Territory", "Jervis Bay Territory", "New South Wales", "Northern Territory", "Queensland", "Tasmania", "Victoria", "Western Australia", "South Australia", "Christmas Island", "Cocos (Keeling) Islands", "Norfolk Island"),
    $azerbeidzjan = array("Abşeron", "Gəncə-Qazax", "Şəki-Zaqatala", "Lənkəran", "Quba-Xaçmaz", "Aran", "Yuxarı Qarabağ", "Kəlbəcər-Laçın", "Şirvan", "Naxçıvan"),
    $Bahamas = array("The Bahamas (No specific 'area')"),
    $Bahrein = array("المحافظة الجنوبية/Al-Muḥāfaẓat al-Janūbīyah", "المحافظة الشمالية/Muḥāfaẓat aš-Šamālīyah", "محافظة المحرق/Muḥāfaẓat al-Muḥarraq", "محافظة العاصمة/Muḥāfaẓat al-ʿĀṣimah"),
    $Bangladesh = array("বরিশাল বিভাগ/Barisal", "চট্টগ্রাম বিভাগ/Chittagong", "ঢাকা বিভাগ/Dhaka", "খুলনা বিভাগ/Khulna", "ময়মনসিংহ বিভাগ/Mymensingh", "রাজশাহী বিভাগ/Rajshahi", "রংপুর বিভাগ/Rangpur", "সিলেট বিভাগ/Sylhet"),
    $Barbados = array("Barbados (No specific 'area')"),
    $Belgie = array("Antwerpen/Anvers", "Limburg/Limbourg", "Oost-Vlaanderen/Flandre-Orientale", "Vlaams-Brabant/Brabant flamand", "West-Vlaanderen/Flandre-Occidentale", "Henegouwen/Hainaut", "Luik/Liège/Lüttich", "Luxemburg/Luxembourg", "Namen/Namur", "Waals-Brabant/Brabant Wallon"),
    $Belize = array("Belize", "Cayo", "Corozal", "Orange Walk", "Stann Creek", "Toledo"),
    $Benin = array("Alibori", "Atacora", "Atlantique", "Borgou", "Collines", "Donga", "Couffo", "Littoral", "Mono", "Ouémé", "Plateau", "Zou"),
    $Bhutan = array("བུམ་ཐང་རྫོང་ཁག/Bumthang", "ཆུ་ཁ་རྫོང་ཁག/Chukha", "དར་དཀར་ནང/Dagana", "མགར་ས་རྫོང་ཁག/Gasa", "ཧཱ་/Haa", "ལྷུན་རྩེ་རྫོང་ཁག་/Lhuntse", "མོང་སྒར་རྫོང་ཁག/Mongar", "སྤ་རོ་རྫོང་ཁག/Paro", "པད་མ་དགའ་ཚལ་རྫོང་ཁག/Pemagatshel", "སྤུ་ན་ཁ་རྫོང་ཁག/Punakha", "བསམ་གྲུབ་ལྗོངས་མཁར་རྫོང་ཁག/Samdrup Jongkhar", "བསམ་རྩེ་རྫོང་ཁག/Samtse", "གསར་སྤང་རྫོང་ཁག/Sarpang", "ཐིམ་ཕུ་རྫོང་ཁག/Thimphu", "བཀྲ་ཤིས་སྒང་རྫོང་ཁག/Trashigang", "བཀྲ་ཤིས་གཡང་རྩེ་རྫོང་ཁག་/Trashiyangtse", "ཀྲོང་གསར་རྫོང་ཁག/Trongsa", "རྩི་རང་རྫོང་ཁག/Tsirang", "དབང་འདུས་ཕོ་བྲང་རྫོང་ཁག/Wangdue Phodrang", "གཞམས་སྒང་རྫོང་ཁག/Zhemgang"),
    $Bolivia = array("Beni", "Chuquisaca", "Cochabamba", "La Paz", "Oruro", "Pando", "Potosí", "Santa Cruz", "Tarija"),
    $Bosnie_en_Herzegovina = array("Unsko-sansk(a/i)", "Posavsk(a/i)", "Tuzlanski", "Zeničko-dobojsk(a/i)", "Bosansko-podrinjsk(a/i)", "Srednjobosanski/Središnja", "Hercegovačko-neretvansk(a/i)", "Sarajevsk(a/i)", "Sarajevo", "Hercegbosanska", "Бањалучка/Banja Luka", "Добојска/Doboj", "Бијељинска/Bijeljina", "Власеница/Vlasenica", "Источно Сарајево/Istočno Sarajevo", "Фочанска/Foča", "Требињска/Trebinje"),
    $Botswana = array("Central", "Ghanzi", "Kgalagadi", "Kgatleng", "Kweneng", "North-East", "North-West", "South-East", "Southern"),
    $Brazilie = array("Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí", "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia", "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins", "Distrito Federal"),
    $Brunei = array("Brunei-Muara", "Belait", "Tutong", "Temburong"),
    $Bulgarije = array("Благоевград/Blagoëvgrad", "Бургас/Boergas", "Добрич/Dobritsj", "Габрово/Gabrovo", "Хасково/Chaskovo", "Кърджали/Kardzjali", "Кюстендил/Kjoestendil", "Ловеч/Lovetsj", "Монтана/Montana", "Пазарджик/Pazardzjik", "Перник/Pernik", "Плевен/Pleven", "Пловдив/Plovdiv", "Русе/Roese", "Разград/Razgrad", "Шумен/Sjoemen", "Силистра/Silistra", "Сливен/Sliven", "Смолян/Smoljan", "София/Sofia(Cty.)", "Софийска област/Sofia(obl.)", "Стара Загора/Stara Zagora", "Търговище/Targovisjte", "Варна/Varna", "Велико Търново/Veliko Tarnovo", "Видин/Vidin", "Враца/Vratsa", "Ямбол/Jambol"),
    $Burkina_Faso = array("Boucle du Mouhoun", "Cascades", "Centre", "Centre-Est", "Centre-Nord", "Centre-Ouest", "Centre-Sud", "Est", "Hauts-Bassins", "Nord", "Plateau-Central", "Sahel", "Sud-Ouest"),
    $Burundi = array("Bubanza", "Bujumbura Mairie", "Bujumbura Rural", "Bururi", "Cankuzo", "Cibitoke", "Gitega", "Karuzi", "Kayanza", "Kirundo", "Makamba", "Muramvya", "Muyinga", "Mwaro", "Ngozi", "Rumonge", "Rutana", "Ruyigi"),
    $Cambodja = array("បន្ទាយមានជ័យ/Banteay Meanchey", "បាត់ដំបង/Battambang", "កំពង់ចាម/Kampong Cham", "កំពង់ឆ្នាំង/Kampong Chhnang", "កំពង់ស្ពឺ/Kampong Speu", "កំពង់ធំ/Kampong Thom", "កំពត/Kampot", "កណ្តាល/Kandal", "កោះកុង/Koh Kong", "ក្រចេះ/Kratié", "មណ្ឌលគិរី/Mondulkiri", "ភ្នំពេញ/Phnom Penh", "ព្រះវិហារ/Preah Vihear", "ព្រៃវែង/Prey Veng", "ពោធិ៍សាត់/Pursat", "រតនគិរី/Ratanak Kiri", "សៀមរាប/Siem Reap", "ព្រះសីហនុ/Preah Sihanouk", "ស្ទឹងត្រែង/Stung Treng", "ស្វាយរៀង/Svay Rieng", "តាកែវ/Takéo", "ឧត្តរមានជ័យ/Oddar Meanchey", "កែប/Kep", "ប៉ៃលិន/Pailin", "ត្បូងឃ្មុំ/Tboung Khmum"),
    $Canada = array("Ontario", "Qu(e/é)bec", "Nova Scotia", "New Brunswick/Nouveau-Brunswick", "Manitoba", "British Columbia/Colombie-Britannique", "Prince Edward Island/Île-du-Prince-Édouard", "Saskatchewan", "Alberta", "Newfoundland and Labrador/Terre-Neuve-et-Labrador", "Northwest Territories/Territoires du Nord-Ouest", "Yukon", "ᓄᓇᕗᑦ/Nunavut"),
    $Centraal_Afrikaanse_Republiek = array("Bangui/Bangî", "Mbomou", "Basse-Kotto", "Kémo", "Nana-Mambéré", "Ouham", "Sangha-Mbaéré", "Lobaye", "Ombella-M'Poko", "Ouham-Pendé", "Haut-Mbomou", "Ouaka", "Haute-Kotto", "Bamingui-Bangoran", "Vakaga", "Nana-Grébizi", "Mambéré-Kadéi"),
    $Chili = array("Arica y Parinacota", "Tarapacá", "Antofagasta", "Atacama", "Coquimbo", "Valparaíso", "Metropolitana de Santiago", "O'Higgins", "Maule", "Ñuble", "Biobío", "Araucanía", "Los Ríos", "Los Lagos", "Aysén", "Magallanes"),
    $China = array("安徽省/Anhui", "北京市/Beijing", "重庆市/Chongqing", "福建省/Fujian", "广东省/Guangdong", "甘肃省/Gansu", "广西壮族自治区/Guangxi Zhuang", "贵州省/Guizhou", "河南省/Henan", "湖北省/Hubei", "河北省/Hebei", "海南省/Hainan", "澳門/Maca(u/o)", "内蒙古自治区/Inner Mongolia", "宁夏回族自治区/Ningxia Hui", "青海省/Qinghai", "四川省/Sichuan", "山东省/Shandong", "上海市/Shanghai", "陕西省/Shaanxi", "山西省/Shanxi", "天津市/Tianjin", "شىنجاڭ ئۇيغۇر ئاپتونوم رايونى/新疆维吾尔自治区/Xinjiang", "བོད་རང་སྐྱོང་ལྗོངས།/西藏自治区/Tibet", "云南省/Yunnan", "浙江省/Zhejiang"),
    $Colombia = array("Bogota", "Amazonas", "Antioquia", "Arauca", "Atlántico", "Bolívar", "Boyacá", "Caldas", "Caquetá", "Casanare", "Cauca", "Cesar", "Chocó", "Córdoba", "Cundinamarca", "Guainía", "Guaviare", "Huila", "La Guajira", "Magdalena", "Meta", "Nariño", "Norte de Santander", "Putumayo", "Quindío", "Risaralda", "San Andrés y Providencia", "Santander", "Sucre", "Tolima", "Valle del Cauca", "Vaupés", "Vichada"),
    $Comoren = array("Anjouan", "Grande Comore", "Mohéli"),
    $Congo_Brazzaville = array("Bouenza", "Brazzaville", "Cuvette", "Cuvette-Ouest", "Kouilou", "Lékoumou", "Likouala", "Niari", "Plateaux", "Pool", "Sangha"),
    $Congo_Kinshasa = array("Kinshasa", "Kongo Central", "Kwango", "Kwilu", "Mai-Ndombe", "Kasaï", "Kasaï-Central", "Kasaï-Oriental", "Lomami", "Sankuru", "Maniema", "Sud-Kivu", "Nord-Kivu", "Ituri", "Haut-Uélé", "Tshopo", "Bas-Uélé", "Nord-Ubangi", "Mongala", "Sud-Ubangi", "Équateur", "Tshuapa", "Tanganyika", "Haut-Lomami", "Lualaba", "Haut-Katanga"),
    $Costa_Rica = array("Alajuela", "Cartago", "Guanacaste", "Heredia", "Limón", "Puntarenas", "San José"),
    $Cuba = array("Pinar del Río", "Artemisa", "La Habana", "Mayabeque", "Matanzas", "Cienfuegos", "Villa Clara", "Sancti Spíritus", "Ciego de Ávila", "Camagüey", "Las Tunas", "Granma", "Holguín", "Santiago de Cuba", "Guantánamo", "Isla de la Juventud"),
    $Cyprus = array("Αμμόχωστου/Mağusa/Famagusta", "Girne", "Λάρνακας/Larna(k/c)a", "Λεμεσού/Limasol", "Λευκωσίας/Lefkoşa/Nicosia", "Πάφου/Baf/Paphos"),
    $Denemarken = array("Hovedstaden", "Midtjylland", "Nordjylland", "Sjælland", "Syddanmark"),
    $Djibouti = array("`Adaylou", "Ali Adde", "على صبيح/Cali Sabiix/Ali Sabieh", "إقليم عرتا/(C)Arta", "As Eyla", "Balho", "Dadda'to", "Dikhil/إقليم دخيل", "Jabuuti/مدينة جيبوتي/Djibouti/", "Dorra", "Galafi", "Holhol", "Khor Angar", "Lac 'Assal", "Moulhoule", "Mousa Ali", "Obock/إقليم أوبوك", "Randa", "Tajoora/Tagórri/إقليم تاجورة/Tadjourah", "Yoboki"),
    $Dominica = array("Saint Andrew", "Saint David", "Saint George", "Saint John", "Saint Joseph", "Saint Luke", "Saint Mark", "Saint Patrick", "Saint Paul", "Saint Peter"),
    $Dominicaanse_Republiek = array("Distrito Nacional", "Azua", "Baoruco", "Barahona", "Dajabón", "Duarte", "El Seibo", "Elías Piña", "Espaillat", "Hato Mayor", "Hermanas Mirabal", "Independencia", "La Altagracia", "La Romana", "La Vega", "María Trinidad Sánchez", "Monseñor Nouel", "Monte Cristi", "Monte Plata", "Pedernales", "Peravia", "Puerto Plata", "Samaná", "San Cristóbal", "San José de Ocoa", "San Juan", "San Pedro de Macorís", "Sánchez Ramírez", "Santiago", "Santiago Rodríguez", "Santo Domingo", "Valverde"),
    $Duitsland = array("Baden-Württemberg", "Bayern", "Berlin", "Brandenburg", "Bremen", "Hamburg", "Hessen", "Mecklenburg-Vorpommern", "Niedersachsen", "Nordrhein-Westfalen", "Rheinland-Pfalz", "Saarland", "Sachsen", "Sachsen-Anhalt", "Schleswig-Holstein", "Thüringen"),
    $Ecuador = array("Azuay", "Bolívar", "Cañar", "Carchi", "Chimborazo", "Cotopaxi", "El Oro", "Esmeraldas", "Galápagos", "Guayas", "Imbabura", "Loja", "Los Ríos", "Manabí", "Morona Santiago", "Napo", "Orellana", "Pastaza", "Pichincha", "Santa Elena", "Santo Domingo de los Tsáchilas", "Sucumbíos", "Tungurahua", "Zamora Chinchipe"),
    $Egypte = array("الإسكندرية/Al Iskandariyah", "أسوان/Asswan", "أسيوط/Asyut", "البحيرة/Beheira", "بني سويف/Bani Suwayf", "القاهرة/Al Qahirah", "الدقهلية/Dakahleya", "دمياط/Damietta", "الفيوم/Faium", "الغربية/Gharbeya", "الجيزة/Al Jizah", "الإسماعيلية/Al Isma'iliyah", "كفر الشيخ/Kafr ash Shaykh", "مطروح/Matroh", "المنيا/Al Minya", "المنوفية/Menufeya", "الوادي الجديد/Al Wadi al Jadid", "شمال سيناء/Shamal Sina'", "پورسعيد/Bur Sa'id", "القليوبية/Kalyubeya", "قنا/Kena", "البحر الأحمر/Al Bahr al Ahmar", "الشرقية/Sharkeya", "سوهاج/Sohag", "جنوب سيناء/Janub Sina'", "السويس/As Suways", "الأقصر/Al Uqsur"),
    $El_Salvador = array("Ahuachapán", "Cabañas", "Chalatenango", "Cuscatlán", "La Libertad", "La Paz", "La Unión", "Morazán", "San Miguel", "San Salvador", "San Vicente", "Santa Ana", "Sonsonate", "Usulután"),
    $Equatoriaal_Guinea = array("Annobón/Ano-Bom", "Bioko Norte", "Bioko Sur", "Centro Sur", "Kié-Ntem", "Litoral", "Wele-Nzas", "Djibloho"),
    $Eritrea = array("ዞባ ማእከል/المنطقة المركزية/Ma’ĭkel/Al Awsaţ", "ዞባ ደቡብ/المنطقة , الجنوبية/Debub/Al Janūbī", "ዞባ ጋሽ ባርካ/منطقة القاش وبركا/Gash-Barka/Qāsh-Barkah", "ዞባ ዓንሰባ/منطقة عنسبا/Ans(a/e)ba", "ዞባ ሰሜናዊ ቀይሕ ባሕሪ/منطقة البحر الأحمر الشمال/Semienawi K’eyyĭḥ Baḥri/Shimālī al Baḩrī al Aḩmar", "ዞባ ደቡባዊ ቀይሕ ባሕሪ/منطقة البحر الأحمر الجنوب/Debubawi K’eyyĭḥ Baḥri/Janūbī al Baḩrī al Aḩmar"),
    $Estland = array("Harjumaa", "Hiiumaa", "Ida-Virumaa", "Järvamaa", "Jõgevamaa", "Läänemaa", "Lääne-Virumaa", "Pärnumaa", "Põlvamaa", "Raplamaa", "Saaremaa", "Tartumaa", "Valgamaa", "Viljandimaa", "Võrumaa"),
    $Ethiopie = array("አዲስ አበባ/Addis Abeba", "አፋር/Afar", "አማራ/Amhara", "ቤንሻንጉል-ጉምዝ/Benishangul-Gumuz", "ድሬዳዋ/Dire Dawa", "ጋምቤላ ሕዝቦች/Gambela", "ሀረሪ ሕዝብ/Harari", "ኦሮሚያ/Oromia", "ሶማሌ/Somali", "ደቡብ ብሔሮች ብሔረሰቦችና ሕዝቦችYedebub Biheroch Bihereseboch na Hizboch/", "ትግራይ/Tigray"),
    $Fiji = array("Ba", "Bua", "Cakaudrove", "Kadavu", "Lau", "Lomaiviti", "Macuata", "Nadroga-Navo(h/s)a", "Naitasiri", "Namosi", "Ra", "Rewa", "Serua", "Tailevu"),
    $Filipijnen = array("", "", "", "Cagayan Valley", "Central Luzon", "Calabarzon", "Mimaropa", "Bi(c/k)ol", "Western Visayas", "Central Visayas", "Eastern Visayas", "Zamboanga", "Northern Mindanao", "Davao", "Soccsksargen", "Caraga", "بانجسامورو/باڠسامورو/Bangsamoro"),
   ];
function countryout($countrynl, $countryen, $countryflags)
{
    $jefferson = 0;
    $countrynames = $_COOKIE['choosenlanguage'] == "nl" ? $countrynl : $countryen;

    $clength = count($countrynames);
    while ($jefferson < $clength) {
        //$imgconcat = "background-image: url('assets/img/flags/".$countryflags[$jefferson]."');";
        $blyat[$jefferson] = $_COOKIE['selecco'] == $countrynames[$jefferson] || $_COOKIE['selecco'] == $countryen[$jefferson] ? "<option id=\"' . $countrynames[$jefferson] . '\" value=\"' . $countrynames[$jefferson] . '\" selected>' . $countrynames[$jefferson] . '</option>" : "<option id=\"' . $countrynames[$jefferson] . '\" value=\"' . $countrynames[$jefferson] . '\">' . $countrynames[$jefferson] . '</option>";
        $jefferson++;
    }
    $cyka = implode($blyat);
    return $cyka;
}

function areaout($countrynl, $countryen, $areas)
{
    $areac = 0;
    while ($_COOKIE['selecco'] != $countrynl[$areac] && $_COOKIE['selecco'] != $countryen[$areac]) {
        $areac++;
    }
    $exita = count($areas[$areac]);
    $exit = 0;
    $inpar = 0;
    while ($exit < $exita) {
        $blyat[$inpar] = ('<option id="' . $areas[$areac][$exit] . '" value="' . $areas[$areac][$exit] . '">' . $areas[$areac][$exit] . '</option>');
        $exit++;
        $inpar++;
    }
    $cyka = implode($blyat);
    return $cyka;
}

//Function does not import country_en because this import is only for count() which has (afaik) no difference between those 2 arrays
function step2check($contrynl, $areas)
{
    $gotten1 = null;
    $gotten2 = null;
    $ccount = 0;
    $ccountd = count($contrynl);
    while ($ccount < $ccountd || $gotten1 == true) {
        if ($contrynl[$ccount] == $_SESSION['reg_country']) {
            $gotten1 = true;
            $ccountd = -1;
            break;
        } else {
            $ccount++;
        }
    }
    $jefferson1 = count($areas[$ccount]);
    $jefferson2 = 0;
    while ($jefferson2 < $jefferson1 || $gotten2) {
        if ($areas[$ccount][$jefferson2] == $_SESSION['reg_region']) {
            $gotten2 = true;
            $jefferson1 = -1;
        } else {
            $jefferson2++;
        }
    }
    return $gotten1 && $gotten2 ? true : false;
}