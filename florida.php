<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Florida Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/florida.css';
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
                        <p class="title">Florida</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="florida-top-section">
            <h2 class="florida-header">Florida</h2>
        </section>
        <section>
            <h3 class="body-headers">Disneyworld</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Epcot</div>
                        <img id="florida-image" class="florida-images" src="states-images/florida-images/epcot.jpeg" alt="This is a picture of me standing outside of Epcot. I did not have a chance to go into Epcot, but wanted to take a picture since I found the entrance very cool.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me standing outside of <br> Epcot. I did not have a chance to go into <br> Epcot, but wanted to take a picture since <br> I found the entrance very cool.</p>
                        <p class="card-text"><small class="text-muted">March 20, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Walt Disney Statue</div>
                        <img id="florida-image" class="florida-images mid-wide" src="states-images/florida-images/disney.jpeg" alt="This is a picture of a statue of Walt Disney and Mickey Mouse at the Disneyworld Magic Kingdom park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of a statue of Walt Disney <br> and Mickey Mouse at the Disneyworld <br> Magic Kingdom park.</p>
                            <p class="card-text"><small class="text-muted">March 20, 2017</small></p>
                        </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Magic Kingdom Entrance</div>
                        <img id="florida-image" class="florida-images mid-wide" src="states-images/florida-images/disney-family.jpeg" alt="This is a picture of my family and I at the entrance of Disneyworld's Magic Kingdom park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of my family and I at the <br> entrance of Disneyworld's Magic Kingdom <br> park.</p>
                            <p class="card-text"><small class="text-muted">March 20, 2017</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Castle</div> 
                        <img id="florida-image" class="florida-images" src="states-images/florida-images/castle.jpeg" alt="This is a picture of me posing in front of the castle in Disneyworld's Magic Kingdom park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of me posing in front <br> of the castle in Disneyworld's Magic <br> Kingdom park.</p>
                            <p class="card-text"><small class="text-muted">March 20, 2017</small></p>
                        </div>
                    </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Hall of Presidents</div>
                        <img class="florida-images not-wide" src="states-images/florida-images/president.jpeg" alt="This is an image of the outside of the Hall of Presidents display. At the time, we could not enter as they were undergoing changes.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of the outside of the <br> Hall of Presidents display. At the time, <br> we could not enter as they were <br> undergoing changes.</p>
                    <p class="card-text"><small class="text-muted">March 20, 2017</small></p>
                </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Disneyworld</div>
                        <img class="florida-images not-wide" src="states-images/florida-images/disney2.jpeg" alt="This is an image of me taking pictures by the area we were eating.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of me taking pictures <br> by the area we were eating.</p>
                    <p class="card-text"><small class="text-muted">March 20, 2017</small></p>
                </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Universal Studios</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Jurassic Park</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/jurassic.jpeg" alt="This is an image of me looking up at the Jurassic Park sign.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me looking up at <br> the Jurassic Park sign.</p>
                        <p class="card-text"><small class="text-muted">March 22, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">NBC Tonights Show</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/nbc.jpeg" alt="This is an image of me outside of the NBC building after watching a 'Tonight's Show'.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me outside of the <br> NBC building after watching a <br> "Tonight's Show".</p>
                        <p class="card-text"><small class="text-muted">March 22, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Jurassic Park</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/jurassic2.jpeg" alt="This is an image of me looking at the dinosaur acting in shock. I thought the display was very well done and was my favorite park.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me looking at the <br> dinosaur acting in shock. I thought the <br> display was very well done and was <br> my favorite park.</p>
                        <p class="card-text"><small class="text-muted">March 22, 2017</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Hogwarts</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/harrypotter.jpeg" alt="This is a picture of me standing outside of Hogwarts.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of me standing outside of Hogwarts.</p>
                        <p class="card-text"><small class="text-muted">March 22, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Universal Sign</div>
                        <img class="florida-images not-wide" src="states-images/florida-images/universal-sign.jpeg" alt="This is an image of me standing outside of the Universal Studios sign that rotates 360 degrees.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me standing outside of the <br> Universal Studios sign that rotates 360 degrees.</p>
                            <p class="card-text"><small class="text-muted">March 22, 2017</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
            <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Huntington Beach</div>
                        <img class="florida-images not-wide" src="states-images/florida-images/universal.jpeg" alt="This is an image of me taking a look at the view of the Universal Studios park.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of me taking a look at the view of the Universal Studios <br> park.</p>
                            <p class="card-text"><small class="text-muted">March 22, 2017</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Seaworld</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Sea World Lake</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/seaworld2.jpeg" alt="This is an image of me standing by the Seaworld lake of the theme park.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me standing by the <br> Seaworld lake of the theme park.</p>
                        <p class="card-text"><small class="text-muted">March 19, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Penguin Exhibit</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/penguin.jpeg" alt="This is an image of penguins inside a penguin exhibit.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of penguins inside a <br> penguin exhibit.</p>
                        <p class="card-text"><small class="text-muted">March 19, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Penguin Exhibit</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/penguin-me.jpeg" alt="This is an image of me interacting with a penguin from the glass. I thought it was pretty cool that the penguin came up to me and made eye contact.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me interacting with a <br> penguin from the glass. I thought it was <br> pretty cool that the penguin came up to <br> me and made eye contact.</p>
                        <p class="card-text"><small class="text-muted">March 19, 2017</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
            <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Shamu Stadium</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/orca.jpeg" alt="This is an image of an orca swimming around its tank.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of an orca swimming around <br> its tank.</p>
                        <p class="card-text"><small class="text-muted">March 19, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Shamu Stadium</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/orcas-glass.jpeg" alt="This is an image of orcas and their trainers providing information about orcas to the visitors.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of orcas and their trainers <br> providing information about orcas to the <br> visitors.</p>
                        <p class="card-text"><small class="text-muted">March 19, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Seaworld</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/seaworld-green.jpeg" alt="This is an image of me in an unknown area of Seaworld's park. It was pretty empty but had nice theming and was surrounded with a lot colorful flowers.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me in an unknown area <br> of Seaworld's park. It was pretty empty but <br> had nice theming and was surrounded with <br> a lot colorful flowers.</p>
                        <p class="card-text"><small class="text-muted">March 21, 2017</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
            <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Seaworld Sign</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/seaworld.jpeg" alt="This is an image of me sitting by the Seaworld sign.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me sitting by the <br> Seaworld sign.</p>
                        <p class="card-text"><small class="text-muted">March 21, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Fish</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/fish.jpeg" alt="This is a picture of a fish that I took at Seaworld.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a picture of a fish that I took at <br> Seaworld.</p>
                        <p class="card-text"><small class="text-muted">March 23, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Seahorses</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/seahorses.jpeg" alt="This is an picture of seahorses that I took at Seaworld.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an picture of seahorses that I took <br> at Seaworld.</p>
                        <p class="card-text"><small class="text-muted">March 23, 2017</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Other Florida</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Hotel</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/hotel.jpeg" alt="This is an image of me standing outside of my hotel.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me standing outside <br> of my hotel.</p>
                        <p class="card-text"><small class="text-muted">March 19, 2017</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Penguin Exhibit</div>
                    <img class="florida-images not-wide" src="states-images/florida-images/bathroom.jpeg" alt="This is a bathroom picture that I took in the bathroom of the hotel I was staying at.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a bathroom picture that I took <br> in the bathroom of the hotel I was staying at.</p>
                        <p class="card-text"><small class="text-muted">March 23, 2017</small></p>
                    </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/florida-images/epcot.jpeg" onclick="image(1)" alt="This is a picture of me standing outside of Epcot. I did not have a chance to go into Epcot, but wanted to take a picture since I found the entrance very cool.">
                    <img class="box-image" src="states-images/florida-images/disney.jpeg" onclick="image(2)" alt="This is a picture of a statue of Walt Disney and Mickey Mouse at the Disneyworld Magic Kingdom park.">
                    <img class="box-image" src="states-images/florida-images/disney-family.jpeg" onclick="image(3)" alt="This is a picture of my family and I at the entrance of Disneyworld's Magic Kingdom park.">
                    <img class="box-image" src="states-images/florida-images/castle.jpeg" onclick="image(4)" alt="This is a picture of me posing in front of the castle in Disneyworld's Magic Kingdom park.">
                    <img class="box-image" src="states-images/florida-images/president.jpeg" onclick="image(5)" alt="This is an image of the outside of the Hall of Presidents display. At the time, we could not enter as they were undergoing changes.">
                    <img class="box-image" src="states-images/florida-images/disney2.jpeg" onclick="image(6)" alt="This is an image of me taking pictures by the area we were eating.">
                    <img class="box-image" src="states-images/florida-images/jurassic.jpeg" onclick="image(7)" alt="This is an image of me looking up at the Jurassic Park sign."> 
                    <img class="box-image" src="states-images/florida-images/nbc.jpeg" onclick="image(8)" alt="This is an image of me outside of the NBC building after watching a 'Tonight's Show'.">
                    <img class="box-image" src="states-images/florida-images/jurassic2.jpeg" onclick="image(9)" alt="This is an image of me looking at the dinosaur acting in shock. I thought the display was very well done and was my favorite park.">                   
                    <img class="box-image" src="states-images/florida-images/harrypotter.jpeg" onclick="image(10)" alt="This is a picture of me standing outside of Hogwarts.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/florida-images/universal-sign.jpeg" onclick="image(11)" alt="This is an image of me standing outside of the Universal Studios sign that rotates 360 degrees.">
                    <img class="box-image" src="states-images/florida-images/universal.jpeg" onclick="image(12)" alt="This is an image of me taking a look at the view of the Universal Studios park.">
                    <img class="box-image" src="states-images/florida-images/seaworld2.jpeg" onclick="image(13)" alt="This is an image of me standing by the Seaworld lake of the theme park.">
                    <img class="box-image" src="states-images/florida-images/penguin.jpeg" onclick="image(14)" alt="This is an image of penguins inside a penguin exhibit.">
                    <img class="box-image" src="states-images/florida-images/penguin-me.jpeg" onclick="image(15)" alt="This is an image of me interacting with a penguin from the glass. I thought it was pretty cool that the penguin came up to me and made eye contact.">
                    <img class="box-image" src="states-images/florida-images/orca.jpeg" onclick="image(16)" alt="This is an image of an orca swimming around its tank.">
                    <img class="box-image" src="states-images/florida-images/orcas-glass.jpeg" onclick="image(17)" alt="This is an image of orcas and their trainers providing information about orcas to the visitors.">
                    <img class="box-image" src="states-images/florida-images/seaworld-green.jpeg" onclick="image(18)" alt="This is an image of me in an unknown area of Seaworld's park. It was pretty empty but had nice theming and was surrounded with a lot colorful flowers.">
                    <img class="box-image" src="states-images/florida-images/seaworld.jpeg" onclick="image(19)" alt="This is an image of me sitting by the Seaworld sign.">
                    <img class="box-image" src="states-images/florida-images/fish.jpeg" onclick="image(20)" alt="This is a picture of a fish that I took at Seaworld.">
            </div>
            <div class="row">
                    <img class="box-image" src="states-images/florida-images/seahorses.jpeg" onclick="image(21)" alt="This is an picture of seahorses that I took at Seaworld.">
                    <img class="box-image" src="states-images/florida-images/hotel.jpeg" onclick="image(22)" alt="This is an image of me standing outside of my hotel.">
                    <img class="box-image" src="states-images/florida-images/bathroom.jpeg" onclick="image(23)" alt="This is a bathroom picture that I took in the bathroom of the hotel I was staying at.">
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
            include 'florida.js';
        ?>
    </script>
</body>
</html>