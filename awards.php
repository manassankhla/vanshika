<?php
$page_title = "Awards & Recognitions";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Awards - Architect Vanshika</title>

    <!--Favicon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="assets/css/line-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="assets/css/fontAwesomePro.css" rel="stylesheet">
    <!-- Magnific Popup Video -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Nice Select  -->
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <!-- Metis Menu -->
    <link href="assets/css/metismenu.css" rel="stylesheet">
    <!-- Dark Style CSS -->
    <link href="assets/css/dark.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        .award-card {
            background-color: #1a1a1a;
            border: 1px solid #333;
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            padding: 30px;
            position: relative;
            overflow: hidden;
        }

        .award-card:hover {
            transform: translateY(-5px);
            border-color: #c29a6c;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .award-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 2px;
            height: 0;
            background-color: #c29a6c;
            transition: height 0.3s ease;
        }

        .award-card:hover::before {
            height: 100%;
        }

        .award-source {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #c29a6c;
            margin-bottom: 15px;
            display: block;
        }

        .award-title {
            color: #fff;
            font-size: 20px;
            margin-bottom: 20px;
            line-height: 1.4;
            font-family: 'Space Grotesk', sans-serif;
            flex-grow: 1;
        }

        .award-link {
            color: #c29a6c;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease;
            margin-top: auto;
        }

        .award-link i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .award-link:hover {
            color: #fff;
        }

        .award-link:hover i {
            transform: translateX(5px);
        }

        .award-icon-bg {
            position: absolute;
            bottom: -20px;
            right: -20px;
            font-size: 100px;
            color: rgba(255, 255, 255, 0.03);
            transform: rotate(-15deg);
            transition: color 0.3s ease;
        }

        .award-card:hover .award-icon-bg {
            color: rgba(194, 154, 108, 0.08);
        }

        .award-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #333;
            transition: all 0.3s ease;
        }

        .award-card:hover .award-img {
            border-color: #c29a6c;
            transform: scale(1.02);
        }

    </style>
</head>

