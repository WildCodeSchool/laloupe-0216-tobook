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