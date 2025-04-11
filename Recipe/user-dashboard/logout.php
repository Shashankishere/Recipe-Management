<?php
    session_start();
?>

<?php
    // remove all session variables
    session_unset();
    
    // destroy the session
    session_destroy();
    header("Location: http://localhost/Recipe/UserLoginPage.php");

    // reference from www.w3schools.com
?>
