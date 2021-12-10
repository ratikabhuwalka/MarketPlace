<section class="section-padding" id="products">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h2 class="mb-5 text-center" data-aos="fade-up">Products</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-2 g-4">
            	<div class="col">
				    <div class="card">
					    <div class="card-body">
					      <h5 class="card-title"><a href="recentVisitedProducts.php" class="news-title-link" target="_blank" rel="noopener noreferrer">Recently Visted Products</a></h5>
					    </div>
				 	</div>
				</div>

				<div class="col">
				    <div class="card">
					    <div class="card-body">
					      <h5 class="card-title"><a href="mostVisitedProducts.php" class="news-title-link" target="_blank" rel="noopener noreferrer">Most Visited Products</a></h5>
					    </div>
				 	</div>
				</div>
            <?php
            	ini_set('display_errors', 1);
				require_once __DIR__ . '/../database/connection.php';
				$selectQuery = "SELECT * FROM products";
				$result = $conn->query($selectQuery);

				while($row = $result->fetch_assoc()) { 
					$prodLink = './viewProduct.php?id='.$row['id'];
			?>	
				<div class="col">
				    <div class="card">
					  	<a href="<?php echo $prodLink ?>" class="news-title-link" target="_blank" rel="noopener noreferrer">
					    	<img style="width: 100%; height: 30vw; object-fit: cover;"class="card-img-top" src=<?php echo $row['src']; ?> alt=<?php echo $row['alt']; ?>>
					    </a>
					    <div class="card-body">
					      <h5 class="card-title"> <a href="<?php echo $prodLink ?>" class="news-title-link" target="_blank" rel="noopener noreferrer"><?php echo $row['title']; ?></a></h5>
					    </div>
				 	</div>
				</div>
			<?php } 
				$conn->close()
			?>

			</div>
        </div>
    </div>
</section>