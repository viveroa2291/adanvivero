<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michigan Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/michigan.css';
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
                        <p class="title">Michigan</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="michigan-top-section">
            <h2 class="michigan-header">Michigan</h2>
        </section>
        <section>
            <h3 class="body-headers">Sawyer (The Dunes)</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/sami.jpeg" alt="This is the picture of my friend Sami and I sitting on a tree at The Dunes in Sawyer Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friend Sami and I <br> sitting on a tree at The Dunes in Sawyer <br> Michigan.</p>
                            <p class="card-text"><small class="text-muted">July 14, 2019</small></p>
                        </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/nicole.jpeg" alt="This is the picture of my friend Nicole and I sitting on a tree at The Dunes in Sawyer Michigan.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is the picture of my friend Nicole and I <br> sitting on a tree at The Dunes in Sawyer <br> Michigan.</p>
                        <p class="card-text"><small class="text-muted">July 14, 2019</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/sami2.jpeg" alt="This is the picture of my friend Sami and I in the clean mud of The Dunes in Sawyer Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friend Sami and I <br> in the clean mud of The Dunes in Sawyer <br> Michigan.</p>
                            <p class="card-text"><small class="text-muted">July 14, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Clean mud of The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/nicole-sami.jpeg" alt="This is the picture of my friends Nicole and Sami in the clean mud of The Dunes in Sawyer Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Nicole and Sami in the clean mud of <br> The Dunes in Sawyer Michigan.</p>
                            <p class="card-text"><small class="text-muted">July 14, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Beach of the Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/gabi-nora.jpeg" alt="This is the picture of my friends Gabi and Nora at the beach in Sawyer Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Gabi and Nora at the beach in <br> Sawyer Michigan.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Beach of the Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/sawyer2.jpeg" alt="This is the picture of my friends Alex, Kaitlin, Gabi, and Nora at the beach in Sawyer Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Alex, Kaitlin, Gabi, and Nora <br> at the beach in Sawyer Michigan.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/alex.jpeg" alt="This is the picture of my friend Alex and I sitting on a tree at the Dunes.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friend Alex and I sitting on a tree at the Dunes.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/kaitlin-alex.jpeg" alt="This is the picture of my friends Alex, Kaitlin, and I sitting on a tree at the Dunes covered in clean mud.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Alex, Kaitlin, and I sitting on a <br> tree at the Dunes covered in clean mud.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/sawyer.jpeg" alt="This is a group picture of my friends and I sitting on a tree at The Dunes.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a group picture of my friends and I sitting on a tree at <br> The Dunes.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Clean Mud</div>
                        <img class="michigan-images" src="states-images/michigan-images/alex2.jpeg" alt="This is a selfie taken by me of my friend Alex and I covered in clean mud at The Dunes.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a selfie taken by me of my friend <br> Alex and I covered in clean mud at <br> The Dunes.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Lake Michigan Beach (Friends Lakehouse)</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Lake Michigan Beach</div> 
                        <img class="michigan-images" src="states-images/michigan-images/nikki.jpeg" alt="This is a picture of my friend Nikki and I at Lake Michigan Beach on the Fourth of July.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of my friend Nikki and I <br> at Lake Michigan Beach on the Fourth <br> of July.</p>
                            <p class="card-text"><small class="text-muted">July 4, 2020</small></p>
                        </div>
                    </div>
                    <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Lake Michigan Beach</div>
                        <img class="michigan-images" src="states-images/michigan-images/nikki-chloe.jpeg" alt="This is an image of my friends Nikki, Chloe, and I at Lake Michigan Beach on the Fourth of July.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of my friends Nikki, Chloe, <br> and I at Lake Michigan Beach on the <br> Fourth of July.</p>
                    <p class="card-text"><small class="text-muted">July 4, 2020</small></p>
                </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Lake Michigan Beach</div>
                        <img class="michigan-images" src="states-images/michigan-images/nikki2.jpeg" alt="This is an image of my friends Nikki and I at Lake Michigan Beach on the Fourth of July.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of my friends Nikki and I <br> at Lake Michigan Beach on the Fourth <br> of July.</p>
                    <p class="card-text"><small class="text-muted">July 4, 2020</small></p>
                </div>
                </div> 
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Fireworks</div>
                        <img class="michigan-images" src="states-images/michigan-images/fireworks.jpeg" alt="This is an image of my friends Nikki, Chloe, and I blowing up fireworks outside on the Fourth of July.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friends Nikki, Chloe, <br> and I blowing up fireworks outside on the <br> Fourth of July.</p>
                            <p class="card-text"><small class="text-muted">July 4, 2020</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Wakefield</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cabin</div>
                    <img class="michigan-images" src="states-images/michigan-images/cabin.jpeg" alt="This is an image of me sitting inside my cabin before skiing.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me sitting inside my <br> cabin before skiing.</p>
                        <p class="card-text"><small class="text-muted">January 22, 2022</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                    <img class="michigan-images" src="states-images/michigan-images/wakefield3.jpeg" alt="This is an image of me skiing in Wakefield Michigan.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me skiing in Wakefield <br> Michigan.</p>
                        <p class="card-text"><small class="text-muted">January 22, 2022</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                    <img class="michigan-images" src="states-images/michigan-images/ski.jpeg" alt="This is an image of where I was skiing in Wakefield Michigan.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of where I was skiing in Wakefield Michigan.</p>
                        <p class="card-text"><small class="text-muted">January 22, 2022</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                        <img class="michigan-images" src="states-images/michigan-images/wakefield4.jpeg" alt="This is a selfie of me skiing in Wakefield Michigan after I fell and had snow all over my face.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a selfie of me skiing in Wakefield Michigan after I fell <br> and had snow all over my face.</p>
                            <p class="card-text"><small class="text-muted">January 22, 2022</small></p>
                        </div>
                </div>                
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                    <img class="michigan-images" src="states-images/michigan-images/wakefield.jpeg" alt="This is a selfie of me skiing in Wakefield Michigan.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a selfie of me skiing in Wakefield Michigan.</p>
                        <p class="card-text"><small class="text-muted">January 23, 2022</small></p>
                    </div>
                </div>
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                        <img class="michigan-images" src="states-images/michigan-images/wakefield2.jpeg" alt="This is a selfie of me skiing in Wakefield Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a selfie of me skiing in Wakefield Michigan.</p>
                            <p class="card-text"><small class="text-muted">January 23, 2022</small></p>
                        </div>
                </div>                
            </div>
        </section>
        <section>
            <h3 class="body-headers">Detroit</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5 mx-sm-auto" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">German Event</div>
                    <img class="michigan-images" src="states-images/michigan-images/me.jpeg" alt="This is an image of me sitting inside a bus on a way to a German event.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me sitting inside <br> a bus on a way to a German event.</p>
                        <p class="card-text"><small class="text-muted">August 31, 2013</small></p>
                    </div>
                </div>
            </div>
        </section>
        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
            <div class="row">
                    <img class="box-image" src="states-images/michigan-images/sami.jpeg" onclick="image(1)" alt="This is the picture of my friend Sami and I sitting on a tree at The Dunes in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/nicole.jpeg" onclick="image(2)" alt="This is the picture of my friend Nicole and I sitting on a tree at The Dunes in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/sami2.jpeg" onclick="image(3)" alt="This is the picture of my friend Sami and I in the clean mud of The Dunes in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/nicole-sami.jpeg" onclick="image(4)" alt="This is the picture of my friends Nicole and Sami in the clean mud of The Dunes in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/gabi-nora.jpeg" onclick="image(5)" alt="This is the picture of my friends Gabi and Nora at the beach in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/sawyer2.jpeg" onclick="image(6)" alt="This is the picture of my friends Alex, Kaitlin, Gabi, and Nora at the beach in Sawyer Michigan.">
                    <img class="box-image" src="states-images/michigan-images/alex.jpeg" onclick="image(7)" alt="This is the picture of my friend Alex and I sitting on a tree at the Dunes.">
                    <img class="box-image" src="states-images/michigan-images/kaitlin-alex.jpeg" onclick="image(8)" alt="This is the picture of my friends Alex, Kaitlin, and I sitting on a tree at the Dunes covered in clean mud.">
                    <img class="box-image" src="states-images/michigan-images/sawyer.jpeg" onclick="image(9)" alt="This is a group picture of my friends and I sitting on a tree at The Dunes.">
                    <img class="box-image" src="states-images/michigan-images/alex2.jpeg" onclick="image(10)" alt="This is a selfie taken by me of my friend Alex and I covered in clean mud at The Dunes.">
            </div>        
            <div class="row">
                    <img class="box-image" src="states-images/michigan-images/nikki.jpeg" onclick="image(11)" alt="This is a picture of my friend Nikki and I at Lake Michigan Beach on the Fourth of July.">
                    <img class="box-image" src="states-images/michigan-images/nikki-chloe.jpeg" onclick="image(12)" alt="This is an image of my friends Nikki, Chloe, and I at Lake Michigan Beach on the Fourth of July.">
                    <img class="box-image" src="states-images/michigan-images/nikki2.jpeg" onclick="image(13)" alt="This is an image of my friends Nikki and I at Lake Michigan Beach on the Fourth of July.">
                    <img class="box-image" src="states-images/michigan-images/fireworks.jpeg" onclick="image(14)" alt="This is an image of my friends Nikki, Chloe, and I blowing up fireworks outside on the Fourth of July.">
                    <img class="box-image" src="states-images/michigan-images/cabin.jpeg" onclick="image(15)" alt="This is an image of me sitting inside my cabin before skiing.">
                    <img class="box-image" src="states-images/michigan-images/wakefield3.jpeg" onclick="image(16)" alt="This is an image of me skiing in Wakefield Michigan.">
                    <img class="box-image" src="states-images/michigan-images/ski.jpeg" onclick="image(17)" alt="This is an image of where I was skiing in Wakefield Michigan.">
                    <img class="box-image" src="states-images/michigan-images/wakefield4.jpeg" onclick="image(18)" alt="This is a selfie of me skiing in Wakefield Michigan after I fell and had snow all over my face.">
                    <img class="box-image" src="states-images/michigan-images/wakefield.jpeg" onclick="image(19)" alt="This is a selfie of me skiing in Wakefield Michigan.">
                    <img class="box-image" src="states-images/michigan-images/wakefield2.jpeg" onclick="image(20)" alt="This is a selfie of me skiing in Wakefield Michigan.">
                    <img class="box-image" src="states-images/michigan-images/me.jpeg" onclick="image(21)" alt="This is an image of me sitting inside a bus on a way to a German event.">
            </div>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
<script>
    <?php 
        include 'michigan.js';
    ?>
</script>
</body>
</html>