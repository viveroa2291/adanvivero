<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texas Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/texas.css';
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
                        <p class="title">Texas</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="texas-top-section">
            <h2 class="texas-header">Texas</h2>
        </section>
        <section>
            <h3 class="body-headers">Hotel</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">San Antonio suburb</div>
                        <img class="texas-images" src="states-images/texas-images/texas.jpeg" alt="This is a picture of me sitting on a fence during our walk to walmart in the suburbs of San Antonio Texas. We were walking in a neighborhood with nice homes and golf courses.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me sitting on a fence during our walk to walmart <br> in the suburbs of San Antonio Texas. We were walking in a <br> neighborhood with nice homes and golf courses.</p>
                        <p class="card-text"><small class="text-muted">June 28, 2017</small></p>
                    </div>
                </div>
                 <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Hotel Pool</div>
                        <img class="texas-images" src="states-images/texas-images/hotel3.jpeg" alt="This is an image of the pool of my hotel.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of the pool of my hotel.</p>
                    <p class="card-text"><small class="text-muted">June 28, 2017</small></p>
                </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Hotel</div> 
                        <img class="texas-images" src="states-images/texas-images/hotel2.jpeg" alt="This is a picture of me in my swimsuit on a photoshoot outside my hotel.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of me in my swimsuit <br> on a photoshoot outside my hotel.</p>
                            <p class="card-text"><small class="text-muted">June 28, 2017</small></p>
                        </div>
                    </div>
                    <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Gaitlinburg Waterfall</div>
                        <img class="texas-images" src="states-images/texas-images/hotel4.jpeg" alt="This is an image of me standing outside my hotel holding two dorsal fins from an orca.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of me standing outside <br> my hotel holding two dorsal fins from <br> an orca.</p>
                    <p class="card-text"><small class="text-muted">June 29, 2017</small></p>
                </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Hotel</div>
                        <img class="texas-images" src="states-images/texas-images/hotel.jpeg" alt="This is a picture of me outside my hotel room enjoying the landscaping outside.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of me outside my hotel <br> room enjoying the landscaping outside.</p>
                            <p class="card-text"><small class="text-muted">June 28, 2017</small></p>
                        </div>
                </div>
               
            </div>
        </section>
        <section>
        <h3 class="body-headers">Seaworld</h3>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Seaworld</div>
                        <img class="texas-images" src="states-images/texas-images/seaworld3.jpeg" alt="This is a picture of me of my first visit at Seaworld in Texas.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me of my <br> first visit at Seaworld in Texas.</p>
                        <p class="card-text"><small class="text-muted">June 29, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Gaitlinburg</div>
                        <img class="texas-images" src="states-images/texas-images/group-selfie2.jpeg" alt="This is a group selfie of my friends and I hiking in Gaitlinburg.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a group selfie of my friends and I hiking in Gaitlinburg.</p>
                            <p class="card-text"><small class="text-muted">October 13, 2020</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Gaitlinburg</div>
                        <img class="texas-images" src="states-images/texas-images/mikayla.jpeg" alt="This is an image of my friend Mikayla and I in Gaitlinburg by a waterfall.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friend Mikayla <br> and I in Gaitlinburg by a waterfall.</p>
                            <p class="card-text"><small class="text-muted">October 13, 2020</small></p>
                        </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/texas-images/texas.jpeg" onclick="image(1)" alt="This is a picture of me sitting on a fence during our walk to walmart in the suburbs of San Antonio Texas. We were walking in a neighborhood with nice homes and golf courses.">                    
                    <img class="box-image" src="states-images/texas-images/hotel3.jpeg" onclick="image(2)" alt="This is an image of the pool of my hotel.">
                    <img class="box-image" src="states-images/texas-images/hotel2.jpeg" onclick="image(3)" alt="This is a picture of me in my swimsuit on a photoshoot outside my hotel.">                    
                    <img class="box-image" src="states-images/texas-images/hotel4.jpeg" onclick="image(4)" alt="This is an image of me standing outside my hotel holding two dorsal fins from an orca.">
                    <img class="box-image" src="states-images/texas-images/hotel.jpeg" onclick="image(5)" alt="This is a picture of me outside my hotel room enjoying the landscaping outside."> 
                    <img class="box-image" src="states-images/texas-images/seaworld3.jpeg" onclick="image(6)" alt="This is a picture of me of my first visit at Seaworld in Texas.">
                    <img class="box-image" src="states-images/tennessee-images/group-selfie2.jpeg" onclick="image(7)" alt="This is a group selfie of my friends and I hiking in Gaitlinburg.">
                    <img class="box-image" src="states-images/tennessee-images/mikayla.jpeg" onclick="image(8)" alt="This is an image of my friend Mikayla and I in Gaitlinburg by a waterfall.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'texas.js';
    ?>
</script>
</body>
</html>