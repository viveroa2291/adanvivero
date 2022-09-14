<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/contact.css';
        include 'CSS/styles.css';
         ?>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
  <!-- 
      Don't work
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src='https://fontawesome.com/v5.15/icons/phone-alt?style=solid' crossorigin='anonymous'></script>      
   -->  
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
                        <p class="title">Contacts Page</p>
                        <p class="slash">|</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!--
        <h1 style="text-align: center;">Contact & Social Media information:</h1>
        <hr>
    <div id="mainBody">
        <div>
            <img src="images/doorCountyBoat.jpeg" alt=""></img> 
        </div>
        <div>
            <p><a href="https://www.facebook.com/adan.vivero97/" class="fa fa-facebook contact-facebook"></a>Facebook: <a href="https://www.facebook.com/adan.vivero97/">https://www.facebook.com/adan.vivero97/</a></p>
            <div class="social-media-body">
                <svg class="facebook-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0000ff" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
                <a href="https://www.facebook.com/adan.vivero97/" class="facebook-text">Facebook - Adan Vivero</a>
            </div>
            <p><a href="https://www.instagram.com/adxadan/" class="fa fa-instagram contact-instagram"></a>Instagram: <a href="https://www.instagram.com/adxadan/">adxadan</a></p>
            <p class="instagram"><a href="https://www.instagram.com/adxadan/" class="fa fa-instagram instagram"></a></p>
            <p><a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost contact-snapchat"></a>Snapchat: adx305</p>
            <div class="social-media-body">
                <svg class="snapchat-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FFFF00" class="bi bi-snapchat" viewBox="0 0 16 16">
                    <path d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z"/>
                </svg>            
                <a href="" class="snapchat snapchat-text">Snapchat - adx305</a>
            </div>
            <p><a href="https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg" class="fa fa-youtube contact-youtube"></a>YouTube: <a href="https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg">https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg</a></p>
            <p><a href="https://www.linkedin.com/in/adan-vivero-a93970156/" class="fa fa-linkedin contact-linkedin"></a>LinkedIn: <a href="https://www.linkedin.com/in/adan-vivero-a93970156/">https://www.linkedin.com/in/adan-vivero-a93970156/</a></p>
            <p><i class="fa fa-stack-overflow contact-stackoverflow"></i>StackOverflow: <a href="https://stackoverflow.com/users/10572727/adan-vivero?tab=profile">https://stackoverflow.com/users/10572727/adan-vivero?tab=profile</a></p>
            <p><i class='fab fa-discord contact-discord'></i> Discord: <a href="https://discord.com/channels/719094259051135027/719094260174946329">https://discord.com/channels/719094259051135027/719094260174946329</a></p>
            <div class="social-media-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0000ff" class="bi bi-discord discord-icon" viewBox="0 0 16 16">
                    <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                </svg>
                <a href="https://discord.com/channels/719094259051135027/719094260174946329" class="discord-text">Discord - adan.vivero#9038</a>
            </div>
            <p><a href="#" class="fa fa-google contact-google"></a> Email: adan.vivero1@gmail.com</p> 
            <p><i class='fas fa-phone' style='font-size:24px; color: gray;'></i>  Phone Number: 224-305-1377</p>
            <div class="social-media-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0000ff" class="bi bi-telegram telegram-icon" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                </svg>
                <a href="" class="telegram-text">Telegram - avivero</a>
            </div>
        </div>
    </div>
                        -->
        <section>
            <div class="picture">
                <img src="images/doorCountyBoat.jpeg" alt="Picture of me">
            </div>
            <h1>Adan Vivero</h1>
            <hr>
            <div class="headers">
                <h3>Full Stack Developer</h3>
                <h3>App Developer</h3>
            </div>
            <div class="business">
                <p>E-mail for all business inquiries</p>
                <p class="fa fa-envelope envelope"> adan.vivero1@gmail.com</p>
            </div>
            <div class="social-media-headers">            
                <p class="contact-stackoverflow"><a href="https://stackoverflow.com/users/10572727/adan-vivero" class="fa fa-stack-overflow a-stack-overflow"></a></p>
                <p class="contact-instagram"><a href="https://www.instagram.com/adxadan/" class="fa fa-instagram a-instagram"></a></p>
                <p class="contact-youtube"><a href="https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg" class="fa fa-youtube a-youtube"></a></p>            
                <p class="contact-github"><a href="https://github.com/viveroa2291" class="fa fa-github a-github"></a></p>            
                <p class="contact-linkedin"><a href="https://www.linkedin.com/in/adan-vivero-a93970156/" class="fa fa-linkedin a-linkedin"></a><a href="https://www.linkedin.com/in/adan-vivero-a93970156/"></a></p>
            </div>
            <div class="social-media-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0000ff" class="bi bi-discord discord-icon" viewBox="0 0 16 16">
                    <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                </svg>
                <a href="https://discord.com/channels/719094259051135027/719094260174946329" class="discord-text">Discord - adan.vivero#9038</a>
            </div>
            <div class="social-media-body">
                <svg class="snapchat-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FFFF00" class="bi bi-snapchat" viewBox="0 0 16 16">
                    <path d="M15.943 11.526c-.111-.303-.323-.465-.564-.599a1.416 1.416 0 0 0-.123-.064l-.219-.111c-.752-.399-1.339-.902-1.746-1.498a3.387 3.387 0 0 1-.3-.531c-.034-.1-.032-.156-.008-.207a.338.338 0 0 1 .097-.1c.129-.086.262-.173.352-.231.162-.104.289-.187.371-.245.309-.216.525-.446.66-.702a1.397 1.397 0 0 0 .069-1.16c-.205-.538-.713-.872-1.329-.872a1.829 1.829 0 0 0-.487.065c.006-.368-.002-.757-.035-1.139-.116-1.344-.587-2.048-1.077-2.61a4.294 4.294 0 0 0-1.095-.881C9.764.216 8.92 0 7.999 0c-.92 0-1.76.216-2.505.641-.412.232-.782.53-1.097.883-.49.562-.96 1.267-1.077 2.61-.033.382-.04.772-.036 1.138a1.83 1.83 0 0 0-.487-.065c-.615 0-1.124.335-1.328.873a1.398 1.398 0 0 0 .067 1.161c.136.256.352.486.66.701.082.058.21.14.371.246l.339.221a.38.38 0 0 1 .109.11c.026.053.027.11-.012.217a3.363 3.363 0 0 1-.295.52c-.398.583-.968 1.077-1.696 1.472-.385.204-.786.34-.955.8-.128.348-.044.743.28 1.075.119.125.257.23.409.31a4.43 4.43 0 0 0 1 .4.66.66 0 0 1 .202.09c.118.104.102.26.259.488.079.118.18.22.296.3.33.229.701.243 1.095.258.355.014.758.03 1.217.18.19.064.389.186.618.328.55.338 1.305.802 2.566.802 1.262 0 2.02-.466 2.576-.806.227-.14.424-.26.609-.321.46-.152.863-.168 1.218-.181.393-.015.764-.03 1.095-.258a1.14 1.14 0 0 0 .336-.368c.114-.192.11-.327.217-.42a.625.625 0 0 1 .19-.087 4.446 4.446 0 0 0 1.014-.404c.16-.087.306-.2.429-.336l.004-.005c.304-.325.38-.709.256-1.047Zm-1.121.602c-.684.378-1.139.337-1.493.565-.3.193-.122.61-.34.76-.269.186-1.061-.012-2.085.326-.845.279-1.384 1.082-2.903 1.082-1.519 0-2.045-.801-2.904-1.084-1.022-.338-1.816-.14-2.084-.325-.218-.15-.041-.568-.341-.761-.354-.228-.809-.187-1.492-.563-.436-.24-.189-.39-.044-.46 2.478-1.199 2.873-3.05 2.89-3.188.022-.166.045-.297-.138-.466-.177-.164-.962-.65-1.18-.802-.36-.252-.52-.503-.402-.812.082-.214.281-.295.49-.295a.93.93 0 0 1 .197.022c.396.086.78.285 1.002.338.027.007.054.01.082.011.118 0 .16-.06.152-.195-.026-.433-.087-1.277-.019-2.066.094-1.084.444-1.622.859-2.097.2-.229 1.137-1.22 2.93-1.22 1.792 0 2.732.987 2.931 1.215.416.475.766 1.013.859 2.098.068.788.009 1.632-.019 2.065-.01.142.034.195.152.195a.35.35 0 0 0 .082-.01c.222-.054.607-.253 1.002-.338a.912.912 0 0 1 .197-.023c.21 0 .409.082.49.295.117.309-.04.56-.401.812-.218.152-1.003.638-1.18.802-.184.169-.16.3-.139.466.018.14.413 1.991 2.89 3.189.147.073.394.222-.041.464Z"/>
                </svg>            
                <a href="" class="snapchat snapchat-text">Snapchat - adx305</a>
            </div>
            <div class="social-media-body">
                <svg class="facebook-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0000ff" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg>
                <a href="https://www.facebook.com/adan.vivero97/" class="facebook-text">Facebook - Adan Vivero</a>
            </div>
            <div class="social-media-body">
                <svg class="tiktok" width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>Tiktok</title>
                    <g class="tiktok" id="Icon/Social/tiktok-black" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M38.0766847,15.8542954 C36.0693906,15.7935177 34.2504839,14.8341149 32.8791434,13.5466056 C32.1316475,12.8317108 31.540171,11.9694126 31.1415066,11.0151329 C30.7426093,10.0603874 30.5453728,9.03391952 30.5619062,8 L24.9731521,8 L24.9731521,28.8295196 C24.9731521,32.3434487 22.8773693,34.4182737 20.2765028,34.4182737 C19.6505623,34.4320127 19.0283477,34.3209362 18.4461858,34.0908659 C17.8640239,33.8612612 17.3337909,33.5175528 16.8862248,33.0797671 C16.4386588,32.6422142 16.0833071,32.1196657 15.8404292,31.5426268 C15.5977841,30.9658208 15.4727358,30.3459348 15.4727358,29.7202272 C15.4727358,29.0940539 15.5977841,28.4746337 15.8404292,27.8978277 C16.0833071,27.3207888 16.4386588,26.7980074 16.8862248,26.3604545 C17.3337909,25.9229017 17.8640239,25.5791933 18.4461858,25.3491229 C19.0283477,25.1192854 19.6505623,25.0084418 20.2765028,25.0219479 C20.7939283,25.0263724 21.3069293,25.1167239 21.794781,25.2902081 L21.794781,19.5985278 C21.2957518,19.4900128 20.7869423,19.436221 20.2765028,19.4380839 C18.2431278,19.4392483 16.2560928,20.0426009 14.5659604,21.1729264 C12.875828,22.303019 11.5587449,23.9090873 10.7814424,25.7878401 C10.003907,27.666593 9.80084889,29.7339663 10.1981162,31.7275214 C10.5953834,33.7217752 11.5748126,35.5530237 13.0129853,36.9904978 C14.4509252,38.4277391 16.2828722,39.4064696 18.277126,39.8028054 C20.2711469,40.1991413 22.3382874,39.9951517 24.2163416,39.2169177 C26.0948616,38.4384508 27.7002312,37.1209021 28.8296253,35.4300711 C29.9592522,33.7397058 30.5619062,31.7522051 30.5619062,29.7188301 L30.5619062,18.8324027 C32.7275484,20.3418321 35.3149087,21.0404263 38.0766847,21.0867664 L38.0766847,15.8542954 Z" id="Fill-1" fill="#000000"></path>
                    </g>
                </svg>
                <a href="https://www.tiktok.com/@adxadan" class="tiktok-text">TikTok - adxadan</a>
            </div>
            <div class="social-media-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#0000ff" class="bi bi-telegram telegram-icon" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                </svg>
                <a href="" class="telegram-text">Telegram - avivero</a>
            </div>
            <!---
            <div class="social-media-body">
                <svg class="vsco-icon" xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#ffffff" viewBox="0 0 32 32"> 
                    <path d="M16 0c-8.833 0-16 7.167-16 16s7.167 16 16 16c8.833 0 16-7.167 16-16s-7.167-16-16-16zM31.359 16c0 0.542-0.031 1.057-0.094 1.568l-2.724-0.318c0.036-0.417 0.068-0.833 0.068-1.25 0-0.385-0.031-0.802-0.068-1.182l2.724-0.323c0.094 0.516 0.094 0.995 0.094 1.505zM0.641 16c0-0.51 0.031-1.026 0.063-1.536l2.719 0.323c-0.031 0.411-0.063 0.797-0.063 1.214s0.031 0.802 0.063 1.214l-2.719 0.323c-0.063-0.51-0.063-1.026-0.063-1.536zM27.932 11.87l2.563-0.958c0.354 0.958 0.578 1.953 0.74 2.974l-2.724 0.323c-0.13-0.802-0.318-1.599-0.578-2.339zM28 16c0 0.802-0.094 1.568-0.224 2.339l-2.688-0.609c0.094-0.547 0.156-1.12 0.156-1.729s-0.063-1.214-0.156-1.792l2.688-0.609c0.156 0.771 0.224 1.568 0.224 2.401zM16 24.609c-4.755-0.005-8.604-3.854-8.609-8.609 0.005-4.755 3.854-8.604 8.609-8.609 4.755 0.005 8.604 3.854 8.609 8.609 0.010 4.745-3.828 8.599-8.573 8.609zM16.286 28v-2.75c1.182-0.042 2.344-0.302 3.427-0.771l1.182 2.5c-1.453 0.641-3.021 0.99-4.609 1.021zM11.042 26.948l1.214-2.5c1.057 0.479 2.208 0.766 3.427 0.802v2.75c-1.604-0.031-3.182-0.391-4.641-1.052zM4 16c0-0.833 0.094-1.63 0.255-2.432l2.688 0.609c-0.13 0.599-0.193 1.208-0.193 1.823 0 0.578 0.068 1.151 0.161 1.698l-2.688 0.604c-0.156-0.755-0.234-1.531-0.224-2.302zM15.682 4v2.75c-1.172 0.042-2.323 0.302-3.396 0.771l-1.182-2.495c1.443-0.641 3-0.984 4.578-1.026zM20.927 5.057l-1.214 2.495c-1.078-0.484-2.245-0.745-3.427-0.766v-2.755c1.667 0 3.234 0.385 4.641 1.026zM27.708 11.266c-0.307-0.75-0.682-1.464-1.12-2.146l2.245-1.536c0.542 0.865 1.021 1.76 1.406 2.719zM27.62 12.99l-2.693 0.609c-0.307-1.13-0.828-2.198-1.536-3.135l2.177-1.724c0.958 1.276 1.667 2.682 2.052 4.25zM23.010 9.984c-0.766-0.891-1.688-1.625-2.724-2.177l1.219-2.495c1.406 0.729 2.656 1.729 3.677 2.943zM22.208 4.99l1.281-2.427c0.896 0.51 1.724 1.083 2.526 1.755l-1.823 2.083c-0.615-0.536-1.276-1.005-1.984-1.411zM21.661 4.703c-0.719-0.354-1.469-0.641-2.24-0.865l0.672-2.656c0.995 0.292 1.953 0.641 2.88 1.12zM18.786 3.682c-0.802-0.193-1.604-0.292-2.432-0.323v-2.719c1.057 0.031 2.109 0.156 3.104 0.385zM15.745 3.359c-0.807 0.031-1.609 0.125-2.401 0.292l-0.641-2.661c0.958-0.224 1.984-0.349 3.042-0.349zM12.703 3.807c-0.781 0.224-1.542 0.51-2.271 0.865l-1.281-2.432c0.922-0.458 1.885-0.823 2.88-1.089zM9.885 4.958c-0.703 0.396-1.365 0.854-1.979 1.38l-1.828-2.052c0.802-0.672 1.635-1.245 2.531-1.755zM10.526 5.313l1.188 2.495c-1.057 0.542-1.953 1.281-2.724 2.146l-2.141-1.729c1.031-1.193 2.281-2.182 3.677-2.911zM6.464 8.734l2.146 1.729c-0.708 0.938-1.229 2.005-1.536 3.135l-2.688-0.609c0.417-1.599 1.12-3.036 2.078-4.255zM4.318 11.198l-2.557-0.958c0.38-0.958 0.865-1.885 1.438-2.719l2.24 1.568c-0.453 0.656-0.828 1.365-1.12 2.109zM4.094 11.807c-0.255 0.771-0.479 1.536-0.573 2.37l-2.719-0.318c0.156-1.026 0.38-2.052 0.734-3.010zM3.49 17.823c0.125 0.802 0.318 1.599 0.573 2.37l-2.557 0.958c-0.365-0.969-0.609-1.979-0.74-3.010zM4.318 20.766c0.323 0.771 0.708 1.474 1.12 2.146l-2.24 1.536c-0.578-0.839-1.063-1.74-1.438-2.688zM4.354 18.911l2.688-0.609c0.286 1.156 0.833 2.245 1.505 3.172l-2.146 1.724c-0.969-1.276-1.661-2.734-2.047-4.286zM8.927 21.953c0.771 0.896 1.698 1.661 2.755 2.208l-1.219 2.495c-1.417-0.745-2.677-1.755-3.714-2.974zM9.885 27.036l-1.276 2.438c-0.901-0.505-1.75-1.094-2.531-1.766l1.828-2.047c0.604 0.547 1.245 0.995 1.979 1.375zM10.432 27.328c0.703 0.354 1.474 0.641 2.271 0.865l-0.672 2.656c-0.995-0.266-1.958-0.63-2.88-1.089zM13.313 28.354c0.766 0.156 1.568 0.255 2.401 0.286v2.719c-1.031-0.036-2.063-0.151-3.073-0.349zM16.354 28.641c0.802-0.026 1.609-0.125 2.401-0.292l0.635 2.656c-0.995 0.224-2.016 0.354-3.036 0.385zM19.359 28.193c0.781-0.219 1.542-0.51 2.271-0.865l1.281 2.432c-0.917 0.469-1.88 0.833-2.88 1.089zM22.141 27.036c0.708-0.38 1.38-0.859 1.984-1.375l1.828 2.047c-0.786 0.672-1.63 1.26-2.531 1.766zM21.505 26.688l-1.188-2.495c1.052-0.552 1.99-1.302 2.755-2.208l2.141 1.729c-1.036 1.214-2.297 2.224-3.708 2.974zM25.599 23.234l-2.141-1.729c0.708-0.943 1.219-2.026 1.5-3.167l2.693 0.604c-0.417 1.542-1.109 3-2.052 4.292zM27.682 20.802l2.557 0.958c-0.385 0.958-0.865 1.859-1.438 2.719l-2.245-1.568c0.453-0.672 0.833-1.375 1.125-2.109zM27.906 20.193c0.255-0.734 0.448-1.536 0.573-2.333l2.719 0.318c-0.146 1.016-0.391 2.010-0.734 2.974zM28.51 7.073l-2.24 1.536c-0.479-0.656-1.016-1.266-1.599-1.823l1.823-2.052c0.74 0.74 1.411 1.505 2.016 2.339zM5.599 4.703l1.823 2.047c-0.604 0.547-1.12 1.156-1.599 1.828l-2.24-1.568c0.573-0.849 1.255-1.625 2.016-2.307zM3.552 24.99l2.24-1.531c0.479 0.635 1.026 1.245 1.599 1.823l-1.823 2.047c-0.729-0.729-1.406-1.51-2.016-2.339zM26.432 27.297l-1.823-2.047c0.573-0.547 1.12-1.151 1.599-1.792l2.24 1.568c-0.609 0.797-1.281 1.563-2.016 2.271z"/> 
                </svg>
                <a href="https://vsco.co/vivero78/gallery" class="vsco-text">VSCO - vivero78</a>
            </div>
        -->
        <div class="social-media-body">
            <svg class="venmo" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.6C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.8,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM278,387H174.32L132.75,138.44l90.75-8.62,22,176.87c20.53-33.45,45.88-86,45.88-121.87,0-19.62-3.36-33-8.61-44L365.4,124.1c9.56,15.78,13.86,32,13.86,52.57C379.25,242.17,323.34,327.26,278,387Z" fill="blue"></path>
            </svg>
            <a href="https://account.venmo.com/u/Adan-Vivero" class="venmo-text">@Adan-Vivero</a>
        </div>
        </section>            
        <p class="bottom-text">Code, Social Media, Cringe</p>

        <div class="purple-block"></div>
        <div class="purple-block2"></div>
        <div class="purple-block3"></div>
        <div class="purple-block4"></div>
    </main>
    <?php 
        include_once 'footer.php';
    ?> 
    <script>
    <?php
        include 'contact.js';
    ?>
    </script>
</body>
</html>