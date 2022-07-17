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
            <a href="travel.html">Travel</a>
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
                        <a class="nav-link text-white top-link travel" href="travel.html">Travel</a> 
                        <a class="nav-link text-white top-link projects" href="projects.php">Projects</a>
                        <p class="title">West Virginia</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="west-virginia-top-section">
            <h2 class="west-virginia-header">West Virginia</h2>
        </section>
        <section>
            <h3 class="body-headers">Harpers Ferry</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card mb-3 mt-3 mr-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Harpers Ferry</div>
                        <img class="west-virginia-images" src="states-images/west-virginia-images/me.jpeg" alt="This is the picture of me on top of a mountain at Harpers Ferry striking a pose.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of me on top of a <br> mountain at Harpers Ferry striking a pose.</p>
                            <p class="card-text"><small class="text-muted">July 2, 2019</small></p>
                        </div>
                </div>
                <div class="card mb-3 mt-3 ml-5 mr-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Lewis and Clark sign</div>
                        <img class="west-virginia-images" src="states-images/west-virginia-images/Lewis-and-Clark.jpeg" alt="This is a picture of me standing next to the Lewis and Clark sign.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me standing next to <br> the Lewis and Clark sign.</p>
                        <p class="card-text"><small class="text-muted">July 2, 2019</small></p>
                    </div>
                </div>
                <div class="card mb-3 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Harpers Ferry</div>
                        <img class="west-virginia-images" src="states-images/west-virginia-images/me2.jpeg" alt="This is the picture of me on top of a mountain at Harpers Ferry striking a pose.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of me on top of a <br> mountain at Harpers Ferry striking a pose.</p>
                            <p class="card-text"><small class="text-muted">July 2, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-2 mr-5 mt-2" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Harpers Ferry Mountain</div>
                        <img class="west-virginia-images" src="states-images/west-virginia-images/mountain.jpeg" alt="This is an image of Harpers Ferry mountain.">
                    <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of Harpers Ferry mountain.</p>
                    <p class="card-text"><small class="text-muted">July 2, 2019</small></p>
                </div>
                </div>
                <div class="card mb-3 ml-5 mt-3" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Harpers Ferry</div>
                        <img class="west-virginia-images" src="states-images/west-virginia-images/alex-sean.jpeg" alt="This is a picture of my friends and I at Harpers Ferry on our boys trip to Washington D.C.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of my friends and I at Harpers Ferry on our boys trip <br> to Washington D.C.</p>
                            <p class="card-text"><small class="text-muted">July 2, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                
                <div class="card mb-3 mr-5 mt-3" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Harpers Ferry</div>
                        <img class="west-virginia-images" src="states-images/west-virginia-images/sean.jpeg" alt="This is a picture of my friend Sean and I at Harpers Ferry.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of my friend Sean and I <br> at Harpers Ferry.</p>
                            <p class="card-text"><small class="text-muted">July 2, 2019</small></p>
                        </div>
                </div>
                <div class="card mb-3 ml-5 mt-3" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Harpers Ferry</div>
                        <img class="west-virginia-images" src="states-images/west-virginia-images/mountain2.jpeg" alt="This is an image of Harpers Ferry mountain.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of Harpers Ferry mountain.</p>
                            <p class="card-text"><small class="text-muted">July 2, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-5 mr-5 mt-2" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Harpers Ferry Views</div> 
                        <img class="west-virginia-images" src="states-images/west-virginia-images/views.jpeg" alt="This is a picture of a different view of Harpers Ferry in West Virginia.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of a different view of Harpers Ferry in West Virginia.</p>
                            <p class="card-text"><small class="text-muted">July 2, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
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
    <footer class="navbar navbar-dark bg-dark bottom-footer">
        <div class="bottom-links">
            <a href="https://www.facebook.com/adan.vivero97/" class="fa fa-facebook footer-links facebook"></a>
            <a href="https://www.instagram.com/adxadan/" class="fa fa-instagram footer-links instagram"></a>
            <a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost footer-links snapchat"></a>
            <a href="https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg" class="fa fa-youtube footer-links youtube"></a>
            <a href="https://www.linkedin.com/in/adan-vivero-a93970156/" class="fa fa-linkedin footer-links linkedin"></a>
            <i class="fa fa-stack-overflow footer-links stackoverflow"></i>
            <i class="fab fa-discord footer-links discord"></i> 
            <a href="#" class="fa fa-google footer-links google"></a> 
        </div>
        <div class="footer-nav">
            <a class="nav-link text-white footer-link" href="about.php">About</a>
            <a class="nav-link text-white footer-link" href="contact.php">Contact</a>
            <a class="nav-link text-white footer-link" href="story.php">Story</a>
            <a class="nav-link text-white footer-link" href="travel.html">Travel</a>
            <a class="nav-link text-white footer-link" href="projects.php">Projects</a>
        </div>
        <div>
            <span class="english" onclick="currentSlide(5)">English</span>
            <span class="spanish" onclick="currentSlide(6)">Spanish</span>
            <span class="copyright">© Copyright <script>document.write(new Date().getFullYear());</script> by Adan Vivero</span>
        </div>
</footer>
<script>
    <?php 
        include 'west-virginia.js';
    ?>
</script>
</body>
</html>