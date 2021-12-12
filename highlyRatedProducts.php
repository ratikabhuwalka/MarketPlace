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

      <title>Highly Rated Products</title>

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
              <div class="col-12">
                <h2 class="mb-5 text-center">Top 5 rated products</h2>
              </div>
              <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php 
                  include("php/getProducts.php"); 
                ?>
              </div>
            </div>
          </div>
        </section>


      </main>
  </body>
</html>