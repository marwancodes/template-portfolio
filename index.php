<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio</title>
</head>

<body>

    <!-- header design -->
    <header class="header">
        <a href="#" class="logo">Portfolio</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portfolio">Marwan</a>
            <a href="#contact">contact</a>
            <a href="login/login.php" class="btn" id="btn-login">Login</a>
        </nav>

    </header>
    <!-- home section design  -->
    <section class="home" id="home">
        <div class="home-content" data-aos="fade-down">
            <h3>Hello, It's me</h3>
            <h1 data-aos="fade-right">marouane ouarradi</h1>
            <h3>And I'm a <span class="multiple-text"></span></h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus facilis velit cum ut optio reiciendis accusantium odit.</p>
            <div class="social-media">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
                <a href="#"><i class='bx bxl-linkedin'></i></a>
            </div>
            <a href="pdf/Mon dev-CV 2023.pdf" download class="btn">Donwnload CV</a>
        </div>
        <div class="home-image" data-aos="fade-up">
            <img src="images/MOII.png" alt="">
        </div>
    </section>

    <!-- about section design  -->
    <section class="about" id="about">
        <div class="about-img" data-aos="fade-right">
            <img src="images/MOII.png" alt="">
        </div>
        <div class="about-content" data-aos="fade-up" data-aos-duration="3000">
            <h2 class="heading" data-aos="fade-down">About <span>Me</span></h2>
            <h3>Full Stack Developer</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor rerum molestiae aspernatur illum deleniti corrupti at, ab unde pariatur dolores itaque eius dolorem similique aliquid laboriosam harum nam hic blanditiis impedit sequi distinctio? Excepturi voluptatem exercitationem, expedita blanditiis ad deserunt culpa cum illum laudantium magnam adipisci.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </section>

    <!-- services section design  -->
    <section class="services" id="services">
        <h2 class="heading" data-aos="fade-down">Our <span>Services</span></h2>
        <div class="services-container" data-aos="fade-up" data-aos-duration="3000">
            <div class="services-box">
                <i class='bx bx-code-alt'></i>
                <h3>Frontend</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa dolor voluptate similique natus ut alias? Architecto voluptate in quod placeat!</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class='bx bxl-php'></i>
                <h3>Backend</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa dolor voluptate similique natus ut alias? Architecto voluptate in quod placeat!</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="services-box">
                <i class='bx bxs-bar-chart-alt-2'></i>
                <h3>Seo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa dolor voluptate similique natus ut alias? Architecto voluptate in quod placeat!</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- porfolio section design  -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading" data-aos="fade-down">Lastest <span>Project</span></h2>

        <div class="portfolio-container">
            <div class="portfolio-box" data-aos="zoom-out-right">
                <img src="images/portfolio1.PNG" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, exercitationem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>

                </div>
            </div>
            <div class="portfolio-box" data-aos="zoom-in-up">
                <img src="images/portfolio2.PNG" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, exercitationem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>

                </div>
            </div>
            <div class="portfolio-box" data-aos="zoom-out-left">
                <img src="images/portfolio3.PNG" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, exercitationem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>

                </div>
            </div>
            <div class="portfolio-box" data-aos="zoom-out-right">
                <img src="images/portfolio4.PNG" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, exercitationem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>

                </div>
            </div>
            <div class="portfolio-box" data-aos="zoom-in-up">
                <img src="images/portfolio5.PNG" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, exercitationem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>

                </div>
            </div>
            <div class="portfolio-box" data-aos="zoom-out-left">
                <img src="images/portfolio6.PNG" alt="">
                <div class="portfolio-layer">
                    <h4>Web Design</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus, exercitationem.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>

                </div>
            </div>
        </div>

    </section>

    <!-- contact section design  -->
    <?php require 'form.php'; ?>

    <!-- footer section design  -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by Marwan Codes | All Rights Reserved.</p>
        </div>
    </footer>



    <!-- Typed.js CDN github -->
    <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>

    <!-- AOS.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            delay: 400, // values from 0 to 3000, with step 50ms
            duration: 1500, // values from 0 to 3000, with step 50ms
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
        });
    </script>

    <script src="Js/script.js"></script>
</body>

</html>