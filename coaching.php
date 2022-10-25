<?php
    $title = "Coaching en salle";
    require_once './includes/head.php'
?>
<div class="box">
    <header class="header row" id="header-coaching">
        <!--Navbar-->
        <div class="navbar" id="navbar">
            <div class="container-xxl flex">
                <h1 class="logo"><a href="accueil">GB Coaching.</a></h1>

                <nav>
                    <ul>
                        <li><a href="accueil">Accueil</a></li>
                        <li><a href="#footer">Contact</a></li>
                        <li><a href="coaching">Coaching en salle</a></li>
                    </ul>


                    <button class="nav-toggler">
                        <span></span>
                    </button>
                </nav>

            </div>
        </div>
    </header>
    <main id="main_coaching" class="row">
        <div class="wrapper-section_coaching">
            <div class="container-xxl">
                <section class="presentation flex-column" id="coaching-section">
                    <div class="flex-column" id="coaching-text">
                        <h1 class="margin">Coaching en salle</h1>
                        <p class="margin">
                            Découvrez quelles machines (cardios et/ou muscus) utiliser et comment les utiliser en fonction de vos objectifs. Coaching en groupe de 4 à 6 personnes dans une ambiance conviviale.<br>
                            Tarif variable selon le nombre de participants (voir section tarifs).<br>
                            Jours et horaires des sessions selon la demande (soit vous créez un groupe et choisissez quand a lieu la session soit vous rejoignez un groupe généralement les samedis et dimanches matins).
                        </p>
                    </div>
                    <div class="grid_coaching">
                        <img src="./public/images/gigafit_exterieur.jpg" alt="gigafit exterieur">
                        <img src="./public/images/gigafit_interieur.jpg" alt="gigafit_interieur">
                        <img src="./public/images/gigafit_running.jpg" alt="gigafit_running" class="gigagit-img-3">
                        <!-- <img src="assets/images/gigafit_muscu.jpg" alt="gigafit_musculation" class="gigagit-img-4"> -->
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer class="row">
        <div id="footer">
            <div class="contact">
                <div>
                    <i class="fa-solid fa-mobile"></i><span> : 06.59.29.70.87</span>
                </div>
                <div>
                    <i class="fa-solid fa-at"></i><span> : guillaume.boquet@gmail.com</span>
                </div>
            </div>
            <div class="legal-part">
                <p><a href="mentions_legales.html">Mentions légales</a></p>
                <p>© Guillaume Boquet</p>
            </div>
        </div>
        <p> <i>Site réalisé par Gautier FENAUX </i></p>
    </footer>
</div>

<script src="./public/js/coaching.js"></script>
<?php
    require_once './includes/footer.php'
?>