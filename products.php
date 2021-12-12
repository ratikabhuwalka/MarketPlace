<?php
session_start();
if (!(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] != '')) {
	header ("Location: login.php");
	exit();
}
?>
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

      <title>Products</title>

      <!-- CSS FILES -->
      <link rel="preconnect" href="https://fonts.googleapis.com">

      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700;900&display=swap" rel="stylesheet">
      
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-icons.css" rel="stylesheet">

      <link rel="stylesheet" href="css/magnific-popup.css">

      <link href="css/aos.css" rel="stylesheet">

      <link href="css/dontbetrashy.css" rel="stylesheet">
  </head>

  <body>
    <main>
        <?php 
            include("php/loggedInUserHeader.php"); 
        ?>

        <section class="news-detail section-padding">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <!-- <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div> -->

                <div class="card mb-3">
                  <a href="http://mylampstack.com/#product">
                    <img style="width: 100%; height: 30vw; object-fit: cover;" src="images/lampstackImage.png" class="card-img-top" alt="My Lamp Stack">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">GreeenScape</h5>
                    <p class="card-text">Let greenscape help with our large selections of shrubs, tree, plants, succlents, and more!</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
              <div class="card mb-3">
                  <a href="https://sakshikasat.com/secondchances/index.php#products">
                    <img style="width: 100%; height: 30vw; object-fit: cover;" src="images/secondchances.jpeg" class="card-img-top" alt="Second Chances">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Second Chances</h5>
                    <p class="card-text">Thrifting made easy. Shop second hand from clothing, elctronics to gym equipments! We've got you covered.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="news-detail">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
              <div class="card mb-3">
                  <a href="http://info.ratikabhuwalka.me/Books_Booze/products.php">
                    <img style="width: 100%; height: 30vw; object-fit: cover;" src="images/bnbImage.jpeg" class="card-img-top" alt="Books_Booze">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Books_Booze</h5>
                    <p class="card-text">It's a tiny little nook for book lovers.</p>
                  </div>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card mb-3">
                  <a href="http://gradtechie.me/index.php#new-arrivals">
                    <img style="width: 100%; height: 30vw; object-fit: cover;" src="images/gradtechie.jpeg" class="card-img-top" alt="Grad Techie">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Grad Techie</h5>
                    <p class="card-text">The best renewed products at th lowest prices!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
  </body>
</html>