<body>
        <!-- Header -->
        <header id="header">
            <h1><a href="index.html">Tobook<span>.club</span></a></h1>
            <h5>Langue &nbsp;<span id="langue">FR</span> | Devise &nbsp;<span id="devise">EUR</span></h5>
            <a href="#"><span  class="facebook"><img style="vertical-align: middle;" src="./assets/img/icon-facebook.png" alt="Logo Facebook" title="Suivez-nous sur Facebook" /></span></a>

            <a id="modal_trigger" href="#modal" class="btn btnsansrien"><span>S'INSCRIRE</span></a>
            <!-- Insertion du pop-up de connexion/inscription -->
            <div id="modal" class="popupContainer" style="display:none;">
                <header class="popupHeader">
                    <span class="header_title">
                        Connexion
                    </span>
                    <span class="modal_close">
                        <i class="fa fa-times"></i>
                    </span>
                </header>
                <section class="popupBody">
                <!-- Social Login -->
                    <div class="social_login">
                        <div>
                            <a href="#" class="social_box fb">
                                <span class="icon">
                                    <i class="fa fa-facebook"></i>
                                </span>
                                <span class="icon_title">
                                    Se connecter avec Facebook
                                </span>
                            </a>
                            <a href="#" class="social_box google">
                                <span class="icon">
                                    <i class="fa fa-google-plus"></i>
                                </span>
                                <span class="icon_title">
                                    Se connecter avec Google
                                </span>
                            </a>
                        </div>
                        <div class="centeredText">
                            <span>
                                Ou utilisez votre adresse mail
                            </span>
                        </div>
                        <div class="action_btns">
                            <div class="one_half">
                                <a href="#" id="login_form" class="btn">
                                    Se Connecter
                                </a>
                            </div>
                            <div class="one_half last">
                                <a href="#" id="register_form" class="btn">
                                    S'inscrire
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Username & Password Login form -->
                    <div class="user_login">
                        <form>
                            <label>
                                Email / Nom d'utilisateur
                            </label>
                            <input type="text" />
                            <br />
                            <label>
                                Mot de passe
                            </label>
                            <input type="password" />
                            <br />
                            <div class="checkbox">
                                <input id="remember" type="checkbox" />
                                <label for="remember">
                                    Se souvenir de moi
                                </label>
                            </div>
                            <div class="action_btns">
                                <div class="one_half">
                                    <a href="#" class="btn back_btn">
                                        <i class="fa fa-angle-double-left"></i>
                                        Précédent
                                    </a>
                                </div>
                                <div class="one_half last">
                                    <a href="#" class="btn btn_red">
                                        Se connecter
                                    </a>
                                </div>
                            </div>
                        </form>
                        <a href="#" class="forgot_password">
                            Mot de passe oublié ?
                        </a>
                    </div>
                    <!-- Register Form -->
                    <div class="user_register">
                        <form>
                            <label>
                                Nom d'utilisateur
                            </label>
                            <input type="text" />
                            <br />
                            <label>
                                Adresse e-mail
                            </label>
                            <input type="email" />
                            <br />
                            <label>
                                Mot de passe
                            </label>
                            <input type="password" />
                            <br />
                            <div class="checkbox">
                                <input id="send_updates" type="checkbox" />
                                <label for="send_updates">
                                    S'abonner a la newsletter
                                </label>
                            </div>
                            <div class="action_btns">
                                <div class="one_half">
                                    <a href="#" class="btn back_btn">
                                        <i class="fa fa-angle-double-left"></i>
                                        Précédent
                                    </a>
                                </div>
                                <div class="one_half last">
                                    <a href="#" class="btn btn_red">
                                        S'inscrire !
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <!-- Fin d'insertion du pop-up d'inscription/connexion -->
            <a href="#"><span>Se connecter</span></a>
            <a href="#menu"><span>Menu</span></a>
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