<?php
	ini_set('display_errors', 1);

  function averageRatingCompare($object1, $object2) {
    return $object2->averageRating > $object1->averageRating;
  }

  function filterTop5RatedProducts($allProducts){
    $ratings = array();

    usort($allProducts, 'averageRatingCompare');

    for($i=0 ;$i < 5; $i++) {
      array_push($ratings, $allProducts[$i]);
    }

    return $ratings;
  }

	function getProducts() {
    $allProducts = array();
		$ch = curl_init();
	    $headers = array(
	    'Accept: application/json',
	    'Content-Type: application/json',
	    );
	    curl_setopt($ch, CURLOPT_URL, 'http://sakshikasat.com/secondchances/api/products.php');
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET' );
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    $secondChancesProductsResponse = curl_exec ($ch);

      $arr= json_decode($secondChancesProductsResponse);

      foreach ($arr as $scprod) {
        array_push($allProducts, $scprod);
      }

      curl_setopt($ch, CURLOPT_URL, 'http://mylampstack.com/get_reviews.php');
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET' );
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    $lampStackProductsResponse = curl_exec ($ch);

      $lsarr= json_decode($lampStackProductsResponse);

      foreach ($lsarr as $lsprod) {
        array_push($allProducts, $lsprod);
      }


      // curl_setopt($ch, CURLOPT_URL, 'http://info.ratikabhuwalka.me/Books_Booze/get_reviews.php');
	    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    // curl_setopt($ch, CURLOPT_HEADER, 0);
	    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET' );
	    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    // $booksBoozeProductsResponse = curl_exec ($ch);
      // //echo $booksBoozeProductsResponse;
      // // echo gettype($booksBoozeProductsResponse);
      //   // echo count(json_decode($booksBoozeProductsResponse));
      // $bbarr = json_decode($booksBoozeProductsResponse);
      // //echo json_last_error();
      // //echo $bbarr;
      // // print_r($bbarr);
      // // echo json_decode($bbarr);
      // // $bbarr= (array)json_decode(json_encode($booksBoozeProductsResponse, true));
      // foreach ($bbarr as $bbprod) {
      //   echo $bbprod;
      //   array_push($allProducts, $bbprod);
      // }
      

		curl_close ($ch);

    $filteredProducts = filterTop5RatedProducts($allProducts);
    // echo $filteredProducts;
    return $filteredProducts;
	}

	$products = getProducts();

  foreach ($products as $prod) {
    // print_r($prod -> productName);
?>

<div class="col">
    <div class="card">
        <a href="#" class="news-title-link" target="_blank" rel="noopener noreferrer">
            <img style="width: 100%; height: 30vw; object-fit: cover;"class="card-img-top" src=<?php echo $prod -> productLink ?> alt="productImage"; ?>
        </a>
        <div class="card-body">
          <h5 class="card-title"> <a href="#" class="news-title-link" target="_blank" rel="noopener noreferrer"><?php echo $prod -> productName ?></a></h5>
        </div>
        <div class="card-footer">
          <small class="text-muted">Average Rating: <?php echo $prod -> averageRating?></small>
        </div>
    </div>
  </div>
<?php
}
?>