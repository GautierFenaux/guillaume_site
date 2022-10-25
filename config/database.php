<?php

require_once 'constants.php';

// Connect to database

$connexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(mysqli_errno($connexion)) {
    die(mysqli_errno($connexion));
}