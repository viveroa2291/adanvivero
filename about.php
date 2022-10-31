<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/about.css';
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
                            <input class="search" type="text" placeholder="Search...">
                            <button type="submit" class="search-button"><i class="fa fa-search search-icon"></i></button>
                            <?php
                            if (isset($_SESSION["useruid"])) {
                                 echo "<div class='profile'>
                                       <a class='nav-link text-white top-link profile' href='profile.php'>Profile page</a>
                                           <div class='bg-dark settings'> 
                                            <a class='text-white friends-link' href='friends.php'>Friends</a> <br>
                                            <a class='text-white settings-link' href='settings.php'>Settings</a> <br>
                                            <a class='text-white tos-link' href='tos.php'>Terms of Service</a> <br>
                                           </div>
                                       </div>";
                                echo "<a class='nav-link text-white top-link logout' href='includes/logout.inc.php'>Log Out</a>";
                            }
                            else {
                                echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                            }
                        ?>
                            <p class="title">About Page</p>
                            <p class="slash">|</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
   <main>
       <div id="mainBody">
        <div id="previous-area"><button id="previous-button">&#8249;</button> </div>
    <div class="card mb-3 m-auto" id="cardBody">
        <div class="card-header text-center" id="featureTitle"></div>
        <img src="" class="card-img-top" alt="..." id="images">
        <div class="card-body">
          <h5 class="card-title text-center" id="cardTitle"></h5>
          <hr>
          <p class="card-text" id="description"></p>
          <p class="card-text"><small class="text-muted">Last updated 2 mins ago</small></p>
        </div>
      </div>
      <div id="next-area"><button id="next-button">&#8250;</button></div>
    </div>
   </main>
   <?php 
        include_once 'footer.php';
    ?> 
<script>
        <?php 
            include 'about.js';
        ?>
    </script>
</body>
</html>