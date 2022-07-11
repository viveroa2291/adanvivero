<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkansas Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/arkansas.css';
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
                        <a class="nav-link text-white top-link travel" href="travel.html">Travel</a> 
                        <a class="nav-link text-white top-link projects" href="projects.php">Projects</a>
                        <p class="title">Arkansas</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="arkansas-top-section">
            <h2 class="arkansas-header">Arkansas</h2>
        </section>
        <section>
            <h3 class="body-headers">Vandervoort</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cousin's Bathroom</div>
                        <img id="arkansas-image" class="arkansas-images not-wide" src="states-images/arkansas-images/me.jpeg" alt="This is a mirror picture that I took in my cousins newly remodeled bathroom and was a time when taking mirror pictures was popular on the iphone.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a mirror picture that I took in my <br> cousins newly remodeled bathroom and <br> was a time when taking mirror pictures <br> was popular on the iphone.</p>
                        <p class="card-text"><small class="text-muted">December 29, 2012</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cousin's Land</div>
                        <img id="arkansas-image" class="arkansas-images not-wide" src="states-images/arkansas-images/hunting.jpeg" alt="This is an image of me holding a hunting rifle at my cousins house where we went target shooting on their land <b>safely</b>. It was a fun experience and learned information on gun safety.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me holding a hunting <br> rifle at my cousins house where we <br> went target shooting on their land <br> <b>safely</b>. It was a fun experience and <br> learned information on gun safety.</p>
                            <p class="card-text"><small class="text-muted">December 28, 2015</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cousin's Farm</div>
                        <img id="arkansas-image" class="arkansas-images not-wide" src="states-images/arkansas-images/goats.jpeg" alt="This is an image of goats eating their food in my cousins farm.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of goats eating their <br> food in my cousins farm.</p>
                            <p class="card-text"><small class="text-muted">December 31, 2015</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cousin's Farm</div> 
                        <img id="arkansas-image" class="arkansas-images not-wide" src="states-images/arkansas-images/cows.jpeg" alt="This is an image of the cows on my cousin's farm.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of the cows on my <br> cousin's farm.</p>
                            <p class="card-text"><small class="text-muted">December 31, 2015</small></p>
                        </div>
                    </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Lake</div>
                        <img class="arkansas-images not-wide" src="states-images/arkansas-images/lake-me.jpeg" alt="This is an image of me at the lake that my cousins took me to.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me at the lake that <br> my cousins took me to.</p>
                        <p class="card-text"><small class="text-muted">June 15, 2016</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cousin's Farm</div>
                        <img id="arkansas-image" class="arkansas-images not-wide" src="states-images/arkansas-images/goat-me2.jpeg" alt="This is an image of me holding a baby goat on my cousin's farm.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me holding a baby <br> goat on my cousin's farm.</p>
                            <p class="card-text"><small class="text-muted">August 19, 2017</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cousin's Farm</div>
                        <img class="arkansas-images wide" src="states-images/arkansas-images/goat-me.jpeg" alt="This is an image of me and one of my cousin's goat on his farm.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me and one of my cousin's goat on his farm.</p>
                            <p class="card-text"><small class="text-muted">Janurary 1, 2016</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cousin's Farm</div>
                        <img class="arkansas-images wide" src="states-images/arkansas-images/cow-me.jpeg" alt="This is an image of me taking a picture with one of my cousin's cow.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me taking a <br> picture with one of my cousin's cow.</p>
                            <p class="card-text"><small class="text-muted">December 28, 2020</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Ozark</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">On The Road</div>
                    <img class="arkansas-images not-wide" src="states-images/arkansas-images/view.jpeg" alt="This is a picture of me on the side of the road. We were driving and decided to take a picture of the view which is difficult to see with the barricade in the way.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me on the side of the road. <br> We were driving and decided to take a picture <br> of the view which is difficult to see with the <br> barricade in the way.</p>
                        <p class="card-text"><small class="text-muted">August 16, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Mexican Restaurant</div>
                    <img class="arkansas-images not-wide" src="states-images/arkansas-images/restaurant.jpeg" alt="This is a picture of me outside of one of my favorite Mexican restaurant when visiting my cousins. They provide very delicious food and give you large portions.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me outside of one of my favorite Mexican <br> restaurant when visiting my cousins. They provide very delicious <br> food and give you large portions.</p>
                        <p class="card-text"><small class="text-muted">August 16, 2017</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Henderson State University</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                        <div class="card-header text-center" id="featureTitle">Henderson State University</div>
                        <img class="arkansas-images not-wide" src="states-images/arkansas-images/university.jpeg" alt="This is a picture of me at my cousin's undergrad and graduate school. He took me in for a tour of where he works and where he went to school.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of me at my cousin's <br> undergrad and graduate school. He <br> took me in for a tour of where he works <br> and where he went to school.</p>
                            <p class="card-text"><small class="text-muted">December 31, 2020</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                        <div class="card-header text-center" id="featureTitle">Henderson State University</div>
                        <img class="arkansas-images not-wide" src="states-images/arkansas-images/university2.jpeg" alt="This is a picture of me at my cousin's undergrad and graduate school. He took me in for a tour of where he works and where he went to school.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of me at my cousin's <br> undergrad and graduate school. He <br> took me in for a tour of where he works <br> and where he went to school.</p>
                            <p class="card-text"><small class="text-muted">December 31, 2020</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Other Parts of Arkansas</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Altus (Cousin's House)</div>
                    <img class="arkansas-images not-wide" src="states-images/arkansas-images/cousins.jpeg" alt="This is a picture of my cousins and I at their house.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of my cousins and I <br> at their house.</p>
                        <p class="card-text"><small class="text-muted">January 1, 2016</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Clarksville Lake</div>
                        <img class="arkansas-images not-wide" src="states-images/arkansas-images/lake-me2.jpeg" alt="This is an image of me at a Lake Horsehead in Clarksville Arkansas.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me at a Lake Horsehead <br> in Clarksville Arkansas.</p>
                            <p class="card-text"><small class="text-muted">June 20, 2016</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Waldron</div>
                        <img class="arkansas-images not-wide" src="states-images/arkansas-images/cousins2.jpeg" alt="This is an image of my cousins and I a year and a half later from the image on the left.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my cousins and I a year and a half later <br> from the image on the left.</p>
                            <p class="card-text"><small class="text-muted">August 17, 2017</small></p>
                        </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/arkansas-images/me.jpeg" onclick="image(1)" alt="This is a mirror picture that I took in my cousins newly remodeled bathroom and was a time when taking mirror pictures was popular on the iphone.">
                    <img class="box-image" src="states-images/arkansas-images/hunting.jpeg" onclick="image(2)" alt="This is an image of me holding a hunting rifle at my cousins house where we went target shooting on their land <b>safely</b>. It was a fun experience and learned information on gun safety.">
                    <img class="box-image" src="states-images/arkansas-images/goats.jpeg" onclick="image(3)" alt="This is an image of goats eating their food in my cousins farm.">
                    <img class="box-image" src="states-images/arkansas-images/cows.jpeg" onclick="image(4)" alt="This is an image of the cows on my cousin's farm.">
                    <img class="box-image" src="states-images/arkansas-images/lake-me.jpeg" onclick="image(5)" alt="This is an image of me at the lake that my cousins took me to.">
                    <img class="box-image" src="states-images/arkansas-images/goat-me2.jpeg" onclick="image(6)" alt="This is an image of me holding a baby goat on my cousin's farm.">
                    <img class="box-image" src="states-images/arkansas-images/goat-me.jpeg" onclick="image(7)" alt="This is an image of me and one of my cousin's goat on his farm.">
                    <img class="box-image" src="states-images/arkansas-images/cow-me.jpeg" onclick="image(8)" alt="This is an image of me taking a picture with one of my cousin's cow.">
                    <img class="box-image" src="states-images/arkansas-images/view.jpeg" onclick="image(9)" alt="This is a picture of me on the side of the road. We were driving and decided to take a picture of the view which is difficult to see with the barricade in the way.">
                    <img class="box-image" src="states-images/arkansas-images/restaurant.jpeg" onclick="image(10)" alt="This is a picture of me outside of one of my favorite Mexican restaurant when visiting my cousins. They provide very delicious food and give you large portions.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/arkansas-images/university.jpeg" onclick="image(11)" alt="his is a picture of me at my cousin's undergrad and graduate school. He took me in for a tour of where he works and where he went to school.">
                    <img class="box-image" src="states-images/arkansas-images/university2.jpeg" onclick="image(12)" alt="his is a picture of me at my cousin's undergrad and graduate school. He took me in for a tour of where he works and where he went to school.">
                    <img class="box-image" src="states-images/arkansas-images/cousins.jpeg" onclick="image(13)" alt="This is a picture of my cousins and I at their house.">
                    <img class="box-image" src="states-images/arkansas-images/lake-me2.jpeg" onclick="image(14)" alt="This is an image of me at a Lake Horsehead in Clarksville Arkansas.">
                    <img class="box-image" src="states-images/arkansas-images/cousins2.jpeg" onclick="image(15)" alt="This is an image of my cousins and I a year and a half later from the image on the left.">
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
            include 'arkansas.js';
        ?>
    </script>
</body>
</html>