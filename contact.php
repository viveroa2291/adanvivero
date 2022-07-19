<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/contact.css';
        include 'CSS/styles.css';
         ?>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
  <!-- 
      Don't work
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://fontawesome.com/v5.15/icons/phone-alt?style=solid' crossorigin='anonymous'></script>      
   -->  
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
                                echo "<a class='nav-link text-white top-link logout' href='logout.inc.php'>Log Out</a>";
                            }
                            else {
                                echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                            }
                        ?>
                        <p class="title">Contacts Page</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1 style="text-align: center;">Contact & Social Media information:</h1>
        <hr>
    <div id="mainBody">
        <div>
            <img src="images/doorCountyBoat.jpeg" alt=""></img> 
        </div>
        <div>
            <p><a href="https://www.facebook.com/adan.vivero97/" class="fa fa-facebook contact-facebook"></a>Facebook: <a href="https://www.facebook.com/adan.vivero97/">https://www.facebook.com/adan.vivero97/</a></p>
            <p><a href="https://www.instagram.com/adxadan/" class="fa fa-instagram contact-instagram"></a>Instagram: <a href="https://www.instagram.com/adxadan/">adxadan</a></p>
            <p><a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost contact-snapchat"></a>Snapchat: adx305</p>
            <p><a href="https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg" class="fa fa-youtube contact-youtube"></a>YouTube: <a href="https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg">https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg</a></p>
            <p><a href="https://www.linkedin.com/in/adan-vivero-a93970156/" class="fa fa-linkedin contact-linkedin"></a>LinkedIn: <a href="https://www.linkedin.com/in/adan-vivero-a93970156/">https://www.linkedin.com/in/adan-vivero-a93970156/</a></p>
            <p><i class="fa fa-stack-overflow contact-stackoverflow"></i>StackOverflow: <a href="https://stackoverflow.com/users/10572727/adan-vivero?tab=profile">https://stackoverflow.com/users/10572727/adan-vivero?tab=profile</a></p>
            <p><i class='fab fa-discord contact-discord'></i> Discord: <a href="https://discord.com/channels/719094259051135027/719094260174946329">https://discord.com/channels/719094259051135027/719094260174946329</a></p>
            <p><a href="#" class="fa fa-google contact-google"></a> Email: adxadan@gmail.com</p> 
            <p><i class='fas fa-phone' style='font-size:24px; color: gray;'></i>  Phone Number: 224-305-1377</p>
        </div>
    </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
</body>
</html>
<script src="contact.js"></script>