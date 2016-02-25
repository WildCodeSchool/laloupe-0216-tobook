<!DOCTYPE HTML>
<!--
Tactile by Pixelarity
pixelarity.com @pixelarity
License: pixelarity.com/license
-->
<html>
    <head>
        <title>Mon Profil || Tobook.club</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link rel="icon" type="image/png" href="assets/img/logo-tobook.png" />
    </head>
    <body>
        <!-- Header -->
        <header id="header">
            <h1><a href="index.html">Tobook<span>.club</span></a></h1>
            <h5>Langue &nbsp;<span id="langue">FR</span> | Devise &nbsp;<span id="devise">EUR</span></h5>
            <a href="#"><span style="vertical-align:middle;" class="colorvert fa fa-facebook-square fa-2x"></span></a>
            <a href="#"><span>S'inscrire</span></a>
            <a href="#"><span>Se connecter</span></a>
            <a href="#menu">Menu</a>
        </header>
        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="resultats.html">Recherche</a></li>
                <li><a href="page_utilisateurs.html">Mon profil</a></li>
                <li><a href="elements.html">Contact</a></li>
            </ul>
            <ul class="actions vertical">
                <li><a href="#" class="button fit special">S'inscrire</a></li>
                <li><a href="#" class="button fit">Se connecter</a></li>
            </ul>
        </nav>
        <!-- Main -->
        <article id="main">
            <header id="topcherche">
                <!-- Form -->
                <form class="topcherche" method="post" action="#">
                    <div class="row uniform">
                        <!-- <div class="9u 12u$(small)"> -->
                        <div class="12u$">
                            <ul class="actions">
                                <li class="width50"><input type="text" name="query" id="query" value="" placeholder="Ville / Code postal" /></li>
                                <li class="width30">
                                    <div class="select-wrapper">
                                        <select name="category" id="category">
                                            <option value="">- Type d'établissement -</option>
                                            <option value="1">Campings</option>
                                            <option value="1">Chambres d'hôte</option>
                                            <option value="1">Gîtes</option>
                                            <option value="1">Hôtels</option>
                                            <option value="1">Musées</option>
                                            <option value="1">Parcs d'attraction</option>
                                            <option value="1">Restaurants</option>
                                        </select>
                                    </div>
                                </li>
                                <li><input type="submit" value="Rechercher" class="special" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </header>
        </article>

        <!-- One -->
        <section id="one" class="profil_utilisateurs">
            <section class="spotlight" id="mm">
                <div class="photo_profil">
                    <img src="assets/img/profil.png" alt="Photo de Profil" title="Photo de Profil" />
                    <div class="info_utilisateurs">
                        <h3>A propos de Utilisateur :</h3>
                        <ul>
                            <li><span>Nom :</span>Thomas</li>
                            <li><span>Prénom :</span>Merlin</li>
                            <li><span>Nationalité :</span>Française</li>
                            <li><span>Habite à :</span>Condeau</li>
                            <li><span>Renseignement 5 :</span> ... </li>
                            <li><span>Renseignement 6 :</span> ... </li>
                        </ul>	
                    </div>
                </div>
                <div class="tableau_commentaires">
                    <h2><span>Les hôtels que Thomas a visité :</span></h2>
                    <section class="spotlight">
                        <div class="image">
                            <img src="images/pic01.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="major">Hôtel n°1</h3>
                            <p>Je recommande vivement cet hôtel. Une prestation de haute qualité avec un personnel chaleureux et accueillant. Les chambres étaient très propres et les services proposés étaient variés et correspondent à tout types de clients. Il y a également de nombreuses activités aux alentours qui peuvent correspondre à toute la famille !</p>
                        </div>
                    </section>
                    <section class="spotlight">
                        <div class="image">
                            <img src="images/pic02.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="major">Hôtel n°2</h3>
                            <p>Je recommande vivement cet hôtel. Une prestation de haute qualité avec un personnel chaleureux et accueillant. Les chambres étaient très propres et les services proposés étaient variés et correspondent à tout types de clients. Il y a également de nombreuses activités aux alentours qui peuvent correspondre à toute la famille !</p>
                        </div>
                    </section>
                    <section class="spotlight">
                        <div class="image">
                            <img src="images/pic03.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="major">Hôtel n°3</h3>
                            <p>Je recommande vivement cet hôtel. Une prestation de haute qualité avec un personnel chaleureux et accueillant. Les chambres étaient très propres et les services proposés étaient variés et correspondent à tout types de clients. Il y a également de nombreuses activités aux alentours qui peuvent correspondre à toute la famille !</p>
                        </div>
                    </section>
                </div>
            </section>
        </section>
        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section class="contact-info modifcol">
                    <h4 class="major">Tobook</h4>
                    <ul class="contact">
                        <li class="linopad"><a href="#">À propos</a></li>
                        <li class="linopad"><a href="#">Conditions générales</a></li>
                        <li class="linopad"><a href="#">Mentions légales</a></li>
                        <li class="linopad"><a href="#">Plan du site</a></li>
                        <li class="linopad"><a href="#">Protection des données</a></li>
                        <li class="linopad"><a href="#">Politique relative aux cookies</a></li>
                    </ul>
                </section>
                <section class="contact-info modifcol">
                    <h4 class="major">Mon compte</h4>
                    <ul class="contact">
                        <li class="linopad"><a href="#">Mes informations personnelles</a></li>
                        <li class="linopad"><a href="#">Mes commentaires</a></li>
                        <li class="linopad"><a href="#">Mes destinations préférées</a></li>
                        <li class="linopad"><a href="#">Mes alertes</a></li>
                        <li class="linopad"><a href="#">Mes réservations</a></li>
                        <li class="linopad">&nbsp;</li>
                    </ul>
                </section>
                <section class="contact-info">
                    <h4 class="major">Contactez-nous</h4>
                    <ul class="contact">
                        <li class="fa-phone">(33) 2 54 80 27 00</li>
                        <li class="fa-envelope"><a href="#">contact@tobook.club</a></li>
                        <li class="fa-facebook"><a href="#">facebook.com/tobook.club</a></li>
                        <li class="linopad">&nbsp;</li>
                        <li class="linopad">&nbsp;</li>
                        <li class="linopad">&nbsp;</li>
                    </ul>
                    <ul class="contact">
                        <li class="fa-home"><b>Siège social</b><br />8, boulevard de Trémault<br />41 000 Vendôme<br />FRANCE</li>
                        <li class="linopad">&nbsp;</li>
                        <li class="linopad">&nbsp;</li>
                        <li class="linopad">&nbsp;</li>
                    </ul>
                </section>
            </div>
            <div class="copyright">
                <p>Conception graphique : maitre-christel.fr - Copyright &copy; 2016 - Tobook.club - Tous droits réservés.</p>
            </div>
        </footer>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
    </body>
</html>