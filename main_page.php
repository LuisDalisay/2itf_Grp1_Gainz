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

            <!-- 
        - #VIDEO
      -->

            <section class="section video" aria-label="video" id="quote">
                <div class="container">

                    <div class="video-card has-before has-bg-image">
                        <div class="wrapper">
                            <header>Inspirational Quote</header>
                            <div class="content">
                                <div class="quote-area">
                                    <i class="fas fa-quote-left"></i>
                                    <p class="quote">Strength does not come from winning. Your struggles develop your strengths. When you go through hardships and decide not to surrender, that is strength.</p>
                                    <i class="fas fa-quote-right"></i>
                                </div>
                                <div class="author">
                                    <span>__</span>
                                    <span class="name">Arnold Schwarzenegger</span>
                                </div>
                            </div>

                            <div class="buttons">
                                <div class="features">
                                    <ul>
                                        <li class="sound"><i class="fas fa-volume-up"></i></li>
                                        <li class="copy"><i class="fas fa-copy"></i></li>
                                    </ul>
                                    <button class="quote-button">New Quote</button>
                                </div>
                            </div>
                        </div>

                        <script src="./js/quote_script.js"></script>

                    </div>

                </div>
            </section>

            <!-- 
        - #CLASS
      -->

            <section class="section class bg-dark has-bg-image" id="advice" aria-label="class" style="background-image: url('./assets/images/classes-bg.png')">
                <div class="container">

                    <p class="section-subtitle">Advice</p>

                    <h2 class="h2 section-title text-center">10 Health Tips For Everyone</h2>

                    <ul class="class-list has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip1.jpg" width="416" height="240" loading="lazy" alt="Weight Lifting" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">
                                        <h3 class="h3">
                                            <a class="card-title">Take Multivitamin Supplements</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Helps strengthen our bones
                                        along with exercise, a healthy diet and adequate nutrients are essential for strong bones.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip2.jpg" width="416" height="240" loading="lazy" alt="Cardio & Strenght" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Get Enough Sleep</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Getting enough sleep is important to gain muscle and gives more energy in working out.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip3.png" width="416" height="240" loading="lazy" alt="Power Yoga" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Reduce Sitting and Screen Time</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Reducing screen time can open more time in the day for physical activity that keeps your body healthy.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip4.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Have Recovery Days</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Having recovery days can help in growing muscle due to recovery days the muscles are resting and it can grow properly.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip5.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Increase Protein Intake</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Increasing your protein intake can help you maintain your weight loss and grow muscles.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip6.jpeg" width="416" height="240" loading="lazy" alt="The Fitness Pack" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Avoid Processed Food</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Avoiding process food can help you feel more energized and focused to all the things that you will do and switching to healthy foods can help you reach your goal fast.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip7.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Measure and Watch Your Weight</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Keeping your weight in the normal range is an important part of healthy aging.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip8.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Drink Water and Stay Hydrated</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Being well-hydrated can improve sleep quality, cognition, and mood.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip9.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Be Consistent</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Being consistent in your training/work out and your diet can help you achieve your goal faster.
                                    </p>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="class-card">

                                <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                    <img src="./images/Health-Tip10.jpg" width="416" height="240" loading="lazy" alt="The Fitness Pack" class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="title-wrapper">

                                        <h3 class="h3">
                                            <a class="card-title">Avoid Harmful Use of Alcohol</a>
                                        </h3>
                                    </div>

                                    <p class="card-text">
                                        Better hydration and improved sleep will have increased your productivity and daily wellbeing.
                                    </p>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <!-- 
        - #BLOG
      -->

            <section class="section blog" id="about" aria-label="blog">
                <div class="container">

                    <p class="section-subtitle">Our Team</p>

                    <h2 class="h2 section-title text-center">Group 1 - 2ITF</h2>

                    <ul class="blog-list has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="blog-card">

                                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                                    <img src="./images/member-dal.jpg" width="440" height="270" loading="lazy" alt="Going to the gym for the first time" class="img-cover">

                                    <time class="card-meta" datetime="2022-07-07">Leader</time>
                                </div>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a class="card-title">Renzo Luis Dalisay</a>
                                    </h3>

                                    <p class="card-text">
                                        is a courageous and steadfast individual who possesses an unwavering commitment to justice and the well-being of others.
                                    </p>

                                    <a href="https://www.facebook.com/luisdalisayXD" class="btn-link has-before">Facebook</a>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="blog-card">

                                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                                    <img src="./images/member-locs.jpg" width="440" height="270" loading="lazy" alt="Parturient accumsan cacus pulvinar magna" class="img-cover">

                                    <time class="card-meta" datetime="2022-07-07">Member</time>
                                </div>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a class="card-title">Carlo Padilla</a>
                                    </h3>

                                    <p class="card-text">
                                        is a talented individual who exudes passion, creativity, and unwavering dedication in all his endeavors.
                                    </p>

                                    <a href="https://www.facebook.com/carlopadillaa" class="btn-link has-before">Facebook</a>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="blog-card">

                                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                                    <img src="./images/member-romo.png" width="440" height="270" loading="lazy" alt="Risus purus namien parturient accumsan cacus" class="img-cover">

                                    <time class="card-meta" datetime="2022-07-07">Member</time>
                                </div>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a class="card-title">Angelo Gabriel Romo</a>
                                    </h3>

                                    <p class="card-text">
                                        is a determined and resilient individual who consistently strives for personal growth and positively impacts those around them.
                                    </p>

                                    <a href="https://www.facebook.com/romoangelo26" class="btn-link has-before">Facebook</a>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="blog-card">

                                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                                    <img src="./images/member-go.png" width="440" height="270" loading="lazy" alt="Going to the gym for the first time" class="img-cover">

                                    <time class="card-meta" datetime="2022-07-07">Member</time>
                                </div>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a class="card-title">Angelo Bryan Domingo</a>
                                    </h3>

                                    <p class="card-text">
                                        is a person who possesses a quiet and introspective nature, often observing the world with a deep sense of curiosity.
                                    </p>

                                    <a href="https://www.facebook.com/angelo.domingo.1690671" class="btn-link has-before">Facebook</a>

                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="blog-card">

                                <div class="card-banner img-holder" style="--width: 440; --height: 270;">
                                    <img src="./images/member-sean.jpg" width="440" height="270" loading="lazy" alt="Going to the gym for the first time" class="img-cover">

                                    <time class="card-meta" datetime="2022-07-07">Member</time>
                                </div>

                                <div class="card-content">

                                    <h3 class="h3">
                                        <a class="card-title">Sean Martin Fulay</a>
                                    </h3>

                                    <p class="card-text">
                                        is a charismatic and ambitious individual who approaches life with a contagious enthusiasm, constantly inspiring those around him.
                                    </p>

                                    <a href="https://www.facebook.com/seanmartin.fulay" class="btn-link has-before">Facebook</a>

                                </div>

                            </div>
                        </li>

                    </ul>

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