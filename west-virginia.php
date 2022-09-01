<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>West Virginia Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/west-virginia.css';
        include 'CSS/styles.css';
         ?>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
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
                        <p class="title">West Virginia</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="west-virginia-top-section" id="top">
            <h2 class="west-virginia-header">West Virginia</h2>
        </section>
        <section id="demo"></section>
        <section class="bottom-section">
            <span><a class="previous-state" href="washington-dc.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="wisconsin.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/west-virginia-images/me.jpeg" onclick="image(1)" alt="This is the picture of me on top of a mountain at Harpers Ferry striking a pose.">
                    <img class="box-image" src="states-images/west-virginia-images/Lewis-and-Clark.jpeg" onclick="image(2)" alt="This is a picture of me standing next to the Lewis and Clark sign.">
                    <img class="box-image" src="states-images/west-virginia-images/me2.jpeg" onclick="image(3)" alt="This is the picture of me on top of a mountain at Harpers Ferry striking a pose.">
                    <img class="box-image" src="states-images/west-virginia-images/mountain.jpeg" onclick="image(4)" alt="This is an image of Harpers Ferry mountain.">
                    <img class="box-image" src="states-images/west-virginia-images/alex-sean.jpeg" onclick="image(5)" alt="This is a picture of my friends and I at Harpers Ferry on our boys trip to Washington D.C.">
                    <img class="box-image" src="states-images/west-virginia-images/sean.jpeg" onclick="image(6)" alt="This is a picture of my friend Sean and I at Harpers Ferry.">
                    <img class="box-image" src="states-images/west-virginia-images/mountain2.jpeg" onclick="image(7)" alt="This is an image of Harpers Ferry mountain.">
                    <img class="box-image" src="states-images/west-virginia-images/views.jpeg" onclick="image(8)" alt="This is a picture of a different view of Harpers Ferry in West Virginia.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'west-virginia.js';
    ?>
</script>
</body>
</html>