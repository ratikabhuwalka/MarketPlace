<?php
session_start();
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

        <title>Don't Be Trashy!</title>

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
                include("php/header.php"); 
            ?>

            <div class="container">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <form class="form-horizontal" style="margin-top: 40px;" role="form" action="addUser.php" method="post">
                          <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline">
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" required/>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline">
                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" required/>
                              </div>
                            </div>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required/>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" name="homeAddress" id="homeAddress" class="form-control" placeholder="Home Address" required/>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="tel" pattern=".{10}" class="form-control" name="cellPhone" id="cellPhone" placeholder="Cell Phone" required>
                          </div>

                          <p style="font-size: 15px;">By creating an account you agree to our <a href="utils/privacypolicy.html" style="font-weight: bold; color:#2c5043">Terms & Privacy</a>.</p>

                          <button style="background: #2c5043" type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
                        </form>
                        <?php
                            if(isset($_SESSION["error"])){
                                $error = $_SESSION["error"];
                                echo "<span style='color:red'>$error</span>";
                            }
                        ?> 
                    </div>
                </div>
            </div>
        </main>

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
<?php
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
?>
