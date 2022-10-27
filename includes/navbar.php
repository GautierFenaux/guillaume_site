<header class="header" id="header-coaching">
<div class="navbar" id="navbar">
    <div class="container flex">
        <h1 class="logo"><a href="/">GB Coaching.</a></h1>

        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="./coaching.php">Coaching en salle</a></li>
                <li><a href="./videos.php">Coaching vidéo</a></li>
                <li><a href="#footer">Contact</a></li>
                <?php if(isset($_SESSION['user_is_admin'])) : ?>
                    <a href="<?= ROOT_URL. 'app/logout.php'?>"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                <?php endif ?>
            </ul>


            <button class="nav-toggler">
                <span></span>
            </button>
        </nav>

    </div>
</div>
</header>