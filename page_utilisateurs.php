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
    <?php include 'includes/header.php'; ?>
        
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

        <?php include 'includes/footer.php'; ?>