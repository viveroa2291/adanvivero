<?php session_start();

    if (isset($_SESSION["useruid"])) {
        echo "<li><a href='profile.php'>Profile page</a></li>";
        echo "<li><a href='logout.inc.php'>Log Out</a></li>";
    }
    else {
        echo "<li><a href='signup.php'>Sign Up</a></li>";
        echo "<li><a href='login.php'>Log In</a></li>";
    }
?>