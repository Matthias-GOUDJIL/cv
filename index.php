<?php 
    session_start();
    function verifyInput($var){
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        return $var;
    }
?><!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts & icons-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Stylesheets-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="vendors/bxslider/dist/jquery.bxslider.min.css">
    <link rel="stylesheet" href="dist/css/styles.min.css">

    <!--meta title & description-->
    <title>matthias goudjil | développeur web</title>
    <meta name="description" content="développeur web junior résidant en vendée.
    Création d'outils numériques (sites, applications web, stratégie de communication).">
</head>

<body>

    <!-- Top-button-->
    <!-- <a id="arrow"><i class="fas fa-arrow-up"></i></a> -->
    <a id="arrow"><i class="fas fa-angle-up"></i></a>
  

    <header>       
        <!-- Navigation-toggler-->
        <button id="menu_toggler" class="hide" type="button">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navigation -->
        <nav id="menu_nav">
            <ul class="menu-content">
                <li class="menu-items">
                    <a class="menu-link" href="#about">
                        <i class="fas fa-info-circle"></i>a propos</a>
                </li>
                <li class="menu-items">
                    <a class="menu-link" href="#skills">
                        <i class="fas fa-cogs"></i>compétences</a>
                </li>
                <li class="menu-items">
                    <a class="menu-link" href="#achievements">
                        <i class="far fa-lightbulb"></i>réalisations</a>
                </li>
                <li class="menu-items ">
                    <a class="menu-link" href="cv.pdf">
                    <i class="far fa-address-card"></i>mon cv</a>
                </li>
                <li class="menu-items ">
                    <a class="menu-link" href="#contact">
                        <i class="far fa-envelope"></i>contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Parallax -->
    <!-- <div class="laptop-parallax parallax"> -->
    <div class="header-content">
        <div class="img-container">
            <img class="profil" src="assets/images/profil.jpg" alt="photo profil">
        </div>
        <div class="animated swing brand-container">
            <div>
                <h1 class="brand-name">Matthias</h1>
                <h1 class="brand-name"><span class="chevron">&lt;/</span>Goudjil<span class="chevron">&gt;</span></h1>
            </div>
            <div>
                <h2 class="brand-slogan">
                    <strong>Développeur Web Junior</strong>
                </h2>
            </div>
        </div>
    </div>
    <!-- </div> -->
    
    <!-- Section About -->
    <section id="about">
        <h1>A propos</h1>
        <div class="about-container">

            <div class="citation">
                <h3>Bonjour!</h3>
                <p><cite>"Passionné par les nouvelles technologies, internet et tout ce qui touche de près ou de loin à l'informatique, j'ai décidé au début de l'année 2018 d'entreprendre une reconversion professionnelle en suivant une formation "développeur web" chez ARINFO.</cite></p>
                <p><cite>Cette formation intensive labellisée Grande Ecole du Numérique et orientée projets (80% de pratique), m'a permis d'acquérir de vrais compétences en tant que développeur junior ou intégrateur web."</cite></p>
            </div>

            <div class="contratpro">
                <h3>Actus</h3>
                <p>En cours de formation <strong>développeur web</strong> chez <strong>ARINFO*</strong> jusqu'au 03 août 2018.</p>

                <p> Possibilité de poursuivre en <strong>contrat de professionnalisation</strong></p>
                <p>(à partir de septembre 2018 - durée: 1an)</p>
                <p><strong>"Designer Web"</strong> (titre professionnel de niveau III (bac +2) inscrit au RNCP.</p>

                <p>Vous etes une entreprise ou une institution ?</p>
                <a href="#contact"><button class="contact-btn" type=button>contactez-moi!</button></a>
                <p class="note">*Formation labellisée <strong>Grande Ecole du Numérique.</strong></p>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="skills">
        <h1>compétences</h1>
        <div class="skills-container ">
            <div class="right skills-box">
                <i class="fas fa-mobile-alt"></i>
                <h3>Création de sites et applications web modernes et responsives</h3>
                <ul>
                    <li>-langages: HTML5/CSS3, JavaScript(ES6)/jQuery, PHP5/7,</li>
                    <li>-CMS et librairies: Wordpress, Prestashop, Bootstrap, React, EXTjs, API</li>
                </ul>
            </div>
            <div class="right skills-box">
                <i class="fas fa-bullhorn"></i>
                <h3>Stratégie de communication et référencement</h3>
                <ul>
                    <li>-SEO naturel (en cours d'apprentissage)</li>
                    <li>-campagne e-mailing</li>
                    <li>-web design (illustrator, Photoshop)<br>(alternatives opensource: Inkscape, GIMP)</li>
                </ul>
            </div>
            <div class="left skills-box">
                <i class="fas fa-server"></i>
                <h3>environnement serveur, maintenance</h3>
                <ul>
                    <li>-mise en place environnement LAMP</li>
                    <li>-maintenance de base (mises à jour, backups)</li>
                    <li>-mise en place de l'hébergement, création de domaines</li>
                    <li>-gestion de certificats SSL</li>
                    <li>-SSH</li>
                </ul>
            </div>
            <div class="left skills-box">
                <i class="fas fa-handshake"></i>
                <h3>Travail en équipe</h3>
                <ul>
                    <li>-methode SCRUM Agile.</li>
                    <li>outils collaboratifs: Git, Trello</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section Portfolio -->
    <section id="achievements">
        <h1>projets réalisés pendant la formation</h1>
        <div class="slider">
            <div>
                <img src="assets/images/site-responsive.png" title="https://matthias-goudjil.github.io/loso/" alt="lorem">
            </div>
            <div>
                <img src="assets/images/widgets_js.png" title="https://matthias-goudjil.github.io/admin/html/gadgets.html" alt="lorem">
            </div>
            <div>
                <img src="assets/images/burger-slide.png" title="lorem" alt="lorem">
            </div>
        </div>
    </section>

    <footer>
        
        <h1>contact</h1>
        <!-- Contact Form -->
        <section id="contact" >
            <form class="contactform" action="contact.php" method="post">
                <fieldset class="contact-fieldset">
                    <div>
                        <input type="text" name="lastname" id="lastname" placeholder="votre nom" value="<?= isset($_SESSION['inputs']['lastname']) ? verifyInput($_SESSION['inputs']['lastname']) : ''; ?>">
                    </div>
                    
                    <div>
                        <input type="text" name="firstname" id="firstname" placeholder="votre prénom" value="<?= isset($_SESSION['inputs']['firstname']) ? verifyInput($_SESSION['inputs']['firstname']) : ''; ?>">
                    </div>
                    <div>
                        <input type="text" name="email" id="email" placeholder="votre email" value="<?= isset($_SESSION['inputs']['email']) ? verifyInput($_SESSION['inputs']['email']) : ''; ?>">
                    </div>
                    <div>
                        <input type="text" name="subject" id="subject" placeholder="sujet" value="<?= isset($_SESSION['inputs']['subject']) ? verifyInput($_SESSION['inputs']['subject']) : ''; ?>">
                    </div>                    
                </fieldset>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="votre message"><?= isset($_SESSION['inputs']['message']) ? verifyInput($_SESSION['inputs']['message']) : ''; ?></textarea>
                
                <div class="captcha-container">
                    <img src="captcha.php" alt="captcha">
                    <input type="text" name="captcha" id="captcha" placeholder="Entrez le NOMBRE indiqué" value="<?= isset($_SESSION['inputs']['captcha']) ? verifyInput($_SESSION['inputs']['captcha']) : ''; ?>">                
                </div>

                <?php if (array_key_exists('errors',$_SESSION)): ?>
                    <div class="error-submit">
                        <?= implode('<br>', $_SESSION['errors']); ?>
                    </div>
                <?php unset($_SESSION['errors']); endif; ?>
    
                <?php if (array_key_exists('success',$_SESSION)): ?>
                    <div class="success-submit">
                        Votre email a bien été envoyé! Je vous répondrai dans les plus brefs délais. Merci de votre visite et à bientôt!
                    </div>
                <?php unset($_SESSION['success']); endif; ?>


                <button id="btn-submit" type="submit" name="submit">envoyer </button>             
            </form>
        </section>

        <section id="social-networks">
            <div class="icons-container">
                <a href="https://www.linkedin.com/in/matthias-goudjil"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/Matthias-GOUDJIL"><i class="fab fa-github-square"></i></a>
            </div>
            <p class="credits">site développé par -  matthias goudjil  - 2018  -</p>
        </section>

    </footer>

    <!-- Scripts-->
    <script src="dist/js/jquery3-3.3.1.min.js"></script>
    <script src="dist/js/jquery.waypoints.min.js"></script>
    <script src="vendors/bxslider/dist/jquery.bxslider.min.js"></script>
    <script src="dist/js/all.min.js"></script>

</body>

</html>

<?php 
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>