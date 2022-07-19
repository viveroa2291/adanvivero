<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indiana Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/indiana.css';
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
                                echo "<a class='nav-link text-white top-link logout' href='logout.inc.php'>Log Out</a>";
                            }
                            else {
                                echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                            }
                        ?>
                        <p class="title">Indiana</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="indiana-top-section">
            <h2 class="indiana-header">Indiana</h2>
        </section>
        <section>
            <h3 class="body-headers">Indiana University</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Nikki's Dorm</div>
                        <img class="indiana-images" src="states-images/indiana-images/nikki-sami.jpeg" alt="This is a picture of me and my friends Nikki and Sami inside of Nikki's room at Indiana University for her move in day.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me and my friends <br> Nikki and Sami inside of Nikki's room at <br> Indiana University for her move in day.</p>
                        <p class="card-text"><small class="text-muted">August 22, 2019</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Indiana University</div>
                        <img class="indiana-images" src="states-images/indiana-images/nikki-sami2.jpeg" alt="This is the picture of my friends Nikki, Sami, and I standing outside an Indiana University sign.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Nikki, <br> Sami, and I standing outside an <br> Indiana University sign.</p>
                            <p class="card-text"><small class="text-muted">August 22, 2019</small></p>
                        </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Nikki's Dorm</div>
                        <img class="indiana-images" src="states-images/indiana-images/nikki.jpeg" alt="This is the picture of my friend Nikki and I in a Halloween costume posing before going out to a party.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friend Nikki and I <br> in a Halloween costume posing before <br> going out to a party.</p>
                            <p class="card-text"><small class="text-muted">November 1, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Kelley's School of Business</div> 
                        <img class="indiana-images" src="states-images/indiana-images/kelleys.jpeg" alt="This is a picture of me standing outside of the Kelley's School of Business at Indiana University.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of me standing outside of the Kelley's School of Business <br> at Indiana University.</p>
                            <p class="card-text"><small class="text-muted">May 30, 2020</small></p>
                        </div>
                    </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Bear's Place</div>
                        <img class="indiana-images" src="states-images/indiana-images/bears.jpeg" alt="This is an image of me standing outside of Bear's Place.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of me standing outside of Bear's Place.</p>
                    <p class="card-text"><small class="text-muted">May 31, 2020</small></p>
                </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Indiana University</div>
                        <img class="indiana-images" src="states-images/indiana-images/sean.jpeg" alt="This is an image of my friend Sean and I at Indiana University.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friend Sean <br> and I at Indiana University.</p>
                            <p class="card-text"><small class="text-muted">May 31, 2020</small></p>
                        </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01"> 
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/indiana-images/nikki-sami.jpeg" onclick="image(1)"  alt="This is a picture of me and my friends Nikki and Sami inside of Nikki's room at Indiana University for her move in day.">
                    <img class="box-image" src="states-images/indiana-images/nikki-sami2.jpeg" onclick="image(2)" alt="This is the picture of my friends Nikki, Sami, and I standing outside an Indiana University sign.">
                    <img class="box-image" src="states-images/indiana-images/nikki.jpeg" onclick="image(3)" alt="This is the picture of my friend Nikki and I in a Halloween costume posing before going out to a party.">
                    <img class="box-image" src="states-images/indiana-images/kelleys.jpeg" onclick="image(4)" alt="This is a picture of me standing outside of the Kelley's School of Business at Indiana University.">
                    <img class="box-image" src="states-images/indiana-images/bears.jpeg" onclick="image(5)" alt="This is an image of me standing outside of Bear's Place.">
                    <img class="box-image" src="states-images/indiana-images/sean.jpeg" onclick="image(6)" alt="This is an image of my friend Sean and I at Indiana University.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'indiana.js';
    ?>
</script>
</body>
</html>