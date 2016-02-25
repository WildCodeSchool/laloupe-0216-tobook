<!DOCTYPE HTML>
<!--
Tactile by Pixelarity
pixelarity.com @pixelarity
License: pixelarity.com/license
-->
<html>
    <head>
        <title>Résultats || Tobook.club</title>
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
        <article id="map">
            <header>
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
                <div class="loc">
                <h2>Il y a 2 hôtels à Tours.</h2>
                <p><img class="width100" src="assets/img/Capture%20du%202016-02-18%2017:55:38.png" alt=""></p>
                </div>
            </header>
        </article>
        <!-- Menu resultats -->
        <section class="resultats">
            <div id="class">
                <h1 class="classement">
                    <p id="classerpar">Classer par:</p>
                </h1>
                <form method="post" action="traitement.php" class="critere1">
                    <div class="4u$">
                        <div class="select-wrapper">
                            <select name="category" id="category">
                                <option value="">Prix</option>
                                <option value="1">#</option>
                                <option value="1">#</option>
                                <option value="1">#</option>
                                <option value="1">#</option>
                                <option value="1">#</option>
                            </select>
                        </div>
                    </div>
                </form>
                <form method="post" action="traitement.php" class="critere2">
                    <div class="4u$"></div>
                    <div class="select-wrapper">
                        <select name="category" id="category">
                            <option value="">Étoile</option>
                            <option value="1">#</option>
                            <option value="1">#</option>
                            <option value="1">#</option>
                            <option value="1">#</option>
                            <option value="1">#</option>
                        </select>
                    </div>
                </form>						
                <form method="post" action="traitement.php" class="critere3">
                    <div class="select-wrapper">
                        <select name="category" id="category">
                            <option value="">Notes</option>
                            <option value="1">#</option>
                            <option value="1">#</option>
                            <option value="1">#</option>
                            <option value="1">#</option>
                            <option value="1">#</option>
                        </select>
                    </div>
                </form>
            </div>
        </section>
        <!-- Fin menu resultats -->

        <!-- Two -->
        <section id="two" class="wrapper alt">
            <section class="spotlight">
                <div class="image"><img src="assets/img/suite-romantique-vue-eiffel-paris-sexyhotelsparis-1000x675.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major"><a href="hotel.html">CHÂTEAU DE PRAY</a></h3>
                    <span>Le charme à la française</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.<br /></p>
                    <div id="prix">
                    <h2 id="elements">9,5<span class="colorvert">/10</span>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                    </h2>
                    <p>à partir de:<span> 199€</span></p>
                    <a href="hotel.html" class="button">Plus de détails</a> 
                    </div>
                    <p class="vue">Evalué par <span>25</span> personnes</p>    
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="assets/img/One+Tower+Bridge.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major">Londres</h3>
                    <span>Une destination "so British my dear"</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.<br /></p>
                    <div id="prix">
                    <h2 id="elements">7.5<span class="colorvert">/10</span>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" ></i>
                    </h2>
                    <p>à partir de:<span> 99€</span></p>
                    <a href="#" class="button">Plus de détails</a>
                    </div>
                    <p class="vue">Evalué par <span>2</span> personnes</p>  
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="assets/img/suite-romantique-vue-eiffel-paris-sexyhotelsparis-1000x675.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major">Paris</h3>
                    <span>Le charme à la française</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.<br /></p>
                    <div id="prix">
                    <h2 id="elements">9.5<span class="colorvert">/10</span>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                    </h2>
                    <p>à partir de:<span> 199€</span></p>
                 <a href="#" class="button">Plus de détails</a>
                 </div>
                 <p class="vue">Evalué par <span>99</span> personnes</p>  
                 </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="assets/img/One+Tower+Bridge.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major">Londres</h3>
                    <span>Une destination "so British my dear"</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.<br /></p>
                    <div id="prix">
                    <h2 id="elements">7.5<span class="colorvert">/10</span>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" style="color:gold"></i>
                        <i class="fa fa-star" ></i>
                    </h2>
                    <p>à partir de:<span> 99€</span></p>
                    <a href="#" class="button">Plus de détails</a>
                    </div>
                    <p class="vue">Evalué par <span>235</span> personnes</p>  
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