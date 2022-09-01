<?php session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'Home');

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $comment = isset($_POST['comment']) ? $_POST['comment'] : ''; 

    $name_error = '';
    $comment_error = '';

    if (count($_POST)) {
        $errors = 0;

        if($name == '')
        {
            $errors ++;
            $name_error = 'Please enter a name';
        }
        if($comment == '')
        {
            $errors ++;
            $comment_error = 'Please enter a comment';
        }
        if($errors == 0)
        {
            $query = 'INSERT INTO Comment (name, comments) VALUES ("'.addslashes($name).'", "'.addslashes($comment).'")';

            $message = 'You have received a new comment on your home page: 
            Name: '.$name.'
            Comment: '.$comment;
            
            mail('adxadan@gmail.com', 'Comment submitted', $commment);
                
            mysqli_query($connect, $query);
            header('Location: index.php');
            die();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!--
    <link rel="stylesheet" href="bootstrap.bundle.min.js/bootstrap.bundle.js">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/home.css" type="text/css">
    <link rel="stylesheet" href="CSS/styles.css">
    -->
    <style>
        <?php 
        include 'bootstrap.bundle.min.js/bootstrap.bundle.js';
        include 'CSS/bootstrap.min.css';
        include 'CSS/home.css';
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
                                    echo "<a class='nav-link text-white top-link logout' href='includes/logout.inc.php'>Log Out</a>";
                                }
                                else {
                                    echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                                    echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                                }
                            ?>
                            <p class="title">Home Page</p>   
                            <p class="slash">/</p>
                    </div>
                </div>
            </div>
        </nav>
        <?php session_start();
            if(isset($_SESSION["useruid"])) {
                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
        ?>
    </header>
    <main>
        <div class="containers">
            <section class="left-side">
                <div class="left-details">
                    <h2 class="helloWorld">Guide</h2>
                    <hr></hr>
                    <p class="left-side-description">This website was created by me using HTML, CSS, Javascript, and PHP where it provides information about myself for you guys to get to know a little bit about me and where I come from along with my interests.</p>
                    <p class="left-side-description">The page that you are currently on is the <a href="index.php" class="home-links">Home</a> page where it serves as a guide and provides a concise timeline of my life and my most memorable moments on the right. The center provides a glimpse and insight of what the website is about.</p>
                    <p class="left-side-description">Down below on the footer are a variety of links that include links to my social media and links that can also be found on the top navigation. I plan to include a spanish version on the footer where it can provide a Spanish version of the site to expand beyond realms.</p>
                    <p class="left-side-description">You can also find a more in depth link to my social media and to get in further contact with me on the on the <a class="home-links" href="contact.php">Contact</a> link.</p>
                    <p class="left-side-description">On the top and bottom navigation bar you can find the <a href="about.php" class="home-links">About</a>, <a href="story.php" class="home-links">Story</a>, <a href="travel.php" class="home-links">Travel</a>, <a href="contact.php" class="home-links">Contact</a>, and <a href="projects.php" class="home-links">Projects</a> links.</p>
                </div>
                <div class="left-details">
                    <h4 class="helloWorld">Leave a comment</h4>
                    <hr>
                    <form method="post">
                        <label for="name">Enter Name: </label> <?php echo '<b style="color: red;">'.$name_error; echo '</b>' ?>
                        <br>
                        <input type="text" name="name" value="<?php echo $name; ?>"> <br>
                        
                        <label for="comment">Comment: </label> <?php echo '<b style="color: red;">'.$comment_error; echo '</b >' ?>
                        <br>
                        <textarea class="comment-section" name="comment" id="" cols="30" rows="10" <?php echo $comment; ?>></textarea>
                        
                        <br>
                        <input class="submit-button" type="submit" value="Submit">
                    </form>
                </div>
            </section>
            <section class="main-side">
                    <div class="main-details">
                        <div class="previous-area">
                            <button id="previous-button">&#8249;</button> 
                        </div>
                        <div class="middle-area">                        
                            <a href="" class="header" id="header"></a>
                            <img src="" class="main-image" id="main-image" alt="main-picture">
                            <hr>
                        </div>
                        <div class="next-area">
                            <button id="next-button">&#8250;</button>
                        </div>
                    </div> 
                    <p id="descriptionBody" class="description-body"></p>
                    <div class="dots-wrapper">
                        <span class="dot" onclick="dots(0)"></span>
                        <span class="dot" onclick="dots(1)"></span>
                        <span class="dot" onclick="dots(2)"></span>
                        <span class="dot" onclick="dots(3)"></span>
                        <span class="dot" onclick="dots(4)"></span>
                        <span class="dot" onclick="dots(5)"></span>
                    </div>
            </section>
            <section class="right-side">
                <div class="right-details">
                    <h3 class="timeline">Timeline</h3>
                    <hr></hr>
                    <h4 class="timeline-header">May 2022 <br> <p class="timeline-under-header">University of Wisconsin-Eau Claire</p></h4>
                    <img class="timeline-images" src="images/graduation.jpeg" alt="University of Wisconsin-Eau Claire graduation picture">
                    <p class="timeline-description">Graduated from the University of Wisconsin of Eau Claire with a Bachelors of Science with a Degree in Computer Science. Take a look at the <a href="about.php" class="home-links">About</a> page for more details.</p>
                    <h4 class="timeline-header">June 2016 <br> <p class="timeline-under-header">Prospect High School</p></h4>
                    <img class="prospect-image" src="images/prospect.jpeg" alt="Prospect High School graduation picture">
                    <p class="timeline-description">Graduated from Prospect High School with a 2.78 GPA. Take a look at the <a href="about.php" class="home-links">About</a> page for more details.</p>
                    <p class="timeline-description">On the top navigation bar, you can find the <a href="about.php" class="home-links">About</a>, <a href="story.php" class="home-links">Story</a>, <a href="contact.php" class="home-links">Contact</a>, and <a href="projects.php" class="home-links">Projects</a> links.</p>
                </div>
                <div class="right-details">
                    <h3 class="timeline">Comment Section</h3>
                    <hr>
                    <?php 
                        $connect = mysqli_connect('localhost', 'root', '', 'Home'); 

                        $query = 'SELECT name, comments, date FROM Comment';
                        $result = mysqli_query($connect, $query);

                        while($record = mysqli_fetch_assoc($result )) 
                        {
                            echo '<div class="display-comments">';
                            echo '<p class="name"><b>'.$record['name'].'</b><span class="date">'.$record['date'].'</span></p>';
                            echo '<p class="comment">'.$record['comments'].'</p>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </section>
        </div>
    </main>
    <?php 
        include_once 'footer.php';
    ?>
    <script>
        <?php
            include 'home.js';
        ?>
    </script>
</body>
</html>