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

        <title>Recent Visited Products</title>

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
            <section class="news-detail section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-5 text-center">Last 5 previously visited products</h2>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
                if(isset($_COOKIE["lastids"])){  
                    $filterIds=array();
                    $ids = explode(",",$_COOKIE["lastids"]);

                    // Create a filter array of all the products visited
                    foreach ($ids as $id){
                         if(!in_array($id, $filterIds )){
                            array_push($filterIds, $id);
                         }
                     }

                    ini_set('display_errors', 1);
                    require_once __DIR__ . '/database/connection.php';
                    for($i=0; $i<5 and $i<sizeof($filterIds); $i++) {
                        $result = $conn->query("SELECT * FROM products where id = ".$filterIds[$i].";");
                        $row = $result->fetch_assoc();
            ?>

            <div class="col">
                    <div class="card">
                        <a href="<?php echo $prodLink ?>" class="news-title-link" target="_blank" rel="noopener noreferrer">
                            <img style="width: 100%; height: 30vw; object-fit: cover;"class="card-img-top" src=<?php echo $row['src']; ?> alt=<?php echo $row['alt']; ?>>
                        </a>
                        <div class="card-body">
                          <h5 class="card-title"> <a href="<?php echo './viewProduct.php?id='.$row['id']; ?>" class="news-title-link" target="_blank" rel="noopener noreferrer"><?php echo $row['title']; ?></a></h5>
                        </div>
                    </div>
                </div>
            <?php } 
        } else {
            echo "You have not viewed any products yet";
        }
        $conn->close();
        ?>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>