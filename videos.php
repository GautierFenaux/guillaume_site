<?php

$title = "Videos";
require_once './includes/head.php';
require_once './app/video/fetch_videos.php';
require_once __DIR__ . './lib/SecurityService.php';
use Phppot\SecurityService\securityService as antiCsrf;

?>
<h2>Videos de coaching</h2>

<!-- Trigger/Open The Modal -->
<?php if (isset($_SESSION['user_is_admin'])) : ?>
    <button class="modalButton">Ajouter une vidéo</button>

    <!-- The Modal -->
    <div id="postModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form action="./app/video/logic_videos.php" method="POST" enctype="multipart/form-data">

                <label for="title">Titre de la vidéo</label>
                <input type="text" name="title" /> <br><br>
                <label for="description">Description</label>
                <input type="text" name="description" /> <br><br>
                <label for="video">Fichier vidéo</label>
                <input type="file" name="video" /> <br><br>

                <input type="submit" name="submit" value="envoyer">

                <?php
                $antiCSRF = new antiCsrf();
                $antiCSRF->insertHiddenToken();
                ?>

            </form>
        </div>

    </div>

<?php endif ?>

<?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <h2> <?= $row['title'] ?> </h2>
    <p><?= $row['description'] ?></p>
    <video width="320" height="240" controls>
        <source src="<?= substr($row['source'], 6); ?>" data-id="<?= $row['id'] ?>">
    </video>

    <?php if (isset($_SESSION['user_is_admin'])) : ?>
        <button class="modalButton">Supprimer</button>


        <div id="deleteModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <form action="./app/video/delete_videos.php" method="POST" enctype="multipart/form-data">

                    <label for="delete">Etes-vous sur de vouloir supprimer cette vidéo ?</label>
                    <input hidden type="text" name="video-id" value=<?= $row['id'] ?> /> 
                    <input hidden type="text" name="video-source" value=<?= $row['source']; ?> /> 
                    <input type="submit" name="submit" value="envoyer">

                    <?php
                    $antiCSRF = new antiCsrf();
                    $antiCSRF->insertHiddenToken();
                    ?>

                </form>
            </div>

        </div>

    <?php endif ?>

<?php } ?>



<script>
    // Get the button that opens the modal
    var btn = document.querySelectorAll(".modalButton");
    // All page modals
    var modals = document.getElementsByClassName('modal');
    // Get the <span> element that closes the modal
    var spans = document.getElementsByClassName("close");
    for (let i = 0; i < btn.length; i++) {
        btn[i].onclick = function(e) {
            e.preventDefault();
            modals[i].style.display = "block";
        }
    }
    // When the user clicks on <span> (x), close the modal
    for (let i = 0; i < spans.length; i++) {
        spans[i].onclick = function() {
            for (var index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
            }
        }
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            for (let index in modals) {
                if (typeof modals[index].style !== 'undefined') modals[index].style.display = "none";
            }
        }
    }
</script>

<?php

require_once './includes/footer.php';

?>