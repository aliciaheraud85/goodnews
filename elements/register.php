<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/goodnews/divers/css/register.css">
    <title>M'inscrire</title>
</head>
<body>
    <?php include(__DIR__ . '/header.php'); ?>

    <div class="container-fluid">
        <div class="container form">
            <div class="row"></div>
            <div class="col-md-12">
                <h2 class="zxtitre">Je m'inscris</h2>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/goodnews/security/traitementRegister.php" method="POST" enctype="multipart/form-data">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mb-3" id="lastname" name="lastname" placeholder="NOM" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mb-3" id="firstname" name="firstname" placeholder="Prénom" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mb-3" id="username" name="user_name" placeholder="Nom d'utilisateur" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mb-3" id="city" name="city" placeholder="Ville" required>
                            </div>
                            <div class="col-md-12">
                                <select class="form-control mb-3" name="country" id="country" required>
                                    <option value="">Pays</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="ZA">Afrique du Sud</option>
                                    <option value="AL">Albanie</option>
                                    <option value="DZ">Algérie</option>
                                    <option value="DE">Allemagne</option>
                                    <option value="MK">Ancienne République yougoslave de Macédoine</option>
                                    <option value="AD">Andorre</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctique</option>
                                    <option value="AG">Antigua-et-Barbuda</option>
                                    <option value="AN">Antilles néerlandaises</option>
                                    <option value="SA">Arabie saoudite</option>
                                    <option value="AR">Argentine</option>
                                    <option value="AM">Arménie</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australie</option>
                                    <option value="AT">Autriche</option>
                                    <option value="AZ">Azerbaïdjan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahreïn</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbade</option>
                                    <option value="BE">Belgique</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Bénin</option>
                                    <option value="BM">Bermudes</option>
                                    <option value="BT">Bhoutan</option>
                                    <option value="BY">Biélorussie</option>
                                    <option value="BO">Bolivie</option>
                                    <option value="BA">Bosnie-et-Herzégovine</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brésil</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgarie</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodge</option>
                                    <option value="CM">Cameroun</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cap-Vert</option>
                                    <option value="CL">Chili</option>
                                    <option value="CN">Chine</option>
                                    <option value="CY">Chypre</option>
                                    <option value="CO">Colombie</option>
                                    <option value="KM">Comores</option>
                                    <option value="CG">Congo</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatie</option>
                                    <option value="CU">Cuba</option>
                                    <option value="DK">Danemark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominique</option>
                                    <option value="EG">Égypte</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="AE">Émirats arabes unis</option>
                                    <option value="EC">Équateur</option>
                                    <option value="ER">Érythrée</option>
                                    <option value="ES">Espagne</option>
                                    <option value="EE">Estonie</option>
                                    <option value="FM">États fédérés de Micronésie</option>
                                    <option value="US">États-Unis</option>
                                    <option value="ET">Éthiopie</option>
                                    <option value="FJ">Fidji</option>
                                    <option value="FI">Finlande</option>
                                    <option value="FR">France</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambie</option>
                                    <option value="GE">Géorgie</option>
                                    <option value="GS">Géorgie du Sud-et-les Îles Sandwich du Sud</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Grèce</option>
                                    <option value="GD">Grenade</option>
                                    <option value="GL">Groenland</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GN">Guinée</option>
                                    <option value="GQ">Guinée équatoriale</option>
                                    <option value="GW">Guinée-Bissau</option>
                                    <option value="GY">Guyane</option>
                                    <option value="GF">Guyane française</option>
                                    <option value="HT">Haïti</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hongrie</option>
                                    <option value="BV">Ile Bouvet</option>
                                    <option value="CX">Ile Christmas</option>
                                    <option value="NF">Île Norfolk</option>
                                    <option value="PN">Île Pitcairn</option>
                                    <option value="AX">Iles Aland</option>
                                    <option value="KY">Iles Cayman</option>
                                    <option value="CC">Iles Cocos (Keeling)</option>
                                    <option value="CK">Iles Cook</option>
                                    <option value="FO">Îles Féroé</option>
                                    <option value="HM">Îles Heard-et-MacDonald</option>
                                    <option value="FK">Îles Malouines</option>
                                    <option value="MP">Îles Mariannes du Nord</option>
                                    <option value="MH">Îles Marshall</option>
                                    <option value="UM">Îles mineures éloignées des États-Unis</option>
                                    <option value="SB">Îles Salomon</option>
                                    <option value="TC">Îles Turques-et-Caïques</option>
                                    <option value="VG">Îles Vierges britanniques</option>
                                    <option value="VI">Îles Vierges des États-Unis</option>
                                    <option value="IN">Inde</option>
                                    <option value="ID">Indonésie</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Irlande</option>
                                    <option value="IS">Islande</option>
                                    <option value="IL">Israël</option>
                                    <option value="IT">Italie</option>
                                    <option value="LY">Jamahiriya arabe libyenne</option>
                                    <option value="JM">Jamaïque</option>
                                    <option value="JP">Japon</option>
                                    <option value="JO">Jordanie</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KG">Kirghizistan</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Koweït</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LV">Lettonie</option>
                                    <option value="LB">Liban</option>
                                    <option value="LR">Libéria</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lituanie</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MY">Malaisie</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malte</option>
                                    <option value="MA">Maroc</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MU">Maurice</option>
                                    <option value="MR">Mauritanie</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexique</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolie</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibie</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Népal</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigéria</option>
                                    <option value="NU">Niué</option>
                                    <option value="NO">Norvège</option>
                                    <option value="NC">Nouvelle-Calédonie</option>
                                    <option value="NZ">Nouvelle-Zélande</option>
                                    <option value="OM">Oman</option>
                                    <option value="UG">Ouganda</option>
                                    <option value="UZ">Ouzbékistan</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palaos</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papouasie-Nouvelle-Guinée</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="NL">Pays-Bas</option>
                                    <option value="PE">Pérou</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PL">Pologne</option>
                                    <option value="PF">Polynésie française</option>
                                    <option value="PR">Porto Rico</option>
                                    <option value="PT">Portugal</option>
                                    <option value="TW">Province chinoise de Taiwan</option>
                                    <option value="QA">Qatar</option>
                                    <option value="SY">République arabe syrienne</option>
                                    <option value="CF">République centrafricaine</option>
                                    <option value="KR">République de Corée</option>
                                    <option value="MD">République de Moldavie</option>
                                    <option value="CD">République démocratique du Congo</option>
                                    <option value="DO">République dominicaine</option>
                                    <option value="IR">République islamique d'Iran</option>
                                    <option value="KP">République populaire démocratique de Corée</option>
                                    <option value="LA">République Populaire du Laos</option>
                                    <option value="CZ">République tchèque</option>
                                    <option value="TZ">République-Unie de Tanzanie</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Roumanie</option>
                                    <option value="GB">Royaume-Uni</option>
                                    <option value="RU">Russie</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="EH">Sahara occidental</option>
                                    <option value="KN">Saint-Christophe-et-Niévès</option>
                                    <option value="SM">Saint-Marin</option>
                                    <option value="PM">Saint-Pierre-et-Miquelon</option>
                                    <option value="VA">Saint-Siège (Cité du Vatican)</option>
                                    <option value="VC">Saint-Vincent-et-les Grenadines</option>
                                    <option value="SH">Sainte-Hélène</option>
                                    <option value="LC">Sainte-Lucie</option>
                                    <option value="WS">Samoa</option>
                                    <option value="AS">Samoa américaines</option>
                                    <option value="ST">Sao Tomé-et-Principe</option>
                                    <option value="SN">Sénégal</option>
                                    <option value="CS">Serbie-et-Monténégro</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapour</option>
                                    <option value="SK">Slovaquie</option>
                                    <option value="SI">Slovénie</option>
                                    <option value="SO">Somalie</option>
                                    <option value="SD">Soudan</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SE">Suède</option>
                                    <option value="CH">Suisse</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard et Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="TJ">Tadjikistan</option>
                                    <option value="TD">Tchad</option>
                                    <option value="IO">Territoire britannique de l'océan Indien</option>
                                    <option value="TF">Territoire Francais du Sud</option>
                                    <option value="PS">Territoires palestiniens occupés</option>
                                    <option value="TH">Thaïlande</option>
                                    <option value="TL">Timor oriental</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinité-et-Tobago</option>
                                    <option value="TN">Tunisie</option>
                                    <option value="TM">Turkménistan</option>
                                    <option value="TR">Turquie</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Vénézuéla</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="WF">Wallis-et-Futuna</option>
                                    <option value="YE">Yémen</option>
                                    <option value="ZM">Zambie</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Adresse email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Mot de passe" required>
                            </div>
                            <div class="col-md-12">
                                <input type="password" class="form-control mb-3" id="password" name="password2" placeholder="Confirmez le mot de passe" required>
                            </div>
                            <div class="col-md-12">
                                <input class="mb-3" type="checkbox" id="rgpd" name="rgpd" required>J'accepte les termes rgpd.
                            </div>
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary m-4 boutton">Je m'inscris</button>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-3 p-3" style="text-align : right;"><p>Déjà inscrit ?</p></div>
                                    <div class="col-md-3 p-3"><a class="lien" href="/goodnews/elements/login.php">Je me connecte</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>

    <?php include(__DIR__ . '/footer.php'); ?>
</body>
</html>
