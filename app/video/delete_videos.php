<?php

require_once '../../config/database.php';

// Delete video from database and video's source in video folder
if (isset($_POST)) {
  
    $query = "DELETE FROM videos WHERE id='" . $_POST['video-id'] . "'";
    
    if (mysqli_query($connexion, $query)) {
        $filepath = rtrim(dirname(__FILE__) . '/' . $_POST['video-source'], '/');
        unlink($filepath);
        header('location: ' . ROOT_URL . 'videos.php');
    } else {
        echo "Error deleting record: " . mysqli_error($connexion);
    }
    mysqli_close($connexion);
    }
