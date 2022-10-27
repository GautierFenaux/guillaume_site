<?php
require_once './app/send_via_mailer.php';

// Change le titre de chaque page
$title = "Guillaume Boquet Coach Sportif";
require_once './includes/head.php';

// Message de confirmation une fois le mail envoyé par le formulaire de contact (logique dans ./app/send_via_mailer.php).
$check = "Votre message a bien été envoyé.";
?>

<!--Header-->
<header class="header" id="header">

    <!--Navbar-->
    <div class="navbar" id="navbar">
        <div class="container flex">
            <h1 class="logo"><a href="./accueil">GB Coaching.</a></h1>

            <nav>
                <ul>
                    <li><a href="./accueil">Accueil</a></li>
                    <li><a href="./coaching">Coaching en salle</a></li>
                    <li><a href="./videos.php">Coaching vidéo</a></li>
                    <li><a href="#footer">Contact</a></li>

                </ul>


                <button class="nav-toggler">
                    <span></span>
                </button>
            </nav>

        </div>
    </div>

    <!--Showcase-->
    <section class="showcase">
        <div class="container grid">
            <div class="showcase-text">
                <h1>Repoussez vos limites</h1>
                <p>Des programmes sportifs adaptés à tous les niveaux que vous soyez débutant ou confirmé.
                    <!-- Quel que soit où vous en êtes, il y a toujours une marche de progression. -->
                </p>
                <a href="#rates" class="btn">En savoir plus</a>
            </div>


            <div class="showcase-form card">
                <h2>Essayez un programme</h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-control">
                        <input type="text" name="name" placeholder="Nom" required>
                    </div>
                    <div class="form-control">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-control">
                        <textarea type="text" name="message" placeholder="Ecrivez votre message..." rows="6" required></textarea>
                    </div>
                    <input type="submit" value="Envoyer" name="send" class="btn btn-primary btn-outline">

                    <div>
                        <?php
                        if (isset($_GET['checked'])) {
                        ?>
                            <p><?php echo $check; ?></p>
                        <?php
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </section>
</header>
<!--Main-->
<main id="main">
    <div class="wrapper-section">
        <div class="container">
            <h1 class="margin">Un objectif : un programme</h1>
            <section class="presentation flex flex-reverse">
                <div class="image margin">
                    <img src="./public/images/guillaume_grey.jpg" alt="guillaume presentation" loading="lazy">
                </div>
                <p class="margin">
                    Perte de poids, tonification, forme, santé, bien-être etc. Quels que soient vos objectifs sportifs, je vous accompagnerai pour vous aider à les atteindre.
                    Coaching en salle, en extérieur, à domicile, en visio... Vous choisissez le format qui vous convient en solo ou à plusieurs.<br>
                    En plus du coaching classique je propose différents services qui accélèreront vos résultats tels que les week-ends sportifs en Normandie et les séances vidéos sportives à thème (cardio, caf, souplesse, etc...) à faire en salle et/ou chez soi.
                </p>
            </section>
        </div>
    </div>
    <div class="wrapper-section" id="rates">
        <div class="container">
            <h1 class="margin">Les tarifs</h1>
            <p class="margin">Vous choisissez le jour, l'heure et le lieu de la séance</p>
            <section class="presentation" id="section-price">
                <div class="image margin">
                    <img src="./public/images/exercice.jpg" alt="sport collectif" loading="lazy">
                </div>
                <ul class="flex">
                    <li>Solo - 60€/h</li>
                    <li>Duo - 30€/h par personne</li>
                    <li>Trio - 20€/h par personne</li>
                    <li>Quatre - 15€/h par personne</li>
                    <li>Cinq - 12€/h par personne</li>
                    <li>Six - 10€/h par personne</li>
                </ul>
            </section>
        </div>
    </div>
    <div class="wrapper-section">
        <div class="grid">
            <div class="wrapper-presentation">
                <div class="flex-column">
                    <h1 class="margin">Week-end sportif en Normandie</h1>
                    <p class="margin text-center">Venez vous dépensez et vous ressourcez dans une ambiance conviviale à deux heures de Paris</p>
                    <button class="btn btn-primary btn-outline" id="btn-desktop"> Découvrir le programme </button>
                    <div id="weekend-presentation">
                        <div class="flex-column">
                            <p class="text-center">Organisation de week-ends sportifs en Normandie de dépassement physique et mental</p>
                            <p class="text-center">Au programme :</p>
                            <ul class="text-center">
                                <li>Samedi matin entraînement en salle sur Paris</li>
                                <li>Samedi après midi randonnée 30 km falaises du Tréport et de Mers les Bains</li>
                                <li>Dimanche matin randonnée 15 km Bois de Cise plage d'Ault</li>
                            </ul>
                        </div>
                        <i class="fa-solid fa-arrow-left-long fa-3x" id="arrow-weekend"></i>
                    </div>
                </div>
            </div>
            <section class="presentation w-100" id="section-weekend">
                <div id="wrapper-image">
                    <img src="./public/images/plage_people.jpg" alt="bord de plage" class="fade h-100" id="weekend-image">
                </div>
                <button class="btn btn-primary btn-outline" id="btn-mobile"> Découvrir le programme </button>
            </section>
        </div>
    </div>
</main>

<?php 
    include './includes/footer.php'
?>