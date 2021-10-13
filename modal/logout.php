<?php
include '../config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
    // remove all session variables
    session_unset();
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['username']);
    unset($_SESSION['position']);
    unset($_SESSION['userid']);
    unset($_SESSION['profile_pic']);
    // destroy the session
    session_destroy();
        // header("location: ../login.php")
?>
<a href="../login.php">home</a>
</body>
</html> 