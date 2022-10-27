<?php
    $title = "Coaching en salle";
    require_once './includes/head.php'
?>

    <?php include './includes/navbar.php'?>
    <main id="main-coaching" class="row">
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

<?php
    include './includes/footer.php'
?>