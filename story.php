<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/story.css';
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
                        <p class="title">Story Page</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <p>This is the world's most complex boardgame</p>

        <h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="states-images/california-images/city.jpeg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="states-images/california-images/disneyland-jon.jpeg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="states-images/california-images/disneyland-jon.jpeg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="states-images/california-images/disneyland-kristin.jpeg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="states-images/california-images/downtown.jpeg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="states-images/california-images/huntington-holly.jpeg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="states-images/california-images/city.jpeg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="states-images/california-images/disneyland-jon.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="states-images/california-images/disneyland-jon2.jpeg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="states-images/california-images/disneyland-kristin.jpeg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="states-images/california-images/downtown.jpeg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="states-images/california-images/huntington-holly.jpeg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
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
    let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</html>