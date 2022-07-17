<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utah Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/utah.css';
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
                        <p class="title">Utah</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="utah-top-section">
            <h2 class="utah-header">Utah</h2>
        </section>
        <section>
            <h3 class="body-headers">Salt Lake City</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Salt Lake City Mormon Church</div>
                        <img class="utah-images not-wide" src="states-images/utah-images/church-me.jpeg" alt="This is a picture of me in front of a mormon church in Salt Lake City.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me in front of a <br> mormon church in Salt Lake City.</p>
                        <p class="card-text"><small class="text-muted">March 22, 2018</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Salt Lake City Mormon Church</div>
                        <img class="utah-images not-wide" src="states-images/utah-images/church.jpeg" alt="This is an image of a mormon church in Salt Lake City.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of a mormon church in <br> Salt Lake City.</p>
                            <p class="card-text"><small class="text-muted">March 22, 2018</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Salt Lake City Mormon Church</div> 
                        <img class="utah-images not-wide" src="states-images/utah-images/church-mom.jpeg" alt="This is a picture of my mother and I at a mormon church in Salt Lake City.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of my mother and I <br> at a mormon church in Salt Lake City.</p>
                            <p class="card-text"><small class="text-muted">March 22, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Salt Lake City Mormon Church</div>
                        <img class="utah-images wide" src="states-images/utah-images/salt-lake-city2.jpeg" alt="This is an image of a mormon church in downtown Salt Lake City.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of a mormon church in downtown Salt Lake City.</p>
                            <p class="card-text"><small class="text-muted">March 22, 2018</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Salt Lake City</div>
                        <img class="utah-images wide" src="states-images/utah-images/salt-lake-city3.jpeg" alt="This is an image of downtown Salt Lake City.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of downtown Salt Lake City.</p>
                            <p class="card-text"><small class="text-muted">March 22, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Arches National Park</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Arches National Park Sign</div> 
                        <img class="utah-images wide" src="states-images/utah-images/arches-sign.jpeg" alt="This is an image of me on the sign of the Arches National Park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me on the sign of the Arches National Park.</p>
                            <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Arches National Park</div> 
                        <img class="utah-images wide" src="states-images/utah-images/arches2.jpeg" alt="This is an image of me at the Arches National Park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me at the Arches National Park.</p>
                            <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Arches National Park</div>
                    <img class="utah-images not-wide" src="states-images/utah-images/arches.jpeg" alt="This is an image of me at the Arches National Park.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at the Arches <br> National Park.</p>
                        <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                    </div>
                </div>
                
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Arches National Park</div>
                        <img class="utah-images not-wide" src="states-images/utah-images/big-arch.jpeg" alt="This is an image of me at the heart of the arch of the Arches National Park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me at the heart of the <br> arch of the Arches National Park.</p>
                            <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Arches National Park</div>
                        <img class="utah-images not-wide" src="states-images/utah-images/small-arch.jpeg" alt="This is an image of me inside a small arch <br> with a view of the big arch at the Arches National Park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me inside a small arch <br> with a view of the big arch at the Arches <br> National Park.</p>
                            <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Arches National Park</div>
                        <img class="utah-images wide" src="states-images/utah-images/arch-field.jpeg" alt="This is an image of me looking at a field at the Arches National Park. It was a gigantic field and it was pretty cool.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me looking at a field at the Arches National Park. <br> It was a gigantic field and it was pretty cool.</p>
                            <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Arches National Park</div>
                        <img class="utah-images wide" src="states-images/utah-images/arches4.jpeg" alt="This is an image of me at the Arches National Park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me at the Arches National Park.</p>
                            <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Arches National Park</div>
                        <img class="utah-images not-wide" src="states-images/utah-images/arches3.jpeg" alt="This is an image of me at an open area at the Arches National Park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me at an open area <br> at the Arches National Park.</p>
                            <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
            <h3 class="body-headers">Springville, Utah</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Springville, Utah</div>
                    <img class="utah-images wide" src="states-images/utah-images/mountains.jpeg" alt="This is an image of me at Springville Utah standing at the middle of a mountain.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at Springville Utah standing at the middle <br> of a mountain.</p>
                        <p class="card-text"><small class="text-muted">March 25, 2018</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Springville, Utah</div>
                    <img class="utah-images wide" src="states-images/utah-images/mountains3.jpeg" alt="This is an image of me at Springville Utah standing at the middle of a mountain.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at Springville Utah standing at the middle <br> of a mountain.</p>
                        <p class="card-text"><small class="text-muted">March 25, 2018</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Springville, Utah</div>
                    <img class="utah-images not-wide" src="states-images/utah-images/mountains2.jpeg" alt="This is an image of me at Springville Utah standing at the bottom of the mountains.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at Springville Utah <br> standing at the bottom of the mountains.</p>
                        <p class="card-text"><small class="text-muted">March 25, 2018</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Springville, Utah</div>
                    <img class="utah-images not-wide" src="states-images/utah-images/mountains4.jpeg" alt="This is an image of me at Springville Utah standing at the center of the mountains.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at Springville Utah <br> standing at the center of the mountains.</p>
                        <p class="card-text"><small class="text-muted">March 25, 2018</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Springville, Utah</div>
                    <img class="utah-images not-wide" src="states-images/utah-images/mountains5.jpeg" alt="This is an image of me at Springville Utah standing at the bottom of the mountains.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at Springville Utah <br> standing at the bottom of the mountains.</p>
                        <p class="card-text"><small class="text-muted">March 25, 2018</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Other images in Utah</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Draper, Utah</div>
                    <img class="utah-images not-wide" src="states-images/utah-images/draper.jpeg" alt="This is an image of me at Draper, Utah which was a nice view of the city.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at Draper, Utah <br> which was a nice view of the city.</p>
                        <p class="card-text"><small class="text-muted">March 23, 2018</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Utah</div>
                    <img class="utah-images not-wide" src="states-images/utah-images/outside.jpeg" alt="This is an image of me standing outside of my cousins house in Utah. I really like the cool view of the mountains.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me standing outside <br> of my cousins house in Utah. I really like <br> the cool view of the mountains.</p>
                        <p class="card-text"><small class="text-muted">March 26, 2018</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Utah</div>
                    <img class="utah-images wide" src="states-images/utah-images/pauls-house.jpeg" alt="This is an image of me standing outside my other cousins house in Utah. Again, I really find the mountains a view cool view right outside their house.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me standing outside my other cousins house <br> in Utah. Again, I really find the mountains a view cool view right <br> outside their house.</p>
                        <p class="card-text"><small class="text-muted">March 24, 2018</small></p>
                    </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/utah-images/church-me.jpeg" onclick="image(1)" alt="This is a picture of me in front of a mormon church in Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/church.jpeg" onclick="image(2)" alt="This is an image of a mormon church in Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/church-mom.jpeg" onclick="image(3)" alt="This is a picture of my mother and I at a mormon church in Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/salt-lake-city2.jpeg" onclick="image(4)" alt="This is an image of a mormon church in downtown Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/salt-lake-city3.jpeg" onclick="image(5)" alt="This is an image of downtown Salt Lake City.">
                    <img class="box-image" src="states-images/utah-images/arches-sign.jpeg" onclick="image(6)" alt="This is an image of me on the sign of the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/arches2.jpeg" onclick="image(7)" alt="This is an image of me at the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/arches.jpeg" onclick="image(8)" alt="This is an image of me at the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/big-arch.jpeg" onclick="image(9)" alt="This is an image of me at the heart of the arch of the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/small-arch.jpeg" onclick="image(10)" alt="This is an image of me inside a small arch with a view of the big arch at the Arches National Park.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/utah-images/arch-field.jpeg" onclick="image(11)" alt="This is an image of me looking at a field at the Arches National Park. It was a gigantic field and it was pretty cool.">
                    <img class="box-image" src="states-images/utah-images/arches4.jpeg" onclick="image(12)" alt="This is an image of me at the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/arches3.jpeg" onclick="image(13)" alt="This is an image of me at an open area at the Arches National Park.">
                    <img class="box-image" src="states-images/utah-images/mountains.jpeg" onclick="image(14)" alt="This is an image of me at Springville Utah standing at the middle of a mountain.">
                    <img class="box-image" src="states-images/utah-images/mountains3.jpeg" onclick="image(15)" alt="This is an image of me at Springville Utah standing at the middle of a mountain.">
                    <img class="box-image" src="states-images/utah-images/mountains2.jpeg" onclick="image(16)" alt="This is an image of me at Springville Utah standing at the bottom of the mountains.">
                    <img class="box-image" src="states-images/utah-images/mountains4.jpeg" onclick="image(17)" alt="This is an image of me at Springville Utah standing at the center of the mountains.">
                    <img class="box-image" src="states-images/utah-images/mountains5.jpeg" onclick="image(18)" alt="This is an image of me at Springville Utah standing at the bottom of the mountains.">
                    <img class="box-image" src="states-images/utah-images/draper.jpeg" onclick="image(19)" alt="This is an image of me at Draper, Utah which was a nice view of the city.">
                    <img class="box-image" src="states-images/utah-images/outside.jpeg" onclick="image(20)" alt="This is an image of me standing outside of my cousins house in Utah. I really like the cool view of the mountains.">
                    <img class="box-image" src="states-images/utah-images/pauls-house.jpeg" onclick="image(21)" alt="This is an image of me standing outside my other cousins house in Utah. Again, I really find the mountains a view cool view right outside their house.">
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
        include 'utah.js';
    ?>
</script>
</body>
</html>