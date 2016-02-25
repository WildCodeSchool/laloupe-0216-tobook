<!DOCTYPE HTML>
<!--
Tactile by Pixelarity
pixelarity.com @pixelarity
License: pixelarity.com/license
-->
<html>
    <head>
        <title>Tobook.club || Voyageons ensemble...</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link rel="icon" type="image/png" href="assets/img/logo-tobook.png" />
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    </head>
    <?php include 'includes/header.php'; ?> 
        <!-- Banner -->
        <section id="banner">
            <div class="inner">
                <img src="assets/img/logo-tobook.png" alt="Tobook" title="Logo de Tobook" /> 
                <p><strong>Servez-vous !</strong></p>

                <!-- Form -->
                <form class="" method="post" action="#">
                    <div class="row uniform">
                        <!-- <div class="9u 12u$(small)"> -->
                        <div class="12u$">
                            <ul class="actions">
                                <li class="chercheblock"><input type="text" name="query" id="query" value="" placeholder="Ville / Code postal" /></li>
                                <li class="chercheblock">
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
                                <li class="chercheblock"><input type="submit" value="Rechercher" class="special icon_button"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- One -->
        <section id="one" class="wrapper alt style2">
            <ul class="features">
                <li>
                    <div class="content">
                        <span><img src="./assets/img/icon-voyageur.png" alt="Icône voyageur" title="Icône voyageur" /></span>
                        <h3 class="major">Je recherche un hôtel</h3>
                        <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus lorem ipsum dolor sit amet.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">En savoir +</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <span><img src="./assets/img/icon-ampoule.png" alt="Icône ampoule" title="Pourquoi Tobook ?"</span>
                        <h3 class="major">Pourquoi Tobook ?</h3>
                        <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus lorem ipsum dolor sit amet.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Je découvre</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <span><img src="./assets/img/icon-pro.png" alt="Icône pro" title="Je suis un prestataire" /></span>
                        <h3 class="major">Je suis un prestataire</h3>
                        <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus lorem ipsum dolor sit amet.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Je m'inscris</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <span><img src="./assets/img/icon-contact.png" alt="Icône Contact" title="Besoin d'une information ?" /></span>
                        <h3 class="major">Besoin d'une information ?</h3>
                        <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus.</p>
                        <ul class="actions">
                            <li><a href="#" class="button">Contactez-nous</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper alt">
            <section class="spotlight">
                <div class="image"><img src="assets/img/suite-romantique-vue-eiffel-paris-sexyhotelsparis-1000x675.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major">Paris</h3>
                    <span>Le charme à la française</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.
                        <ul class="actions">
                            <li><a href="#" class="button boutton_liste_hotel">Liste des hôtels</a></li>
                        </ul>   
                    </p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="assets/img/One+Tower+Bridge.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major">Londres</h3>
                    <span>Une destination "so British my dear"</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.
                        <ul class="actions">
                            <li><a href="#" class="button boutton_liste_hotel">Liste des hôtels</a></li>
                        </ul>  
                    </p>
                </div>
            </section>
        </section>

        <!-- Three -->
        <section id="three" class="wrapper style1 special">
            <div class="inner narrow">
                <h3 class="major special">Tobook c'est l'assurance d'une réservation au meilleur prix <br>et d'une relation directe entre hôteliers et particuliers.</h3>
                <p id="text_inner">Sagittis mauris hendrerit vitae feugiat etiam ante elementum vulputate faucibus convallis bibendum ligula.</p>
                <ul class="actions">
                    <li><a href="#" class="button special big">Je m'inscris</a></li>
                </ul>
            </div>
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
        <!--<script src="assets/js/jquery.min.js"></script>-->
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.leanModal.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript">
            $("#modal_trigger").leanModal({top : 140, overlay : 0.6, closeButton: ".modal_close" });

            $(function(){
                // Calling Login Form
                $("#login_form").click(function(){
                    $(".social_login").hide();
                    $(".user_login").show();
                    return false;
                });

                // Calling Register Form
                $("#register_form").click(function(){
                    $(".social_login").hide();
                    $(".user_register").show();
                    $(".header_title").text('Register');
                    return false;
                });

                // Going back to Social Forms
                $(".back_btn").click(function(){
                    $(".user_login").hide();
                    $(".user_register").hide();
                    $(".social_login").show();
                    $(".header_title").text('Login');
                    return false;
                });

            })
        </script>
    </body>
</html>