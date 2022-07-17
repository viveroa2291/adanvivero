<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Georgia Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/georgia.css';
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
                        <p class="title">Georgia</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="georgia-top-section">
            <h2 class="georgia-header">Georgia</h2>
        </section>
        <section>
            <h3 class="body-headers">Atlanta</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Atlanda</div>
                        <img class="georgia-images" src="states-images/georgia-images/atlanta.jpeg" alt="This is a picture of me in downtown Atlanta. I really liked the city and what it had to offer.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me in downtown Atlanta. I really liked the city <br> and what it had to offer.</p>
                        <p class="card-text"><small class="text-muted">May 06, 2018</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Downtown Atlanta</div>
                        <img class="georgia-images" src="states-images/georgia-images/atlanta2.jpeg" alt="This is the picture of me in downtown Atlanta.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of me in downtown Atlanta.</p>
                            <p class="card-text"><small class="text-muted">May 06, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">CNN</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-3 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">CNN Building</div> 
                        <img class="georgia-images" src="states-images/georgia-images/cnn.jpeg" alt="This is a picture of me standing outside of the CNN building next to the sign.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of me standing outside of the CNN building next <br> to the sign.</p>
                            <p class="card-text"><small class="text-muted">May 06, 2018</small></p>
                        </div>
                    </div>
                    <div class="card m-3 mx-sm-auto" id="cardBody">
                <div class="card-header text-center" id="featureTitle">Inside CNN</div>
                    <img class="georgia-images" src="states-images/georgia-images/cnn2.jpeg" alt="This is a selfie of me inside of the CNN building next to an anchor's chair and table where the news is reported.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is a selfie of me inside of the CNN building next to an <br> anchor's chair and table where the news is reported.</p>
                    <p class="card-text"><small class="text-muted">May 06, 2018</small></p>
                </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">World of Coca-Cola</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Inside the World of Coca-Cola</div> 
                        <img class="georgia-images" src="states-images/georgia-images/coca-cola.jpeg" alt="This is a picture of me sitting on a couch enjoying a coke drink inside the World of Coca-Cola located in Atlanta.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of me sitting on a couch enjoying a coke drink inside <br> the World of Coca-Cola located in Atlanta.</p>
                            <p class="card-text"><small class="text-muted">May 06, 2018</small></p>
                        </div>
                    </div>
                    <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Inside the World of Coca-Cola</div>
                        <img class="georgia-images" src="states-images/georgia-images/coca-cola3.jpeg" alt="This is a picture of me inside of the World of Coca-Cola. I thought this looked cool.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is a picture of me inside of the World of Coca-Cola. I thought <br> this looked cool.</p>
                    <p class="card-text"><small class="text-muted">May 06, 2018</small></p>
                </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Outside of the World of Coca-Cola</div>
                        <img class="georgia-images" src="states-images/georgia-images/coca-cola2.jpeg" alt="This is an image of me jumping outside of the World of Coca Cola sign.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me jumping outside <br> of the World of Coca Cola sign.</p>
                            <p class="card-text"><small class="text-muted">May 06, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Other Georgia</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Airport</div> 
                        <img class="georgia-images" src="states-images/georgia-images/airport.jpeg" alt="This is a picture of my sister's national team for gymnastics. She is part of the special olympics and I was there to help coach the boys. We took a group picture in the airport and I believe this airport ranks in the United States for being one of the biggest airports in the United States.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of my sister's national team for gymnastics. She is <br> part of the special olympics and I was there to help coach the boys. <br> We took a group picture in the airport and I believe this airport ranks <br> in the United States for being one of the biggest airports in the <br> United States.</p>
                            <p class="card-text"><small class="text-muted">May 04, 2018</small></p>
                        </div>
                    </div>
                    <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Marietta Diner</div>
                        <img class="georgia-images" src="states-images/georgia-images/dinner.jpeg" alt="This is a picture of me standing outside of the Marietta Diner which was where we ate for dinner.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is a picture of me standing outside of the Marietta Diner <br> which was where we ate for dinner.</p>
                    <p class="card-text"><small class="text-muted">May 04, 2018</small></p>
                </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Mirror Picture</div>
                        <img class="georgia-images" src="states-images/georgia-images/pool.jpeg" alt="This is a mirror picture of me in the hotel.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a mirror picture of me in the hotel.</p>
                            <p class="card-text"><small class="text-muted">May 04, 2018</small></p>
                        </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Mirror Picture</div>
                        <img class="georgia-images" src="states-images/georgia-images/hotel.jpeg" alt="This is a mirror picture of me in the hotel.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a mirror picture of me in the hotel.</p>
                            <p class="card-text"><small class="text-muted">May 06, 2018</small></p>
                        </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/georgia-images/atlanta.jpeg" onclick="image(1)" alt="This is a picture of me in downtown Atlanta. I really liked the city and what it had to offer.">
                    <img class="box-image" src="states-images/georgia-images/atlanta2.jpeg" onclick="image(2)" alt="This is the picture of me in downtown Atlanta.">
                    <img class="box-image" src="states-images/georgia-images/cnn.jpeg" onclick="image(3)" alt="This is a picture of me standing outside of the CNN building next to the sign.">
                    <img class="box-image" src="states-images/georgia-images/cnn2.jpeg" onclick="image(4)" alt="This is a selfie of me inside of the CNN building next to an anchor's chair and table where the news is reported.">
                    <img class="box-image" src="states-images/georgia-images/coca-cola.jpeg" onclick="image(5)" alt="This is a picture of me sitting on a couch enjoying a coke drink inside the World of Coca-Cola located in Atlanta.">
                    <img class="box-image" src="states-images/georgia-images/coca-cola3.jpeg" onclick="image(6)" alt="This is a picture of me inside of the World of Coca-Cola. I thought this looked cool.">
                    <img class="box-image" src="states-images/georgia-images/coca-cola2.jpeg" onclick="image(7)" alt="This is an image of me jumping outside of the World of Coca Cola sign.">
                    <img class="box-image" src="states-images/georgia-images/airport.jpeg" onclick="image(8)" alt="This is a picture of my sister's national team for gymnastics. She is part of the special olympics and I was there to help coach the boys. We took a group picture in the airport and I believe this airport ranks in the United States for being one of the biggest airports in the United States.">
                    <img class="box-image" src="states-images/georgia-images/dinner.jpeg" onclick="image(9)" alt="This is a picture of me standing outside of the Marietta Diner which was where we ate for dinner.">
                    <img class="box-image" src="states-images/georgia-images/pool.jpeg" onclick="image(10)" alt="This is a mirror picture of me in the hotel.">
                    <img class="box-image" src="states-images/georgia-images/hotel.jpeg" onclick="image(11)" alt="This is a mirror picture of me in the hotel.">
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
        include 'georgia.js';
    ?>
</script>
</body>
</html>