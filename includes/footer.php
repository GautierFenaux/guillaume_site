<footer>
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
            <p><a href="./mentions_legales.php">Mentions légales</a></p>
            <p>© Guillaume Boquet</p>
        </div>
    </div>
    <p> <i>Site réalisé par Gautier FENAUX </i></p>
</footer>

<?php

switch ($title) {
    case $title == 'Coaching en salle': ?>
        <script src="./public/js/coaching.js"></script>
    <?php
        break;
    case $title == 'Videos': ?>
        <script src="./public/js/videos.js"></script>
    <?php
        break;
    case $title == 'Guillaume Boquet Coach Sportif': ?>
        <script src="./public/js/index.js"></script>

<?php
} ?>
<script src="./public/js/navbar.js"></script>
</body>

</html>