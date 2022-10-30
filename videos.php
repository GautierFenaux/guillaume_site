<?php

$title = "Videos";
require_once './includes/head.php';
require_once './app/video/fetch_videos.php';
require_once __DIR__ . './lib/SecurityService.php';

use Phppot\SecurityService\securityService as antiCsrf;

?>

<?php include './includes/navbar.php' ?>



<!-- Trigger/Open The Modal -->
<?php if (isset($_SESSION['user_is_admin'])) : ?>

    <div id="main-coaching">
        <div class="container flex-column">

            <div id="modal-login" class="modal">
                <div class="modal-content">
                    <div style="padding-top:74.800%;position:relative;">
                        <iframe src="https://gifer.com/embed/2JHR" width="100%" height="100%" style='position:absolute;top:0;left:0;' frameBorder="0" allowFullScreen></iframe>
                    </div>
                </div>
            </div>

            <h2 class="title"> Coaching vidéo</h2>
            <button class="modalButton btn btn-primary btn-outline margin">Ajouter une vidéo</button>
        </div>
        <!-- The Modal -->
        <div id="postModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="./app/video/logic_videos.php" method="POST" enctype="multipart/form-data">

                    <label class="text-white" for="title">Titre de la vidéo</label>
                    <input type="text" name="title" /> <br><br>
                    <label class="text-white" for="description">Description</label>
                    <input type="text" name="description" /> <br><br>
                    <label class="text-white" for="video">Fichier vidéo</label>
                    <input type="file" name="video" /> <br><br>

                    <input class="btn btn-primary" type="submit" name="submit" value="envoyer">

                    <?php
                    $antiCSRF = new antiCsrf();
                    $antiCSRF->insertHiddenToken();
                    ?>

                </form>
            </div>
        </div>


    <?php elseif (!isset($_SESSION['user_is_admin'])) : ?>
        <div id="main-coaching">
            <div class="container">
                <h2 class="title"> Coaching vidéo</h2>
                <p class="text-center">Retrouver ici toutes les vidéos de coaching en ligne</p>
            </div>



        <?php endif ?>


        <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <div class="flex-column padding">
                <h3> <?= $row['title'] ?> </h3>
                <p><?= $row['description'] ?></p>
                <video controls>
                    <source src="<?= substr($row['source'], 6); ?>" data-id="<?= $row['id'] ?>">
                </video>
                <?php if (isset($_SESSION['user_is_admin'])) : ?>
                    <button class="modalButton btn btn-primary btn-outline margin">Supprimer</button>


                    <div id="deleteModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form action="./app/video/delete_videos.php" method="POST" enctype="multipart/form-data">

                                <label for="delete" class="text-white">Etes-vous sur de vouloir supprimer cette vidéo ?</label><br><br>
                                <input hidden type="text" name="video-id" value=<?= $row['id'] ?> />
                                <input hidden type="text" name="video-source" value=<?= $row['source']; ?> />
                                <input class="btn btn-primary" type="submit" name="submit" value="supprimer">

                                <?php
                                $antiCSRF = new antiCsrf();
                                $antiCSRF->insertHiddenToken();
                                ?>

                            </form>
                        </div>

                    </div>

                <?php endif ?>
            </div>
        <?php } ?>
        </div>
        <?php include './includes/footer.php'; ?>