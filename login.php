<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        <?php 
            include 'bootstrap.bundle.min.js/bootstrap.bundle.js';
            include 'CSS/bootstrap.min.css';
            include 'CSS/login.css';
            include 'CSS/styles.css';
        ?>
    </style>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <header>
    <div id="hamburger" class="hamburger" onclick="toggleNav(); myRotate(this);">
            <hr class="hr1">
            <hr class="hr2">
            <hr class="hr3">
        </div>
        <div class="minimize" id="minimize">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="story.php">Story</a>
            <a href="travel.php">Travel</a>
            <a href="projects.php">Projects</a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav top-links">
                            <a class="navbar-brand text-white top-link home" href="index.php">Home</a>
                            <a class="nav-link text-white top-link about" href="about.php">About</a>
                            <a class="nav-link text-white top-link contact" href="contact.php">Contact</a>
                            <a class="nav-link text-white top-link story" href="story.php">Story</a>
                            <a class="nav-link text-white top-link travel" href="travel.php">Travel</a> 
                            <a class="nav-link text-white top-link projects" href="projects.php">Projects</a>
                            <?php
                                if (isset($_SESSION["useruid"])) {
                                    echo "<a class='nav-link text-white top-link profile' href='profile.php'>Profile page</a>";
                                    echo "<a class='nav-link text-white top-link logout' href='includes/logout.inc.php'>Log Out</a>";
                                }
                                else {
                                    echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                    echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                                }
                            ?>
                            <p class="title">Login Page</p>   
                            <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <div class="login-form">
                <h2>Log In</h2>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username/Email"> <br> <br>
                    <input type="password" name="pwd" placeholder="Password"> <br> <br>
                    <button type="submit" name="submit">Log In</button>
                </form>
            </div>
            <?php 
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='error-message'>Make sure to fill in all the fields.</p>";
                    }
                    else if ($_GET["error"] == "wronglogin") {
                        echo "<p class='error-message'>Incorrect login information!.</p>";
                    }
                }
                ?>
        </section>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
</body>
</html>