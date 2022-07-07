<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minnesota Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/minnesota.css';
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
                        <p class="title">Minnesota</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="minnesota-top-section">
            <h2 class="minnesota-header">Minnesota</h2>
        </section>
        <section>
            <h3 class="body-headers">Minneapolis</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Minneapolis</div>
                        <img class="minnesota-images wide" src="states-images/minnesota-images/minneapolis-self.jpeg" alt="This is an image of me in downtown Minneapolis. <br> My friends and I were doing a photoshoot.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me in downtown Minneapolis. <br> My friends and I were doing a photoshoot.</p>
                        <p class="card-text"><small class="text-muted">August 15, 2020</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Minneapolis</div>
                        <img class="minnesota-images wide" src="states-images/minnesota-images/minneapolis.jpeg" alt="This is an image of my friends and I in downtown Minneapolis <br> during our photoshoot.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friends and I in downtown Minneapolis <br> during our photoshoot.</p>
                            <p class="card-text"><small class="text-muted">August 15, 2020</small></p>
                        </div>
                    </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                    <div class="card mb-3 m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Minneapolis</div>
                        <img class="minnesota-images not-wide" src="states-images/minnesota-images/minneapolis-self2.jpeg" alt="This is an image of me in downtown <br>Minneapolis during a photoshoot.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of me in downtown <br>Minneapolis during a photoshoot.</p>
                    <p class="card-text"><small class="text-muted">August 15, 2020</small></p>
                </div>
                </div>
                    <div class="card mb-3 m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">US Bank Stadium Minneapolis</div>
                        <img class="minnesota-images not-wide" src="states-images/minnesota-images/us-bank.jpeg" alt="This is an image of me at U.S Bank Stadium, <br> where the Minnesota Vikings play.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me at U.S Bank Stadium, <br> where the Minnesota Vikings play.</p>
                            <p class="card-text"><small class="text-muted">August 15, 2020</small></p>
                        </div>
                    </div>
                    <div class="card mb-3 m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Minneapolis</div> 
                        <img class="minnesota-images not-wide" src="states-images/minnesota-images/minneapolis-self3.jpeg" alt="This is another image of me in downtown <br> Minneapolis during a walk around the city.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is another image of me in downtown <br> Minneapolis during a walk around the city.</p>
                            <p class="card-text"><small class="text-muted">June 12, 2021</small></p>
                        </div>
                    </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Minneapolis Arcade</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Minneapolis Arcade (Rooftop)</div>
                        <img class="minnesota-images wide" src="states-images/minnesota-images/rooftop.jpeg" alt="This is an image of my friends and I at an arcade in the <br> outskirts of Minneapolis.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friends and I at an arcade in the <br> outskirts of Minneapolis.</p>
                            <p class="card-text"><small class="text-muted">November 6, 2021</small></p>
                        </div>
                    </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Minneapolis Arcade</div>
                    <img class="minnesota-images wide" src="states-images/minnesota-images/arcade.jpeg" alt="This is an image of my friends and I at an arcade in the <br> outskirts of Minneapolis.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of my friends and I at an arcade in the <br> outskirts of Minneapolis.</p>
                        <p class="card-text"><small class="text-muted">April 29, 2022</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Minneapolis Arcade</div>
                    <img class="minnesota-images not-wide" src="states-images/minnesota-images/arcade-self.jpeg" alt="This is an image of me at an arcade in the <br> outskirts of Minneapolis with a wall of art.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at an arcade in the <br> outskirts of Minneapolis with a wall of art.</p>
                        <p class="card-text"><small class="text-muted">April 29, 2022</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Other Minnesota</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Mall of America</div>
                <img class="minnesota-images wide" src="states-images/minnesota-images/mallofamerica.jpeg" alt="This is an image of me at the Mall of America in Saint Paul <br> Minnesota.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of me at the Mall of America in Saint Paul <br> Minnesota.</p>
                    <p class="card-text"><small class="text-muted">April 20, 2019</small></p>
                </div>
            </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Minneapolis</div>
                        <img class="minnesota-images wide" src="states-images/minnesota-images/george-floyd.jpeg" alt="This is an image of a George Floyd mural located in the <br> outskirts of Minneapolis.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of a George Floyd mural located in the <br> outskirts of Minneapolis.</p>
                            <p class="card-text"><small class="text-muted">August 15, 2020</small></p>
                        </div>
                    </div>
            </div>
        </section> 
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Eden Prarie, Minnesota</div>
                <img class="minnesota-images wide" src="states-images/minnesota-images/minnesota-friends.jpeg" alt="This is an image of my friends in Eden Prarie Minnesota. <br> One of my friends is from Ohio and we haven't seen each <br> other in years and was in town, therefore we met up and <br> merged our friend groups together.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of my friends in Eden Prarie Minnesota. <br> One of my friends is from Ohio and we haven't seen each <br> other in years and was in town, therefore we met up and <br> merged our friend groups together.</p>
                    <p class="card-text"><small class="text-muted">June 19, 2021</small></p>
                </div>
            </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Afton Alps</div>
                <img class="minnesota-images wide" src="states-images/minnesota-images/skiing.jpeg" alt="This is an image of me skiing at Afton Alps in Minnesota. <br> I enjoyed skiing here very much and would recommend <br> to give this place a visit if you like to ski or snowboard.">
                <div class="card-body m-2">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of me skiing at Afton Alps in Minnesota. <br> I enjoyed skiing here very much and would recommend <br> to give this place a visit if you like to ski or snowboard.</p>
                    <p class="card-text"><small class="text-muted">December 18, 2021</small></p>
                </div>
            </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div class="row">
                    <img class="box-image" src="states-images/minnesota-images/minneapolis-self.jpeg" onclick="image(1)" alt="This is an image of me in downtown Minneapolis. <br> My friends and I were doing a photoshoot.">
                    <img class="box-image" src="states-images/minnesota-images/minneapolis.jpeg" onclick="image(2)" alt="This is an image of my friends and I in downtown Minneapolis <br> during our photoshoot.">
                    <img class="box-image" src="states-images/minnesota-images/minneapolis-self2.jpeg" onclick="image(3)" alt="This is an image of me in downtown <br>Minneapolis during a photoshoot.">
                    <img class="box-image" src="states-images/minnesota-images/us-bank.jpeg" onclick="image(4)" alt="This is an image of me at U.S Bank Stadium, <br> where the Minnesota Vikings play.">
                    <img class="box-image" src="states-images/minnesota-images/minneapolis-self3.jpeg" onclick="image(5)" alt="This is another image of me in downtown <br> Minneapolis during a walk around the city.">
                    <img class="box-image" src="states-images/minnesota-images/rooftop.jpeg" onclick="image(6)" alt="This is an image of my friends and I at an arcade in the <br> outskirts of Minneapolis.">
                    <img class="box-image" src="states-images/minnesota-images/arcade.jpeg" onclick="image(7)" alt="This is an image of my friends and I at an arcade in the <br> outskirts of Minneapolis.">
                    <img class="box-image" src="states-images/minnesota-images/arcade-self.jpeg" onclick="image(8)" alt="This is an image of me at an arcade in the <br> outskirts of Minneapolis with a wall of art.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/minnesota-images/mallofamerica.jpeg" onclick="image(9)" alt="This is an image of me at the Mall of America in Saint Paul <br> Minnesota.">
                    <img class="box-image" src="states-images/minnesota-images/george-floyd.jpeg" onclick="image(10)" alt="This is an image of a George Floyd mural located in the <br> outskirts of Minneapolis.">
                    <img class="box-image" src="states-images/minnesota-images/minnesota-friends.jpeg" onclick="image(11)" alt="This is an image of my friends in Eden Prarie Minnesota. <br> One of my friends is from Ohio and we haven't seen each <br> other in years and was in town, therefore we met up and <br> merged our friend groups together.">
                    <img class="box-image" src="states-images/minnesota-images/skiing.jpeg" onclick="image(12)" alt="This is an image of me skiing at Afton Alps in Minnesota. <br> I enjoyed skiing here very much and would recommend <br> to give this place a visit if you like to ski or snowboard.">
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
        include 'minnesota.js';
    ?>
</script>
</body>
</html>