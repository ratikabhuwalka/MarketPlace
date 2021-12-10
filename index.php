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
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-3" data-aos="fade-up">A little about us...</h2>
                        </div>

                        <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                            <p class="me-4" data-aos="fade-up" data-aos-delay="300">
                                The average American throws away 70 pounds of clothing every year. Many consider “shop ‘til you drop” a philosophy of life but that lifestyle comes at a high cost. The most environment friendly thing that you can buy are the ones that are already sitting in your home, and for everythign else there is <strong>thrifting!</strong>
                                <br><br>Shopping at <strong>Don't Be Trashy!</strong> is a simple and easy way to go green! Manufacturing, producing, packaging, and distributing new clothing takes a lot of energy and water. Disposing of unwanted clothing also takes a toll on the environment. It can take months and even years for these materials to fully break down in landfills! By choosing to buy secondhand clothing instead of brand new, you reduce waste and help the planet. In this way, thrift shopping is the ultimate way to live out the “reduce, reuse, recycle” motto!
                            </p>
                        </div>

                        <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">
                            <p data-aos="fade-up" data-aos-delay="500">How thrifitng helps save the planet? <br><br>It keeps clothes out of landfills where they are left to decompose for millions of years.<br> Shopping secondhand also plays a role in boosting community development. <br>Reduces your carbon footprint. <br>Helps preserve water. <br>Reduces chemical pollution.
                            </p>
                        </div>

                    </div>
                </div>
            </section>

            <section class=" contact section-padding" id="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-12 mx-auto">

                            <h2 class="mb-4 text-center" data-aos="fade-up">Here’s Our Contact Info</h2>
                            <?php 
                                include("contacts.php"); 
                            ?>
                        </div>

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