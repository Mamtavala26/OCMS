<?php
    session_start();
    // Destroy session
    unset($_SESSION["user_id"]);
        header("Location: user_login.php");
        // if(session_destroy()) {
    //     // Redirecting To Home Page
    // }
?>
