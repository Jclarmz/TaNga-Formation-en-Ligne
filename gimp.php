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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/course/gimp.gif)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>GIMP</h2>
                        <nav aria-label="breadcrumb">
                            <p style="color: #ed7f10;">Apprendre à éditer ses images le plus simplement possible 😇</p>
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
            <h5>GIMP</h5>
            <h6>Introduction</h6>
            <p>
               👨 Pour commencer, cette section que j'intitule' <b><i>concepts de base de GIMP</i></b> constitue une brève introduction aux concepts de base et à la terminologie dont vous aurez besoin pour comprendre cette formation sur GIMP. Ces différents concepts sont : <i>images, calques, canaux, sélections, etc.</i>.
            </p>
            <h6>Images</h6>
            <div class="question">😕 Monsieur Declau, comment peut-on définir une image ici s'il vous plaît ?</div>
            <p>
               Vous devez comprendre que les images constituent l'entité de base de GIMP. Pour vous répondre, je dirai que communément, une <b><i>image</i></b> est un simple fichier, comme un <i>TIFF</i> ou un <i>JPEG</i>. Vous pouvez aussi penser qu'une image correspond à une fenêtre d'affichage, mais cela n'est pas correct : il est possible d'avoir plusieurs fenêtres affichant une seule image. Il n'est pas possible d'avoir une seule fenêtre affichant plus d'une image, en revanche une image peut ne pas être affichée.
           </p>
           <p>
               Une image GIMP sera un peu plus compliquée. Au lieu de la penser comme une feuille de papier avec un dessin dessus, vous devez plutôt la concevoir comme un livre, dont les pages s'appelle des <b><i>calques</i></b>.<br />
               En plus d'une pile de calques, une image GIMP peut contenir un <b><i>masque de sélection, un ensemble de canaux et un ensemble de chemins</i></b>.
            </p>
            <p>
                Vous pouvez ouvrir plusieurs images en même temps dans GIMP. Si elles sont grandes, chacune utilisera plusieurs megabytes de mémoire, mais GIMP utilise un procédé de gestion de la mémoire perfectionné basé sur un découpage en morceaux qui lui permet de manipuler les très grosses images facilement. Il y a tout de même des limites, et il est bénéfique lorsque vous travaillez avec des images de mettre autant de mémoire dans votre ordinateur que possible.
            </p>
            <h6>Calques</h6>
            <p>
               Si une image est comme un livre, alors le calque en serait une page. L'image la plus simple ne contient qu'un seul calque, et peut être traitée comme une simple feuille de papier, mais les utilisateurs avertis de GIMP utilisent souvent des images contenant plusieurs calques. Les calques ne sont pas nécessairement opaques et ne recouvrent pas nécessairement toute l'image, aussi lorsque vous regardez l'affichage d'une image, vous pouvez voir plus que le calque du dessus : vous verrez des éléments de plusieurs calques. 
            </p>
            <h6>Canaux</h6>
            <p>
                Les canaux sont un élément complexe de GIMP. Ils sont représentés dans la fenêtre de dialogue des Canaux. Vous avez, pour chaque calque de votre image, trois canaux de couleurs, un pour chaque couleur du système : Rouge, Vert, Bleu. Chaque canal de couleur indique, dans une échelle de gris, de 0 à 255, l'intensité de la couleur pour chaque pixel du calque. Vous pouvez avoir un <b><i>Canal Alpha</i></b> qui représente la transparence.
            </p>
            <h6>Sélections</h6>
            <div class="question">😕 Qu'en est-il Monsieur Declau ?</div>
            <p>
                Euh, généralement, lorsque vous manipulez une image, vous ne voulez agir que sur une partie. C'est le mécanisme de <b><i>sélection</i></b> qui permet cela. Chaque image a sa propre sélection, que vous pouvez normalement voir par une ligne pointillée mobile qui sépare la partie sélectionnée de la partie désélectionnée. Mais cela n'est pas tout à fait vrai : les sélections dans GIMP sont très graduées et ne sont pas du tout ou rien. La sélection est en fait représentée par un canal de teinte de gris irréguliers. La ligne pointillée que vous voyez est un contour moyen du niveau sélectionné. Vous pouvez visualiser le canal de sélection dans ses moindres détails en (Dés)activant le Masquage rapide.
            </p>
            <p>
                Apprendre à bien utiliser GIMP, c'est acquérir l'art de faire les bonnes sélections (dessélections qui  contiennent tout ce que vous voulez et rien d'autre). C'est parce que la manipulation des sélections est capitale que GIMP vous offre autant d'outils pour les faire : un assortiment d'outils de sélection, un menu pour les opérations de sélection et la possibilité de basculer dans le mode Masque rapide dans lequel vous pouvez traiter le canal de sélection comme si c'était un canal de couleur et ainsi <i>peindre la sélection</i>.
            </p>
            <div class="question">😕 Monsieur Declau, est-ce qu'il est possible d'annuler en cas d'erreur ?</div>
            <h6>Annuler</h6>
            <p>
                Bien sûr, vous pouvez annuler vos erreurs !<br />
                Comprenez par là que tout ce que vous pouvez faire à une image peut-être défait. En fait, vous pouvez annuler bon nombre des dernières actions, si vous pensez qu'elles sont malencontreuses. C'est possible parce que GIMP garde un historique de vos actions. Cet historique prend de la place mémoire, c'est pourquoi il n'est pas possible d'annuler à l'infini. Certaines actions n'utilisent qu'une petite partie de la mémoire, aussi pouvez-vous en faire des douzaines avant que la première d'entre elles ne soit effacée de l'historique ; d'autres au contraire nécessitent beaucoup de mémoire. Vous pouvez configurer la taille mémoire que GIMP utilisera pour l'historique de chaque image, mais dans chaque cas, vous devez toujours être capable d'annuler les 2 ou 3 dernières actions (l'action la plus importante qui ne peut pas être annulée est de fermer une image. C'est pourquoi GIMP vous demande de confirmer que c'est bien là ce que vous voulez faire, si vous avez apporté des changements à l'image).
            </p>
            <h6>Greffons</h6>
            <p>
                La plupart des choses, sans doute toutes, que vous ferez sur une image avec GIMP est effectué par GIMP lui même. Cela dit, GIMP peut être complété avec des <b><i>Greffons ou Plugins</i></b>.
            </p>
            <div class="question">😕 Monsieur Declau, qu'est-ce que sont encore ces "greffons ou plugins" comme vous dites ?</div>
            <p>
                😇 Ce sont des programmes externes qui interagissent avec GIMP, et sont capables de manipuler les images et les autres objets de GIMP de manière très sophistiquée. De nombreux greffons importants sont fournis avec GIMP, mais bien d'autres sont disponibles d'autres manières. En fait, la possibilité d'écrire des greffons (et des scripts) est la manière la plus simple pour ajouter des fonctionnalités à GIMP quand on ne fait pas partie de l'équipe de développement.
            </p>
            <div class="remarque">Notez que toutes les commandes du menu <b>Filtres</b>, et une bonne partie des commandes des autres menus, sont actuellement implémentées par des greffons.</div>
            <h6>Scripts</h6>
            <p>
                En plus des greffons, qui sont des programmes écrits en langage C, GIMP peut aussi utiliser des scripts. La majorité des scripts existants sont écrits dans un langage appelé Script-Fu, qui est spécifique à GIMP (pour ceux que ça intéresse, il s'agit d'un langage inspiré de Lisp et appelé le Scheme). Il est aussi possible d'écrire des scripts pour GIMP en Python ou en Perl.<br />
                Ces langages sont plus flexibles et puissants que le Script-Fu ; l'inconvénient est qu'ils dépendent de logiciels qui ne sont pas fournis avec GIMP, aussi n'y a-t-il pas de garantie de fonctionnement pour toutes les installations de GIMP.
            </p>
        </div>
        <div class="cours">
            <div class="exercice">
                <h5>Quiz</h5>
                <div class="main-form pt-45">
                    <form method="post" action="https://form.123formbuilder.com/6196427/form">
                        <p>Cochez sur la bonne réponse.</p>
                        <p>
                            <b>Question 1</b><br />
                            Est-ce que les éléments cités ci-dessous constituent les concepts de base de GIMP ?<br />
                            - Images<br />
                            - Calques<br />
                            - Canaux<br />
                            - Sélections<br />
                            - Annuler<br />
                            <input type="radio" name="concepts_base" value="non" id="non"/> <label for="non">Non</label><br />
                            <input type="radio" name="concepts_base" value="oui" id="oui"/> <label for="oui">Oui</label>
                        </p>
                        <p>
                            <b>Question 2</b><br />
                            <textarea>Définissez chacun des éléments qui composent les concepts de base de GIMP avec votre propre expression.</textarea>
                        </p>
                        <p>
                            <b>Question 3</b><br />
                            Est-ce que l'on peut parler de GIMP sans image ?<br />
                            <input type="radio" name="phpmyadmin" value="vrai" id="vrai"/> <label for="vrai">Vrai</label><br />
                            <input type="radio" name="phpmyadmin" value="faux" id="faux"/> <label for="faux">Faux</label><br />
                            <textarea>Justifiez votre réponse ici</textarea>
                        </p>
                        <div class="col-md-12">
                            <div class="singel-form">
                                <button type="submit" class="main-btn"> Réponse</button>
                            </div> <!-- singel form -->
                        </div>
                    </form>
                    <p style="font-family: Edwardian Script ITC; font-size: 2em;">Bonne chance 😇</p>
                </div> <!-- main form -->
            </div>        
        </div>
        <div class="cours">
            <h5>Interface GIMP</h5>
            <figure>
                <img src="images/course/gimp/interface_gimp.png" alt="Gimp" class="cours_img" />
                <figcaption></figcaption>
            </figure>
            <h6>Comment lancer GIMP ?</h6>
            <p>
                <b>Lancer GIMP</b><br />
                Pour lancer GIMP, il suffit de double-cliquer sur son icône qui pourrait se retrouver soit sur le Bureau de votre ordinateur, soit sur la Barre des tâches.<br />
                Vous pouvez aussi le lancer en tapant sur Rechercher dans Windows, GIMP. Sur le résultat de recherche, cliquez sur GIMP, puis patientez jusqu'à l 'affichage de son interface.
            </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/69Aits-BHtg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h6>Fenêtre standard de GIMP</h6>
            <p>Voici les fenêtres les plus utilisées de GIMP ici présentées en image.</p>
            <figure>
                <img src="images/course/gimp/interface_gimp2.png" alt="Gimp" class="cours_img" />
                <figcaption></figcaption>
            </figure>
            <p>
                1 - La boîte à outils principale : c'est le cœur du GIMP. Elle contient le menu principal, une brochette d'icônes servant à sélectionner les outils, etc..<br />
                2 - Les options des outils : sous la boîte à outils se trouve accolé le dialogue des <b><i>Options des outils</i></b>, qui affiche les options de l'outil sélectionné.<br />
                3 - Une fenêtre d'image : chaque image ouverte par le GIMP est affichée dans une fenêtre séparée. Plusieurs images peuvent être ouvertes en même temps : la limite n'est imposée que par vos ressources systèmes. Il est possible d'exécuter GIMP sans ouvrir d'image, mais l'intérêt est alors limité.<br />
                4 - Le dialogue des calques : ce dialogue montre la structure des calques de l'image active et permet de les manipuler de diverses manières. Il est possible de travailler sans ce dialogue, mais même les utilisateurs peu avancés trouvent indispensable de l'avoir en permanence à portée de main.<br />
                5 - Brosses, Motifs, Dégradés : le dialogue à onglets rattaché sous le dialogue des calques contient les différents dialogues pour gérer les brosses, motifs et dégradés.
            </p>
            <div class="remarque"><b>NB</b> : c'est la configuration minimale. Il y a plus d'une douzaine d'autres dialogues dans le GIMP pour divers usages, mais les utilisateurs les ouvrent au besoin et les referment après utilisation. Les utilisateurs avertis gardent généralement la boîte à outils (avec les options des outils) et le dialogue des calques ouverts en permanence.</div>
            <p>
                La boîte à outil est essentielle pour de nombreuses opérations de GIMP ; d'ailleurs, si vous la fermez, GIMP s'arrêtera (vous devrez confirmer que c'est bien là ce que vous voulez faire). Le dialogue Options des outils est maintenant un dialogue à part, montré ici accolé sous la boîte à outils.
            </p>
            <p>
                C'est ainsi que la plupart des utilisateurs avertis configurent ces dialogues : il est très difficile d'utiliser efficacement les outils sans voir l'état des options qui leur sont associées. Le dialogue des calques intervient dès que vous travaillez avec une image qui contient plusieurs calques : quand vous aurez franchi les étapes les plus simples de GIMP, vous verrez que cela signifie presque toujours. Enfin, il est évidemment nécessaire d'avoir des images affichées pour travailler dessus.
            </p>
            <div class="remarque">Si vos dispositions des fenêtres GIMP se perdent, l'arrangement montré dans la copie d'écran est très facilement réalisable. Dans le menu Fichier de la boîte à outil sélectionnez Fichier → Dialogues → Nouvelle fenêtre attachable → Calques, canaux et chemins pour afficher un dialogue des calques comme ci-dessus. Dans le même menu, sélectionnez Fichier → Dialogues → Options des outils pour afficher un nouveau dialogue Options des outils que vous pourrez accoler à la fenêtre principale (la section Accolement explique comment accoler des dialogues).<br />
            Il n'est pas nécessaire de créer une nouvelle boîte à outils principale puisque vous ne pouvez pas fermer celle que vous avez sans quitter GIMP.</div>
            <h6>Boîte à outils</h6>
            <figure>
                <img src="images/course/gimp/boite_outils.png" alt="Gimp" width="300px" height="400px" />
                <figcaption>La boîte à outils</figcaption>
            </figure>
            <p>
                La boîte à outils est le cœur de GIMP. C'est la seule partie de l'application que vous ne pouvez ni dupliquer, ni fermer. 
            </p>
            <div class="remarque">&Agrave; chaque démarrage, GIMP sélectionne par défaut un outil (le pinceau), une couleur, une pointe de brosse et un motif, toujours les mêmes. Si vous voulez que GIMP sélectionne l'outil, la couleur, la pointe de brosse et le motif utilisés quand vous avez quitté la session précédente, cochez l'option « Enregistrer l'état des périphériques en quittant » dans Préférences/Périphériques</div>
        </div>
        <div class="cours">
            <div class="exercice">
                <h5>Quiz</h5>
                <div class="main-form pt-45">
                    <form method="post" action="https://form.123formbuilder.com/6196427/form">
                        <p>Cochez sur la bonne réponse.</p>
                        <p>
                            <b>Question 1</b><br />
                            GIMP permet d'éditer<br />
                            <input type="radio" name="editer" value="langage" id="langage"/> <label for="langage">un langage</label><br />
                            <input type="radio" name="editer" value="programme" id="programme"/> <label for="programme">un programme</label><br />
                            <input type="radio" name="editer" value="image" id="image"/> <label for="image">une image</label>
                        </p>
                        <p>
                            <b>Question 2</b><br />
                            Comment lancer GIMP ?<br />
                            <textarea>Saisissez votre réponse ici</textarea>
                        </p>
                        <p>
                            <b>Question 3</b><br />
                            GIMP est un puissant logiciel issu de Microsoft<br />
                            <input type="radio" name="phpmyadmin" value="vrai" id="vrai"/> <label for="vrai">Vrai</label><br />
                            <input type="radio" name="phpmyadmin" value="faux" id="faux"/> <label for="faux">Faux</label><br />
                            <textarea>Justifiez votre réponse ici</textarea>
                        </p>
                        <div class="col-md-12">
                            <div class="singel-form">
                                <button type="submit" class="main-btn"> Réponse</button>
                            </div> <!-- singel form -->
                        </div>
                    </form>
                    <p style="font-family: Edwardian Script ITC; font-size: 2em;">Bonne chance 😇</p>
                </div>
            </div>
        </div>
        <div class="cours">
            <h5>Pratique</h5>
            <p>&Agrave; présent, trève de bavardage, et passons à la pratique.</p>
            <h6>Rendre une image transparente</h6>
            <div class="question">😕 Monsieur Declau, merci de nous épargner de ce blabla livresque ! Sur ce, comment créer une image transparente ?</div>
            <p>
                Le plus simplement possible, commencez par ouvrir un fichier image dans GIMP, en faisant par exemple un clic droit sur l'image. Dans la boîte contextuelle qui s'affiche, pointez votre curseur sur <i>Ouvrir avec</i>. Cliquez sur GIMP.<br />
                Par la suite, vous devrez ajouter un calque (couche) à votre image, en cliquant sur <i>Outils</i>, puis vous pointez votre curseur sur <i>Outil de sélection</i>, et vous cliquez enfin sur <i>Sélection contigue</i>.<br />
                Cliquez sur <i>Calque</i>. En vous positionnant sur <i>Transparence</i>, cliquez sur <i>Couleur vers Alpha</i>, puis sur <i>Valider</i>.<br />
                La toute dernière étape consiste à tout simplement cliquer sur <i>Fichier</i>, puis sur <i>&Eacute;craser "nom du fichier suivi de son extension"</i>.<br />
                Votre image est dorénavant transparente.
            </p>
            <div class="remarque">L'image qui doit être rendue transparente doit à la base avoir l'extension .png</div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/2B22LUmX1jk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h6>Retirer l'arrière-plan d'une image avec GIMP</h6>
            <p>
                Voici les étapes à suivre pour supprimer l'arrière-plan d'une image avec GIMP :<br />
                1 - ouvrez votre image dans GIMP en sélectionnant "Fichier" et "Ouvrir", puis prendre un calque en cliquant sur Calque, Transparence. Glissez jusqu'à Ajouter un calque  ;<br />
                2 - sélectionnez l'outil de sélection et choisissez l'option "sélection à main levée" (dans la barre d'outils de gauche) ;<br />
                3 - tracez maintenant une ligne autour de la partie de l'image que vous souhaitez conserver en arrière-plan avec la souris. Cliquez sur Sélection, puis sur Adoucir. Saisissez ( px, puis OK. Cliquez une fois de plus sur Sélection, puis sur Inverser ;<br />
                4 - cliquez sur Fichier, puis sur Exporter sous. L'extension dot être PNG. Pour le cas précis, remplacez JPG par PNG, puis cliquez sur Exporter ;<br />
                5 - Sur la fenêtre qui s'affiche, cliquez sur Exporter.<br />
                Tout est fait.
            </p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UZTC2_igd78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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