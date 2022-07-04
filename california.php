<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>California Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/california.css';
        include 'CSS/styles.css';
         ?>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
</head>
<body>
    <header>
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
                        <p class="title">California</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="california-top-section">
            <h2 class="california-header">California</h2>
        </section>
        <section>
            <h3 class="body-headers">Los Angeles</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Los Angeles</div>
                        <img id="california-image" class="california-images mid-wide" src="states-images/california-images/downtown.jpeg" alt="This is a picture of my friends and I in downtown Los Angeles. <br> I was on their shoulders preparing to do an 'L', which is a skill <br> that is performed in mens gymnastics on the parallel bars.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of my friends and I in downtown <br> Los Angeles. I was on their shoulders preparing <br> to do an 'L', which is a skill that is performed in <br> mens gymnastics on the parallel bars.</p>
                        <p class="card-text"><small class="text-muted">August 6, 2015</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Los Angeles</div>
                        <img id="california-image" class="california-images mid-wide" src="states-images/california-images/pbars.jpeg" alt="This is the picture of me doing the 'L' on top of my friends <br> shoulders in downtown Los Angeles.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of me doing the 'L' on top of my <br> friends shoulders in downtown Los Angeles.</p>
                            <p class="card-text"><small class="text-muted">August 6, 2015</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Disneyland</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Disneyland</div> 
                        <img id="california-image" class="california-images not-wide" src="states-images/california-images/disneyland-jon.jpeg" alt="This is a picture of my friend Jon and I at Disneyland.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of my friend Jon and I <br> at Disneyland.</p>
                            <p class="card-text"><small class="text-muted">August 7, 2015</small></p>
                        </div>
                    </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Disneyland</div>
                        <img class="california-images not-wide" src="states-images/california-images/disneyland-jon2.jpeg" alt="This is an image of my friend Jon and I at Disneyland in <br> front of the infamous Mickey Mouse roller coaster.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of my friend Jon and I <br> at Disneyland in front of the infamous <br> Mickey Mouse roller coaster.</p>
                    <p class="card-text"><small class="text-muted">August 7, 2015</small></p>
                </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Disneyland</div>
                        <img class="california-images wide" src="states-images/california-images/disneyland-kristin.jpeg" alt="This is an image of my friend Jon and Kristin and I <br> at Disneyland. <br><br><b> Fun fact, they are twins.</b>">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friend Jon and Kristin and I at Disneyland. <br> Fun fact, they are twins.</p>
                            <p class="card-text"><small class="text-muted">August 7, 2015</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Huntington Beach</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Huntington Beach</div>
                    <img class="california-images not-wide" src="states-images/california-images/huntington-jon.jpeg" alt="This is an image of my friend Jon and I at Huntington Beach.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of my friend Jon and I <br> at Huntington Beach.</p>
                        <p class="card-text"><small class="text-muted">August 10, 2015</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Huntington Beach</div>
                    <img class="california-images not-wide" src="states-images/california-images/huntington-jon2.jpeg" alt="This is an image of my friend Jon and I at Huntington Beach.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of my friend Jon and I <br> at Huntington Beach.</p>
                        <p class="card-text"><small class="text-muted">August 10, 2015</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Huntington Beach</div>
                    <img class="california-images not-wide" src="states-images/california-images/huntington-karina.jpeg" alt="This is an image of my friend Karina and I at Huntington Beach.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of my friend Karina and I <br> at Huntington Beach.</p>
                        <p class="card-text"><small class="text-muted">August 10, 2015</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Huntington Beach</div>
                        <img class="california-images not-wide" src="states-images/california-images/pyramid.jpeg" alt="This is an image of my friends and I attempting to do a pyramid.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friends and I <br> attempting to do a pyramid.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2015</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Huntington Beach</div>
                        <img class="california-images not-wide" src="states-images/california-images/huntington-holly.jpeg" alt="This is an image of my friend Holly and I at Huntington Beach.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friend Holly and I <br> at Huntington Beach.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2015</small></p>
                        </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div class="row">
                    <img class="box-image" src="states-images/california-images/downtown.jpeg" onclick="image(1)" alt="This is a picture of my friends and I in downtown Los Angeles. <br> I was on their shoulders preparing to do an 'L', which is a skill <br> that is performed in mens gymnastics on the parallel bars.">
                    <img class="box-image" src="states-images/california-images/pbars.jpeg" onclick="image(2)" alt="This is the picture of me doing the 'L' on top of my friends <br> shoulders in downtown Los Angeles.">
                    <img class="box-image" src="states-images/california-images/disneyland-jon.jpeg" onclick="image(3)" alt="This is a picture of my friend Jon and I at Disneyland.">
                    <img class="box-image" src="states-images/california-images/disneyland-jon2.jpeg" onclick="image(4)" alt="This is an image of my friend Jon and I at Disneyland in <br> front of the infamous Mickey Mouse roller coaster.">
                    <img class="box-image" src="states-images/california-images/disneyland-kristin.jpeg" onclick="image(5)" alt="This is an image of my friend Jon and Kristin and I <br>at Disneyland. <br> <br> <b> Fun fact, they are twins.</b>">
                    <img class="box-image" src="states-images/california-images/huntington-jon.jpeg" onclick="image(6)" alt="This is an image of my friend Jon and I at Huntington Beach.">
                    <img class="box-image" src="states-images/california-images/huntington-jon2.jpeg" onclick="image(7)" alt="This is an image of my friend Jon and I at Huntington Beach.">
                    <img class="box-image" src="states-images/california-images/huntington-karina.jpeg" onclick="image(8)" alt="This is an image of my friend Karina and I at Huntington Beach.">
                    <img class="box-image" src="states-images/california-images/pyramid.jpeg" onclick="image(9)" alt="This is an image of my friends and I attempting to do a pyramid.">
                    <img class="box-image" src="states-images/california-images/huntington-holly.jpeg" onclick="image(10)" alt="This is an image of my friend Holly and I at Huntington Beach.">
            </div>
            <div id="caption"></div>
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
            <a class="nav-link text-white footer-link" href="travel.php">Travel</a>
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
            include 'california.js';
        ?>
    </script>
</body>
</html>