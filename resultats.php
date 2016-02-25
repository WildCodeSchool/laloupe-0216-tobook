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
    <?php include 'includes/header.php'; ?>
        
        <!-- Main -->
        <article id="main">
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

                <h2 class="major special">Il y a 2 hôtels à Tours.</h2>
                <p><img class="width80" src="assets/img/Capture%20du%202016-02-18%2017:55:38.png" alt=""</p>
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
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.</p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="assets/img/One+Tower+Bridge.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major">Londres</h3>
                    <span>Une destination "so British my dear"</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.</p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="assets/img/suite-romantique-vue-eiffel-paris-sexyhotelsparis-1000x675.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major">Paris</h3>
                    <span>Le charme à la française</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.</p>
                </div>
            </section>
            <section class="spotlight">
                <div class="image"><img src="assets/img/One+Tower+Bridge.jpg" alt="" /></div>
                <div class="content">
                    <h3 class="major">Londres</h3>
                    <span>Une destination "so British my dear"</span>
                    <p>Etiam finibus pharetra purus, imperdiet sagittis mauris hendrerit vitae. In feugiat ante elementum amet arcu. Maecenas vulputate turpis faucibus, convallis ante et, bibendum ligula. Integer porttitor lacus eu diam pretium, ac purus rutrum.</p>
                </div>
            </section>
        </section>

        <?php include 'includes/footer.php'; ?>