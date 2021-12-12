<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-LV99VRQ0QB"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-LV99VRQ0QB');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Don't Be Trashy!</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link href="css/aos.css" rel="stylesheet">
        <link href="css/dontbetrashy.css" rel="stylesheet">
    </head>
    
    <body>    
        <main>

            <?php 
                include("php/header.php"); 
            ?>

        <section class="hero" id="hero">    
                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                        Don't Be Trashy!
                    </h1>

                    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        Consciously Curated Online Marketplace
                    </p>
                </div>

                <div class="homeImageWrapper">
                    <img src="images/b2.jpg">
                </div>

                <div class="overlay"></div>
            </section>

            <section class="section-padding pb-0" id="about">
                <div class="container mb-5 pb-lg-5"> 
                        <div class="col-12">
                            <h2 class="mb-3" data-aos="fade-up">A little about us</h2>
                        </div>
                        <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                            <strong>Don't be Trashy</Strong> is a marketplace curated with products from websites that share our vision to help people make conscious choices. Our services help you reduce your carbon footprint one click at a time!
                        </p>
                </div>
            

                <div class="container mb-5 pb-lg-5">
                        <div class="col-12 mx-auto">
                            <h2 class="mb-3" data-aos="fade-up">You can reach us at</h2>
                            <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                                <strong>info@dontbetrashy.com </br>669.TRA.SHY
                            
                        </div>
                </div>
            </section>

            <section class="google-map">
                <iframe src="https://maps.google.com/maps?q=San%20Jose%20State%20University&t=&z=13&ie=UTF8&iwloc=&output=embed" class="map-iframe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h5 class="text-white">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Don't Be Trashy!, San Jose
                        </h5>
                    </div>

                    <div class="col-6">
                        <p class="copyright-text mb-0">Copyright © Don't Be Trashy! 2021                     
                    </div>

                    <div class="col-lg-3 col-5 ms-auto">
                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>