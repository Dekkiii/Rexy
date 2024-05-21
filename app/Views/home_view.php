<?php
// Check if the session name is set
session_start();

// Set session timeout period in seconds (e.g., 30 minutes)
$sessionTimeout = 1800; // 30 minutes

// Function to check if the session is expired
function isSessionExpired() {
    $currentTime = time();
    if (isset($_SESSION['last_activity']) && ($currentTime - $_SESSION['last_activity'] > $GLOBALS['sessionTimeout'])) {
        // Session expired, destroy session
        session_unset();
        session_destroy();
        return true;
    }
    $_SESSION['last_activity'] = $currentTime;
    return false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REX</title>



     <!--swiper css -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>


    <!--box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--custom css-->
    <!-- <link rel="stylesheet" type="css" href="./css/style.css"> -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!--header design-->
    <!-- <header class="header">
        <a href="#" class="logo">
            <img src="img/logo.png" alt="">
     

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

       
        
        
    </header> -->



    <!-- home section design -->
    <section class="home" id="home">
        <div class="home-content">
            <!-- <img src="/img/HI REX.gif" alt=""> -->
            <h3>Hello, I am</h3>
            <h1>Rex</h1>
            <?php if ($userData) : ?>
            <p>Your Distriphil IT Star</p><br>
            <p> Welcome, <?= $userData['name'] ?></p>
        <?php endif; ?>
            
            
            
        </div>  

        <div class="profession-container">
            <div class="profession-box">
               
                
               

            </div>
            <div class="overlay"></div>
       </div>

      
</section>

<!-- about section design-->
<section class="about" id="about">
    <div class="about-img">
        <img src="img/gif2.gif" alt="">
    </div>

    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Hi, I'm Here To Help your Next Project!</h3>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <a href="#" class="btn">Read More</a>
    </div>
</section> 

    <!-- services section design -->

   
     <section class="portfolio"id="portfolio">
        <h2 class="heading">CATEG<span>ORIES</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box">
                <img src="img/Files.gif"">

                <div class="portfolio-layer">
                    <h4>EMAIL</h4>
                    
                    <a href="email_main"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="img/Laptop.gif" alt="">

                <div class="portfolio-layer">
                    <h4>SCREEN & DISPLAY</h4>
                    
                    <a href="laptop_main"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="portfolio-box">
                <img src="img/wifi.jpg" alt="">

                <div class="portfolio-layer">
                    <h4>WIFI</h4>
                    
                    <a href="internet_main"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            
        </div>
     </section>

   


    <!-- contact section design-->
    <section class="contact"  id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>
    

        <form action="send.php" method="post">
            <div class="input-box">
                <input type="text"  placeholder="Full Name">
                <input type="email" name="email" value="" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" placeholder="Mobile Number">
                <input type="text" name="subject" value="" placeholder="Email Subject">
            </div>
            
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button type="submit" name="send" class="btn"> Send Message</button> 
        </form>
    </section>

    <!-- footer design -->
    <!-- <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Codehal | All Rights Reserved.</p>
        </div>
        
        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>
    </footer> -->

     <!-- swiper js -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>

</body>
</html>