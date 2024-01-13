
<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        header("Location: oxygen_supplier_login.php");
        // Redirecting To Home Page
    }
?>
<!-- <?php
    session_start();
    // Destroy session
    unset($_SESSION["user_id"]);
        header("Location: oxygen_supplier_login.php");
        // if(session_destroy()) {
    //     // Redirecting To Home Page
    // }
?>
 -->
