<?php session_start();
    $connect = mysqli_connect('localhost', 'root', '', 'Home');

    if(isset($_SESSION["username"])) {
        $name = $_SESSION["username"];
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
    } 
    else 
    {
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
                                echo "<div class='profile'>
                                      <a class='nav-link text-white top-link profile' href='profile.php'>Profile page</a>
                                          <div class='bg-dark settings'> 
                                            <a class='text-white settings-link' href='settings.php'>Settings</a> <br>
                                            <a class='text-white tos-link' href='tos.php'>Terms of Service</a> <br>
                                            <a class='text-white friends-link' href='friends.php'>Friends</a> <br>
                                          </div>
                                      </div>";
                               echo "<a class='nav-link text-white top-link logout' href='includes/logout.inc.php'>Log Out</a>";
                           }
                           else {
                               echo "<a class='nav-link text-white top-link signup' href='signup.php'>Sign Up</a>";
                               echo "<a class='nav-link text-white top-link login' href='login.php'>Log In</a>";
                               echo "<p class='title'>Travel Page</p>";
                           }
                        ?>
                            <p class="title">Home Page</p>   
                            <p class="slash">|</p>
                    </div>
                </div>
            </div>
        </nav>
        <?php session_start();
        if(isset($_SESSION["username"])) {
            echo "<p class='welcome-message'>Welcome " . $_SESSION["username"] . "</p>";
        } 
        /*
        session_start();
            if(isset($_SESSION["useruid"])) {
                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
            }
        */
        ?>
    </header>
    <main>
        <section class="index-top-section">
            <h2 class="index-header">Welcome</h2>
        </section>
        <section class="welcome">
            <div class="welcome-header">
                <h2>Welcome To My Website</h2>
                <hr class="header-hr">
            </div>
            <div class="index-welcome">
                <p>Big welcome to my website. My plans for this website keeps changing the more I put on here. Initially, I thought about making a website all about me, but as I was doing that, I was thinking about expanding it to others. In doing so, I think I have to split it up into a different project to not lose the sole purpose of what this website was intended to be, which is a portfolio site.</p>
                <p>That being said, this is the <a class='home-links' href='index.php'>Home</a> page with a <b><a href="#guide" class="home-links">Guide</a></b> down below this section. The <b><a href="#guide" class="home-links">Guide</a></b> provides an overview about the website of a concise details of each webpage is. </p>
            </div> 
        </section>
        <section class="guide" id="guide">
            <div class="guide-header">
                <h3>Guide</h3>
                <hr class="header-hr">
            </div>
            <div class="index-guide">
                <p class="left-side-description">This website was created by me using HTML, CSS, Javascript, and PHP where it provides information about myself for you guys to get to know a little bit about me and where I come from along with my interests.</p>
                <p class="left-side-description">The page that you are currently on is the <a href="index.php" class="home-links">Home</a> page where it serves as a guide and provides a concise timeline of my life and my most memorable moments.</p>
                <p class="left-side-description">On the top and bottom navigation bar you can find the <a href="about.php" class="home-links">About</a>, <a href="story.php" class="home-links">Story</a>, <a href="travel.php" class="home-links">Travel</a>, <a href="contact.php" class="home-links">Contact</a>, and <a href="projects.php" class="home-links">Projects</a> links.</p>                
                <p class="left-side-description">On the other hand, the <b>Timeline</b> is a display of my achievements throughout my life.</p>  
                <p class="left-side-description">I created a comment section where you can leave a comment if you wish to do so.</p>
                <p class="left-side-description">Down below on the <b><a href="#footer" class="top-links">Footer</a></b> are a variety of links that include links to my social media and links that can also be found on the top navigation. I plan to include a Spanish translation on this site where everything can be translated into Spanish.</p>
            </div>
        </section>
        <section class="main-side">
            <div class="sites-header">
                <h3 class="check">Check Out the Other Pages</h3>
                <hr class="header-hr">
            </div>
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
         <section class="comment-section">
                <div class="left-details">
                    <h4 class="helloWorld">Drop a Comment</h4>
                    <hr>
                    <form method="post">
                    <?php
                                if (isset($_SESSION["useruid"])) {
                                    
                                }
                                else {
                                    echo "<label for='name'>Enter Name: </label><b style='color: red;'>$name_error </b> <br>
                    
                                    <input class='enter-name' type='text' name='name' value='$name'> <br>";
                                }
                        ?>
                        <!-- 
                        <label for="name">Enter Name: </label> <?php /* echo '<b style="color: red;">'.$name_error; echo '</b>' */ ?>
                        <br>
                        <input class="enter-name" type="text" name="name" value="<?php /* echo $name; */?>"> <br>
                        -->
                        <label for="comment">Comment: </label> <?php echo '<b style="color: red;">'.$comment_error; echo '</b >' ?>
                        <br>
                        <textarea class="comments" name="comment" id="" cols="50" rows="10" width="1%" <?php echo $comment; ?>></textarea>
                        
                        <br>
                        <input class="submit-button" type="submit" value="Submit">
                    </form>
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
        <!--
       <div class="index-welcome">
                 <h3 class="timeline">About</h3>
                    <hr class="header-hr">
                    <h4 class="timeline-header">May 2022 <br> <p class="timeline-under-header">University of Wisconsin-Eau Claire</p></h4>
                    <img class="timeline-images" src="images/graduation.jpeg" alt="University of Wisconsin-Eau Claire graduation picture">
                    <p class="timeline-description">Graduated from the University of Wisconsin of Eau Claire with a Bachelors of Science with a Degree in Computer Science. Take a look at the <a href="about.php" class="home-links">About</a> page for more details.</p>
        </div>
                    -->
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