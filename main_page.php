<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gainz Tracker</title>

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap" rel="stylesheet">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./images/hero-banner1.png">
    <link rel="preload" as="image" href="./images/hero-circle-one1.png">
    <link rel="preload" as="image" href="./images/hero-circle-two2.png">
    <link rel="preload" as="image" href="./images/heart-rate.svg">
    <link rel="preload" as="image" href="./images/calories.svg">

</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a class="logo">
                <img class="logo-gainz" src="./images/logo-gainz2.png">
            </a>

            <nav class="navbar" data-navbar>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
                </button>

                <ul class="navbar-list">

                    <li>
                        <a href="table.php" class="navbar-link" data-nav-link>Workout Tracker</a>
                    </li>

                    <li>
                        <a href="weight.php" class="navbar-link" data-nav-link>Weight Tracker</a>
                    </li>

                    <li>
                        <a href="#quote" class="navbar-link" data-nav-link>Quote</a>
                    </li>

                    <li>
                        <a href="#advice" class="navbar-link" data-nav-link>Advice</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link" data-nav-link>About Us</a>
                    </li>

                    <li>
                        <a href="logout.php" class="navbar-link" data-nav-link>Logout</a>
                    </li>

                </ul>

            </nav>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

        </div>
    </header>

    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section style="background-image: url('./assets/images/hero-bg.png')">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">
                            <strong class="strong">Welcome</strong><?php echo $_SESSION['user_name'] ?>
                        </p>

                        <h1 class="h1 hero-title">Ready To Work Hard?</h1>

                        <p class="section-text">
                            Take advantage of Gainz's features to have the ultimate experience.
                        </p>

                        <a href="weight.php" class="btn btn-primary">Track Weight</a>

                    </div>

                    <div class="hero-banner">

                        <img src="./images/hero-banner1.png" width="660" height="753" alt="hero banner" class="w-100">

                        <img src="./images/hero-circle-one1.png" width="666" height="666" aria-hidden="true" alt="" class="circle circle-1">
                        <img src="./images/hero-circle-two2.png" width="666" height="666" aria-hidden="true" alt="" class="circle circle-2">

                        <img src="./images/heart-rate.svg" width="255" height="270" alt="heart rate" class="abs-img abs-img-1">
                        <img src="./images/calories.svg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

                    </div>

                </div>
            </section>

            <!-- 
        - #ABOUT
      -->

            <section class="section about" id="hero" aria-label="about">
                <div class="container">

                    <div class="about-banner has-after">
                        <img src="./images/about-banner1.png" width="660" height="648" loading="lazy" alt="about banner" class="w-100">

                        <img src="./images/hero-circle-one1.png" width="660" height="534" loading="lazy" aria-hidden="true" alt="" class="circle circle-1">
                    </div>

                    <div class="about-content">

                        <p class="section-subtitle">Track Workout Progress</p>

                        <h2 class="h2 section-title">Workout Recorder</h2>

                        <p class="section-text">
                            Add Personal Records or any workout you have finished, just by using this feature. This would help
                            see the progress of your workout in just a few easy steps.
                        </p>

                        <div class="wrapper">

                        </div>

                        <a href="table.php" class="btn btn-primary">Track Workout</a>

                    </div>

                </div>

                </div>
            </section>

        </article>
    </main>    

                <!-- 
    - #FOOTER
  -->

    <footer class="footer">

<div class="footer-bottom">
    <div class="container">

        <p class="copyright">
            &copy; Gainz. Developed By <a class="copyright-link">Group 1.</a>
        </p>

        <ul class="footer-bottom-list">

            <li>
                <a href="https://www.ust.edu.ph/privacy-policy/#:~:text=For%20users%20that%20register%20on,see%20and%20edit%20that%20information." class="footer-bottom-link has-before">Privacy Policy</a>
            </li>

            <li>
                <a href="https://steps.ust.edu.ph/termsconditions" class="footer-bottom-link has-before">Terms & Condition</a>
            </li>

        </ul>

    </div>
</div>

</footer>

<a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
<ion-icon name="caret-up-sharp" aria-hidden="true"></ion-icon>
</a>

<script src="./js/script.js" defer></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>