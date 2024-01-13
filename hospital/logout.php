<?php
    session_start();
    // Destroy session
    unset($_SESSION["hospital_id"]);
        header("Location: hospital_login.php");
        // if(session_destroy()) {
    //     // Redirecting To Home Page
    // }
?>
