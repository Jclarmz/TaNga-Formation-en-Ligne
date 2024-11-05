<!doctype html>
<html lang="fr">
<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>TaNga | Formation en ligne</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/tangaT.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
   
   <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="images/all-icon/map.png" alt="icon"><span>KM4-Pemba, Ponte-Noire</span></li>
                                <li><img src="images/all-icon/email.png" alt="icon"><span>contact@tangads.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Ouvert tous les jours, pendant 24 heures</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/tanga.png" alt="Logo" width="30px" height="50px" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Souhaitez-vous avoir de l'aide ? Nous appeler</p>
                                    <span>+242 06 858 05 77</span>
                                </div>
                            </div>
                            <!-- <div class="button float-left">
                                <a href="+242057040684" class="main-btn">Appeler maintenant</a>
                            </div> -->
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="active" href="index.html">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html">Nous</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="courses.html">Cours</a>
                                        <ul class="sub-menu">
                                            <li><a href="courses.html">Cours</a></li>
                                            <li><a href="courses-singel.php">Cours exceptionnel</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
    
    <!--====== HEADER PART ENDS ======-->

    <!-- Date et heure -->
    <div class="container-xxl py-5">
       <div class="container">
         <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
               <div class="date">
                <?php
                  // La date et l'heure dans des variables
                  $jour = date("d");
                  $mois = date("m");
                  $annee = date("Y");
                  $heure = date("H");
                  $minute = date("i");
                
                  // Maintenant on peut afficher ce qu'on a recueilli
                  echo "Salut !<br />
                  Nous sommes le $jour/$mois/$annee, et il est $heure h $minute.";
                ?>
               </div> 
            </div> 
         </div>  
       </div> 
    </div>
    <!-- Date et heure End -->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/course/python.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Python</h2>
                        <nav aria-label="breadcrumb">
                            <p style="color: #ed7f10;">Apprendre à coder en Python le plus simplement possible 😇</p>
                            <ol class="breadcrumb">
                                
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="cours">
            <h5>Python</h5>
            <div class="question">😕 Pourriez-vous s'il vous plaît nous faire une introduction générale sur le langage Python, Monsieur Declau ?</div>
            <p>
                👨 Bien sûr !<br />
                Python est un langage de programmation polyvalent et interprété, créé par Guido van Rossum dans les années 1990. Il est largement utilisé dans différents domaines tels que le développement web, l'analyse de données, l'intelligence artificielle, l'automatisation de tâches, et bien plus encore. Sa simplicité et sa lisibilité en ont fait l'un des langages les plus populaires parmi les programmeurs débutants et expérimentés.
            </p>
            <p>
                Python se distingue par sa syntaxe claire et concise, qui favorise la lisibilité du code. Au lieu d'utiliser des accolades ou des mots-clés spéciaux pour délimiter les blocs de code, Python utilise l'indentation. Cela signifie que l'alignement des lignes de code est crucial pour déterminer la structure et l'exécution du programme.
            </p>
            <p>
                Python dispose d'une vaste bibliothèque standard qui offre des fonctionnalités et des modules pour des tâches courantes telles que la manipulation de fichiers, l'accès au réseau, le traitement des chaînes de caractères, la gestion des dates et heures, et bien plus encore. Cela permet aux développeurs de tirer parti d'un large éventail de fonctionnalités prêtes à l'emploi sans avoir à réinventer la roue à chaque fois.
            </p>
            <p>
                De plus, Python bénéficie d'une communauté active qui contribue constamment à son écosystème. Il existe de nombreuses bibliothèques tierces puissantes et spécialisées, comme NumPy pour le calcul numérique, Pandas pour l'analyse de données, TensorFlow pour l'apprentissage automatique, Django pour le développement web, et bien d'autres.
            </p>
            <p>
                Une autre caractéristique intéressante de Python est sa portabilité. Il est disponible sur la plupart des systèmes d'exploitation, tels que Windows, macOS et Linux, ce qui permet aux développeurs d'écrire du code une fois et de l'exécuter sur différents environnements sans nécessiter de modifications majeures.
            </p>
            <p>
                Enfin, Python est un langage interprété, ce qui signifie que le code source est exécuté ligne par ligne par un interpréteur plutôt que d'être préalablement compilé en code machine. Cela facilite le développement rapide et itératif, car les développeurs peuvent tester et exécuter leur code rapidement, sans avoir à le compiler à chaque fois.
            </p>
            <p>
                Ce que vous devez retenir, c'est que Python est un langage de programmation populaire, polyvalent, et accessible. Sa syntaxe claire, sa bibliothèque standard riche et sa communauté active en font un choix attrayant pour les débutants comme pour les experts. Que vous souhaitiez créer un site web, automatiser des tâches, effectuer des analyses de données ou développer des applications d'intelligence artificielle, Python offre de nombreuses fonctionnalités et ressources pour vous aider à atteindre vos objectifs
            </p>
            <div class="question">😕 Que dire de son interpréteur, Monsieur Declau ?</div>
            <p>
              L'interpréteur Python est le programme qui exécute le code source Python ligne par ligne. Il lit le code, le traduit en instructions exécutables et les exécute immédiatement. Contrairement à un langage compilé, tel que C++, où le code source est préalablement traduit en un fichier exécutable, Python ne nécessite pas cette étape de compilation.
            </p>
            <p>
                L'interpréteur Python est disponible sous différentes versions, telles que Python 2.x et Python 3.x. Chaque version peut avoir des fonctionnalités et des différences de syntaxe légères, et il est important de noter que Python 2.x est maintenant obsolète et n'est plus pris en charge, il est donc recommandé d'utiliser Python 3.x.
            </p>
            <p>
                Lorsque vous installez Python sur votre système, vous obtenez également l'interpréteur Python, qui est accessible en ligne de commande. Vous pouvez lancer l'interpréteur en tapant simplement la commande python dans votre terminal, ce qui vous ouvrira un environnement interactif où vous pouvez saisir des instructions Python et les voir s'exécuter immédiatement.
            </p>
            <p>
                L'interpréteur Python est également utilisé pour exécuter des scripts Python contenus dans des fichiers avec une extension .py. Vous pouvez créer un fichier Python avec votre éditeur de texte préféré, y écrire votre code Python, puis exécuter le script en utilisant la commande python nom_du_fichier.py dans votre terminal. L'interpréteur lira le contenu du fichier, ligne par ligne, et exécutera les instructions qu'il contient.
            </p>
            <p>
                L'avantage de l'interprétation est qu'elle permet un développement rapide et itératif. Vous pouvez tester et exécuter votre code Python immédiatement, sans avoir à attendre une étape de compilation. Cela facilite le processus de développement, car vous pouvez itérer rapidement, effectuer des modifications et observer les résultats en temps réel.
            </p>
            <p>
                Il convient de noter que, bien que l'interprétation soit plus pratique lors du développement, elle peut être légèrement plus lente que l'exécution de code préalablement compilé. Cependant, Python dispose de mécanismes d'optimisation internes et de nombreuses bibliothèques tierces optimisées, ce qui permet généralement d'obtenir de bonnes performances même avec l'interprétation. 
            </p>
            <p>
               En résumé, l'interpréteur Python est le programme responsable de l'exécution du code source Python. Il permet une exécution interactive ligne par ligne et peut être utilisé pour exécuter des scripts Python contenus dans des fichiers. L'interprétation offre un développement rapide et itératif, bien qu'elle puisse être légèrement plus lente que l'exécution de code préalablement compilé.  
            </p>
            <p>
                Ce que je ferai lors de cette formation, c'est d'introduire les concepts de base ainsi que les fonctionnalités du langage Python et de son écosystème.
            </p>
            <div class="remarque">
                <b>ATTENTION</b> : vous devez disposer d'un interpréteur Python à portée de main pour mettre en pratique les notions abordées.
            </div>
            <p>
                Durant cette formation, je ne ferai qu'introduire les fonctionnalités les plus notables et vous donner une bonne idée du langage.<br />
                Je puis vous rassurer que si vous lisez minitieusement ce cours, vous serez en mesure de lire et d'écrire des modules et des programmes Python.
            </p>
            
        </div>
    </section>

    <!-- Certificat -->
        <div class="certificat">
            <h5 style="color: #ed7f10; font-size: 2em;">Certificat</h5>
            <div class="main-form pt-45" style="background-image: url(images/certificat.png)">
                <p style="color: #fff; padding: 15px; font-size: 1.2em; font-family: Roboto;">
                    Demandez votre Certificat de Félicitation 😇
                </p>
                <form action="https://form.123formbuilder.com/6171704/form" method="post" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="singel-form">
                                    <button type="submit" class="main-btn">Certificat</button>
                                </div> <!-- singel form -->
                            </div> 
                        </div> <!-- row -->
                    </form>
                </div>
            </div>
        </div>

    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(images/croissance.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">0</span><!-- + --></span>
                        <p>Inscrits</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">0</span><!-- + --></span>
                        <p>Test</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">0</span><!-- + --></span>
                        <p>Admis</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">0</span><!-- + --></span>
                        <p>Excellents</p>
                    </div> <!-- singel counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
   

   <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '3a03591c-c066-4fb9-bde4-ea1dd4bf872f', f: true }); done = true; } }; })();</script>

   
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="index.html"><img src="images/tangaT.png" alt="Logo"></a>
                            </div>
                            <p>Communauté <a href="https://tangads.com/DS">Declau soft</a>, TaNga est une plateforme de formation en ligne</p>
                            <ul class="mt-20">
                                <li><a href="https://facebook.com/Declausoft"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://wa.me/242068580577"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCkEPuw7dGZLKkKe6V7d14Gg"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://instagram.com/Declausoft"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Menu</h6>
                            </div>
                            <ul>
                                <li><a href="index.html"><i class="fa fa-angle-right"></i>Accueil</a></li>
                                <li><a href="about.html"><i class="fa fa-angle-right"></i>Nous</a></li>
                                <li><a href="courses.html"><i class="fa fa-angle-right"></i>Cours</a></li>
                                <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a></li>
                                <!-- <li><a href="events.html"><i class="fa fa-angle-right"></i>Event</a></li> -->
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Formation TaNga</h6>
                            </div>
                            <ul>
                                <li><a href="courses.html">La formation TaNga s'adresse aux adolescents, chômeurs, et salariés.</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Nous contacter</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>KM4-Pemba, Pointe-Noire</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+242 05 704 06 84 / 06 858 05 77</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>contact@tangads.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                       <p>Copyright &copy; 2022 <a class="border-bottom" href="#">TaNga</a>, All Right Reserved.</p> 
                       <p>Designed By <a class="border-bottom" href="https://tangads.com/MonPortfolio">Declau</a><br />
                       Distributed By <a class="border-bottom" href="https://tangads.com/DS">Declau soft</a></p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <p>Nous vous signalons juste qu'au terme de chaque trimestre, une mise à jour de la plateforme est prévue, ceci dans le but de la rendre plus performante et de satisfaire vos attentes.</p>
                            <!-- <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a> -->
                        </div>
                    </div>
                </div>
            </div><!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>
</html> 