<body class="dark">

    <!-- Pre-Loader -->
    <div id="loader">
        <div class="loader-content">
            <img src="assets/img/logo/Short_logo.png" alt="Loader Logo" class="loader-logo">
            <div class="loading-bar-container">
                <div class="loading-bar"></div>
                <span class="loading-text">0%</span>
            </div>
        </div>
    </div>

    <!-- Mouse Cursor  -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <?php include 'header.php'; ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                <!-- Awards Hero Section -->
                <div class="project-hero-section section-padding pb-0 pt-150">
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-8">
                                <h6 class="text-uppercase mb-3" style="color: #c29a6c; letter-spacing: 2px;">
                                    Recognitions</h6>
                                <h1 class="display-3 text-white mb-4" style="font-family: 'Space Grotesk', sans-serif;">
                                    Awards & Media</h1>
                                <p class="mb-0 text-white-50">Celebrating our commitment to design excellence and
                                    innovation in architecture and interior design.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Awards Grid Section -->
                <div class="section-padding pt-100">
                    <div class="container">
                        <div class="row g-4">
                            <!-- Award 1 -->
                            <div class="col-lg-4 col-md-6 mb-4 gsap-blog-anim">
                                <div class="award-card">
                                    <i class="las la-trophy award-icon-bg"></i>
                                    <img src="https://res.cloudinary.com/diynqy2wn/image/upload/v1776843294/_MAK2836_pk08wc.jpg" alt="PTI News" class="award-img">
                                    <span class="award-source">PTI News</span>
                                    <h3 class="award-title">Elegance with Royalty: How to Infuse Traditional Indian
                                        Elements into Modern Interiors</h3>
                                    <a href="https://www.ptinews.com/press-release/elegance-with-royalty-how-to-infuse-traditional-indian-elements-into-modern-interiors/2954579"
                                        target="_blank" class="award-link">Read Feature <i
                                            class="las la-arrow-right"></i></a>
                                </div>
                            </div>

                            <!-- Award 2 -->
                            <div class="col-lg-4 col-md-6 mb-4 gsap-blog-anim">
                                <div class="award-card">
                                    <i class="las la-award award-icon-bg"></i>
                                    <img src="https://res.cloudinary.com/diynqy2wn/image/upload/v1776843284/IMG_7387_jem7lf.jpg" alt="ANI News" class="award-img">
                                    <span class="award-source">ANI News</span>
                                    <h3 class="award-title">Elegance With Royalty: How To Infuse Traditional Indian
                                        Elements Into Modern Interiors</h3>
                                    <a href="https://www.aninews.in/news/business/elegance-with-royalty-how-to-infuse-traditional-indian-elements-into-modern-interiors20250927162457/"
                                        target="_blank" class="award-link">Read Feature <i
                                            class="las la-arrow-right"></i></a>
                                </div>
                            </div>

                            <!-- Award 3 -->
                            <div class="col-lg-4 col-md-6 mb-4 gsap-blog-anim">
                                <div class="award-card">
                                    <i class="las la-newspaper award-icon-bg"></i>
                                    <img src="https://res.cloudinary.com/diynqy2wn/image/upload/v1776843499/01_w4ovcq.jpg" alt="The Week" class="award-img">
                                    <span class="award-source">The Week</span>
                                    <h3 class="award-title">Elegance with Royalty: How to Infuse Traditional Indian
                                        Elements into Modern Interiors</h3>
                                    <a href="https://www.theweek.in/wire-updates/business/2025/09/29/dcm9-vanshika-agarwal.amp.html"
                                        target="_blank" class="award-link">Read Feature <i
                                            class="las la-arrow-right"></i></a>
                                </div>
                            </div>

                            <!-- Award 4 -->
                            <div class="col-lg-4 col-md-6 mb-4 gsap-blog-anim">
                                <div class="award-card">
                                    <i class="las la-medal award-icon-bg"></i>
                                    <img src="https://res.cloudinary.com/diynqy2wn/image/upload/v1776843517/asd_x5cyoh.jpg" alt="Re-thinking The Future" class="award-img">
                                    <span class="award-source">Re-thinking The Future</span>
                                    <h3 class="award-title">Sushobhit By Vanshika Agarwal Designs</h3>
                                    <a href="https://www.re-thinkingthefuture.com/residentail-interior-design/12047-sushobhit-by-vanshika-agarwal-designs/"
                                        target="_blank" class="award-link">Read Feature <i
                                            class="las la-arrow-right"></i></a>
                                </div>
                            </div>

                            <!-- Award 5 -->
                            <div class="col-lg-4 col-md-6 mb-4 gsap-blog-anim">
                                <div class="award-card">
                                    <i class="las la-certificate award-icon-bg"></i>
                                    <img src="https://res.cloudinary.com/diynqy2wn/image/upload/v1776843540/_MAK8316_wfrpzy.jpg" alt="Archello" class="award-img">
                                    <span class="award-source">Archello</span>
                                    <h3 class="award-title">Sushobhit by Vanshika Agarwal Designs | space yellow</h3>
                                    <a href="https://archello.com/project/sushobhit-by-vanshika-agarwal-designs"
                                        target="_blank" class="award-link">Read Feature <i
                                            class="las la-arrow-right"></i></a>
                                </div>
                            </div>

                            <!-- Award 6 -->
                            <div class="col-lg-4 col-md-6 mb-4 gsap-blog-anim">
                                <div class="award-card">
                                    <i class="las la-star award-icon-bg"></i>
                                    <img src="https://res.cloudinary.com/diynqy2wn/image/upload/v1776843563/07_t82sv8.jpg" alt="Architect and Interiors India" class="award-img">
                                    <span class="award-source">Architect and Interiors India</span>
                                    <h3 class="award-title">Journey Through Time As This 5400 Sq Ft Jaipur Home Bridges
                                        Heritage And Modernity</h3>
                                    <a href="https://www.architectandinteriorsindia.com/projects/journey-through-time-as-this-5400-sq-ft-jaipur-home-bridges-heritage-and-modernity"
                                        target="_blank" class="award-link">Read Feature <i
                                            class="las la-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Area -->
                <?php include 'footer.php'; ?>

            </main>
        </div>
    </div>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- jquery -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Pure Counter JS -->
    <script src="assets/js/pure-counter.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Isotope JS -->
    <script src="assets/js/isotope-3.0.6-min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- Back To Top JS -->
    <script src="assets/js/backToTop.js"></script>
    <!-- Metis Menu JS -->
    <script src="assets/js/metismenu.js"></script>
    <!-- Progress Bar JS -->
    <script src="assets/js/jquery.barfiller.js"></script>
    <!-- Appear JS -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- GSAP Animation JS -->
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/gsap-scroll-to-plugin.js"></script>
    <script src="assets/js/SplitText.min.js"></script>
    <script src="assets/js/ScrollSmoother.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/smoother-script.js"></script>
    <script src="assets/js/heading-animation.js"></script>
    <script src="assets/js/paragraph-animation.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>