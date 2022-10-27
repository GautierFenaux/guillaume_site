<?php
require '../config/database.php';
// require_once __DIR__ . '/lib/SecurityService.php';


if (isset($_POST["submit"])) {

    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $antiCSRF = new \Phppot\SecurityService\securityService();
    // $csrfResponse = $antiCSRF->validate();
    // if (empty($csrfResponse)) {
    //     $message = "Security alert: Unable to process your request.";
    //     $type = "error";
    // }
    // var_dump($_POST);
    // die();
    

    if (empty($post['username_email'])) {
        $_SESSION['signin'] = "Username or Email required";
    } elseif (empty($post['password'])) {
        $_SESSION['signin'] = 'Password required';
    } else {
    

        $stmt = $connexion->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param('ss', $post['username_email'], $post['username_email']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            //Convert record into associative array
            $user = $result->fetch_assoc();
            $db_password = $user['password'];
            $stmt->close();
            $connexion->close();
           
            // Compare passwords from form and database

            if (password_verify($post['password'], $db_password)) {
                
                // set session for access control
                $_SESSION['user-id'] = $user['id'];
                // set session if user is an admin
                if ($user['is_admin'] == 1) {
                    $_SESSION['user_is_admin'] = true;
                    header('location: ' . ROOT_URL . 'videos.php');
                } elseif ($user['is_admin'] == 0) {
                    $_SESSION['user_is_admin'] = NULL;
                    header('location: ' . ROOT_URL);
                }
            } else {
                $_SESSION['signin'] = "Please check your input";
            }
        } else {
            var_dump('user not found');
            die();
            $_SESSION['signin'] = 'User not found';
        }
    }




    // if any problem, redirect back to signin page with login data

    if (isset($_SESSION['signin'])) {
        var_dump($_SESSION['signin']);
        die();
        $_SESSION['sign-data'] = $_POST;
        header('location: ' . ROOT_URL . 'app/login.php');
        die();
    }
} else {
    var_dump('jsuis là');
    die();
    header('location: ' . ROOT_URL . 'signin.php');
}
