<?php
	ini_set('display_errors', 1);
	require_once __DIR__ . '/database/connection.php';
	parse_str($_SERVER['QUERY_STRING']);
	$selectQuery = "SELECT * FROM products where id = ". $id.";";
	$result = $conn->query($selectQuery);
	$prod = $result->fetch_assoc();
	$hits = $prod["hits"] + 1;
    $conn->query("UPDATE products SET hits = ".$hits." WHERE id = ".$id.";");    
    $conn->close();
?>
<?php
    if(isset($_COOKIE["lastids"])){
        if(explode(",",$_COOKIE["lastids"])[0]!=$prod["id"]){
            setcookie("lastids",$prod["id"].",".$_COOKIE["lastids"],time() + (86400 * 30));    
        }
        
    }
    else{
        setcookie("lastids", $prod["id"], time() + (86400 * 30));
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

        <title><?php echo $prod['title'] ?></title>

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

            <section class="hero" id="hero">
                <div class="heroText">
                    <h1 class="news-detail-title text-white mt-lg-5 mb-lg-4" data-aos-delay="300">
                        <?php echo $prod['title'] ?>
                    </h1>
                </div>

                <div class="videoWrapper">
                    <img src="<?php echo $prod['src'] ?>" class="img-fluid news-detail-image" alt="<?php echo $prod['alt'] ?>">
                </div>

                <div class="overlay"></div>
            </section>

            <section class="news-detail section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-10 mx-auto">
                            <h2 class="mb-3"><?php echo $prod['title'] ?></h2>

                            <p class="me-4"><?php echo $prod['description'] ?></p>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    </body>
</html>