<?php include('layouts/header.php');?>

      <!--home-->
      <section id="home">
        <div class="container">
          <h5>NEW ARRIVALS</h5>
          <h1><span>BEST PRICES</span> This Season</h1>
          <p>Eshop offers the best products for the most affordable prices</p>
          <button>Shop Now</button>
        </div>
      </section>

      <section id="brand" class="container">
        <div class="row">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand1.jpg">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand2.png">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand3.png">
          <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/imgs/brand4.jpg">
        </div>
      </section>


      <!--New-->
      <section id="new" class="w-100">
        <div class="row p-0 m-0">
          <!--One-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/one.avif">
            <div class="details">
              <h2>Extreamely Awesome Shoes</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <!--Two-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/two.jpg">
            <div class="details">
              <h2>Awesome Bags</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
          <!--Three-->
          <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
            <img class="img-fluid" src="assets/imgs/watch2.jpg">
            <div class="details">
              <h2>50% OFF Watches</h2>
              <button class="text-uppercase">Shop Now</button>
            </div>
          </div>
        </div>
      </section>

      <!--featured-->
      <section id="featured" class="my-5 pb-5">
        <div class="container text-center mt-5 py-5">
          <h3>Our featured</h3>
          <hr>
          <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container-fluid">

        <?php include('server/get_featured_products.php') ?>
        <?php while($row=$featured_products->fetch_assoc()){?>

          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image']; ?>">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href= "single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn2">Buy Now</button></a>
          </div>
          <?php }?>     
        </div>
      </section>


      <!--Banner-->
      <section id="banner" class="my-5 py-5">
        <div class="container">
          <h4>MID SEASON'S SALE</h4>
          <h1>Autumn Collection <br> UP to 30% OFF</h1>
          <button class="text-uppercase">shop now</button>
        </div>
      </section>

      <!--Clothes-->
      <section id="Clothes" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Dresses & Coats</h3>
          <hr>
          <p>Here you can check out our amazing Clothes</p>
        </div>
        <div class="row mx-auto container-fluid">
        <?php include('server/get_coats.php') ?>
        <?php while($row=$coats_products->fetch_assoc()){?>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href= "single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn2">Buy Now</button></a>
          </div>
          <?php }?> 
        </div>
      </section>

      <!--Watches-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Watches</h3>
          <hr>
          <p>check out our unique Watches</p>
        </div>
        <div class="row mx-auto container-fluid">
        <?php include('server/get_watch.php') ?>
        <?php while($row=$watch_products->fetch_assoc()){?>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href= "single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn2">Buy Now</button></a>

          </div>
          <?php }?> 
        </div>
      </section>

      <!--shoes-->
      <section id="featured" class="my-5">
        <div class="container text-center mt-5 py-5">
          <h3>Shoes</h3>
          <hr>
          <p>Here you can check out our amazing Shoes</p>
        </div>
        <div class="row mx-auto container-fluid">
        <?php include('server/get_shoes.php') ?>
        <?php while($row=$shoes_products->fetch_assoc()){?>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row['product_image'] ?>">
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
            <a href= "single_product.php?product_id=<?php echo $row['product_id'];?>"><button class="buy-btn2">Buy Now</button></a>
          </div>
          <?php }?> 
        </div>
      </section>

      <?php include('layouts/footer.php');?>

