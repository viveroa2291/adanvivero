<?php
    session_start();
?>
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
                        <p class="title">Arkansas</p>
                        <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="arkansas-top-section" id="top">
            <h2 class="arkansas-header">Arkansas</h2>
        </section>
        <section class="section-selection">
            <div class="year">
                <form action="">
                    <label for="">Filter by Year</label>
                    <br>
                    <select name="arkansas-years" class="year-selector" id="year-selector" onchange="yearSelected()">
                        <option value="all">All</option>
                        <option value="2012">2012</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2020">2020</option>
                    </select>
                </form>
            </div>
            <div class="arkansas-section">
                <form  action="">
                    <label for="">Choose a section of Arkansas:  </label>
                    <br>
                    <select name="arkansas-areas" class="area-selector" id="area-selector" onchange="sectionSelected()">
                        <option value="all">All</option>
                        <option value="Vandervoort">Vandervoort</option>
                        <option value="Ozark">Ozark</option>
                        <option value="Henderson">Henderson State University</option>
                        <option value="Other">Other</option>
                    </select>
                </form>
            </div>
        </section>
        <section id="about"></section>
        <section id="demo"></section>
        <section class="bottom-section">
            <span><a class="previous-state" href="wisconsin.php">&#60;</a></span>
            <p class="other-states"><b>Check out the other states</b></p>
            <span><a class="next-state" href="california.php">&#62;</a></span>
        </section>
        <section class="top" >
             <a href="#top"><b>TOP</b></a>
        </section>
        <div id="myModal" class="modal">
            <span class="close" style="font-size: 50px; color: white;">&times;</span>
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
    <?php 
        include_once 'footer.php';
    ?> 
    <script>
        <?php 
            include 'arkansas.js';
        ?>
    </script>
</body>
</html>