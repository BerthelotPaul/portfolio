<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paul Berthelot</title>
    <link rel="icon" href="./src/logo.ico">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="./css/mobile.css" />
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="./inc/fonctions/rotationTexte.js"></script>

    <div class="main">
        <div class="flex-col navigation" id="left">
            <h2>Berthelot</h2>
            <a href="#ancreAccueil">Accueil</a>
            <a href="#ancrePropos">A Propos</a>
            <a href="#ancreCompetences">Compétences</a>
            <a href="#ancreExperiences">Expériences</a>
            <a href="#ancreDemonstration">Projets</a>
            <a href="#ancreContact">Contact</a>
            <h3>© Copyright Paul Berthelot - 2022</h3>
        </div>

        <div class="body" id="right">
            <div class="flex-col presentation" id="ancreAccueil">
                <h1>&ltPaul Berthelot /&gt</h1>
                <div class="rotation-presentation"><span class="texte"></span></div>
            </div>

            <div class="flex a-propos" id="ancrePropos">
                <div class="titre">
                    <h1>A Propos</h1>
                    <h2></h2>
                </div>

                <div class="flex-col carte-a-propos">
                    <h3>Qui suis-je ?</h3>
                    <p>Je m'appelle Paul Berthelot , j'ai 20 ans , j'habite Saint-Malo et je suis en BTS SIO option SLAM.
                        Je suis actuellement en recherche d'alternance pour un titre de Concepteur
                        Développeur d'Applications.
                    </p>
                    <img src="./src/paul.png" alt="">
                    <div class="lien-carte-a-propos">
                        <a target="_blank" href="https://github.com/BerthelotPaul">GitHub</a>
                        <a target="_blank" href="https://fr.linkedin.com/in/paul-berthelot-012198198">Linkdin</a>
                    </div>
                </div>
            </div>

            <div class="competences" id="ancreCompetences">
                <div class="titre">
                    <h1>Compétences</h1>
                </div>
                <div class="carte-competences">
                    <div class="carte-competences--box1">
                        <h2>Language Web</h2>
                        <h5>HTML</h5>
                        <progress value="80" max="100"></progress>
                        <h5>CSS</h5>
                        <progress value="80" max="100"></progress>
                        <h5>PHP</h5>
                        <progress value="60" max="100"></progress>
                        <h5>JS</h5>
                        <progress value="40" max="100"></progress>
                    </div>

                    <div class="carte-competences--box2">
                        <h2>Language App</h2>
                        <h5>Java</h5>
                        <progress value="60" max="100"></progress>
                        <h5>Python</h5>
                        <progress value="30" max="100"></progress>
                        <h5>SQL</h5>
                        <progress value="50" max="100"></progress>
                    </div>

                    <div class="carte-competences--box3">
                        <h2>Réseaux et OS</h2>
                        <h5>Windows</h5>
                        <progress value="60" max="100"></progress>
                        <h5>Linux</h5>
                        <progress value="50" max="100"></progress>
                        <h5>Routage</h5>
                        <progress value="30" max="100"></progress>
                    </div>


                    <div class="carte-competences--box4">
                        <h2>Outils</h2>
                        <h5>Photoshop</h5>
                        <progress value="50" max="100"></progress>
                        <h5>VSC</h5>
                        <progress value="80" max="100"></progress>
                        <h5>Sony Vegas</h5>
                        <progress value="30" max="100"></progress>
                        <h5>Figma</h5>
                        <progress value="60" max="100"></progress>
                    </div>
                </div>

                <div class="carte-competences">
                    <div class="carte-competences--box5">
                        <h2>Gestion de Projet</h2>
                        <h5>Travail d'équipe</h5>
                        <progress value="80" max="100"></progress>
                        <h5>Maquette</h5>
                        <progress value="70" max="100"></progress>
                        <h5>MCD</h5>
                        <progress value="30" max="100"></progress>
                    </div>

                    <a target="_blank" href="https://github.com/BerthelotPaul/notions-vues">Repertoire de mes compétences</a>

                    <div class="carte-competences--box6">
                        <h2>Framework</h2>
                        <h5>Bootstrap</h5>
                        <progress value="60" max="100"></progress>
                        <h5>JQuery</h5>
                        <progress value="30" max="100"></progress>
                    </div>
                </div>
            </div>

            <div class="flex experiences" id="ancreExperiences">
                <div class="titre">
                    <h1>Expériences</h1>
                </div>

                <div class="cadre">
                    <div>
                        <h2>CHSM</h2>
                        <p>Développement web pour <br>
                            une solution d'outils intranet <br>
                            HTML , CSS , PHP , JS , <br>
                            Jquery, Shell Script
                        </p>
                        <img src="./src/chsm.jpg" alt="">
                    </div>
                    <div>
                        <h2>ENSM</h2>
                        <p>Maintenance informatique ,<br>
                            Projet HTML / CSS pour <br>
                            un plan intérractif de réseau
                        </p>
                        <img src="./src/ensm.jpg" alt="">
                    </div>

                    <div>
                        <h2>Ouest PC</h2>
                        <p>Maintenance informatique ,<br>
                            assitance utilisateurs <br>
                        </p>
                        <img src="./src/ouestpc.jpg" alt="">
                    </div>
                </div>

                <div class="lien-experiences">
                    <a target="_blank" href="./src/Paul_Berthelot_CV.pdf">Mon CV</a>
                </div>

            </div>
            <div class="demonstration" id="ancreDemonstration">
                <div class="titre">
                    <h1>Projets</h1>
                </div>
                <div class="cadre">
                    <div>
                        <h2>Webtools</h2>
                        <p>Collection d'outils web sur une <br>
                            plateforme intra-net à utilité <br>
                            du personnel.
                        </p>
                        <img src="./src/webtools.png" alt="">
                        <a href="">Voir plus</a>
                    </div>
                    <div>
                        <h2>MMO</h2>
                        <p>Solution légère et lourde<br>
                            de gestion d'emprunt de livre<br>
                            pour une Bibliotheque.
                        </p>
                        <img src="./src/mmo.png" alt="">
                        <a href="">Voir plus</a>
                    </div>
                    <div>
                        <h2>Portfolio</h2>
                        <p>Site web actuel <br>
                        pour montrer en visibilité <br>
                        et pour valider mon BTS
                        </p>
                        <img src="./src/portfolio.png" alt="">
                        <a href="">Voir plus</a>
                    </div>
                </div>
            </div>
            <div class="contact" id="ancreContact">
                <div class="titre">
                    <h1>Contact</h1>
                </div>

                <div class="carte-contact">
                    <div>
                        <h2>Envie de me contacter ?</h2>
                        <br>
                        <h3>paulberthelotpro@gmail.com</h3>
                        <br>
                        <h3>Ou</h3>
                        <br>
                        <h3><a target="_blank" href="https://fr.linkedin.com/in/paul-berthelot-012198198">Linkdin</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>