<?php include('include/header.php'); ?> 
<?php include('include/connect.php'); ?>

    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./images/long-img.png" class="d-block w-100" alt="...">

            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-dark">Best Fashion clothing in town</h1>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/long-img.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="text-dark">Best Fashion clothing in town</h1>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/long-img.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="text-dark">Best Fashion clothing in town</h1>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="featured-products-container">
        <h1 class="title mx-5 my-5">
            Featured Products
        </h1>
        <div class="row row-cols-1 row-cols-md-4 mx-2 my-2 g-5">
            <?php if($result->num_rows > 0) {
                ?>
                <?php while($row = $result->fetch_assoc()) {
                    ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./images/product.png" class="card-img-top" alt="product image">
                    <div class="card-body">
                            <h5 class='card-title'>
                                <?php echo $row['name']; ?>
                            </h5>
                            <p class='card-text'>
                                <?php echo $row['description'] ?>
                            </p>
                            <p class='card-text'>
                                Price: <?php echo $row['price'] ?>
                            </p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="button">Go to cart</button>
                            </div>
                    </div>
                </div>  
            </div>
            <?php } } ?>
        </div>
    </div>

    <div class="categories-container">
        <h1 class="mx-5 my-5">
            Categories
        </h1>
        <div class="list-group mx-5">
            <?php 
                $sql = "SELECT category FROM  products";
                $categories = $conn->query($sql);
                ?>
            <ul class="mx-5 row row-cols-1 row-cols-md-3 mx-2 my-2 g-5">
                <?php 
                if($categories->num_rows > 0) {
                    ?>
                    <?php 
                        while($cat = $categories->fetch_assoc()) {
                            ?>
                <div class="col">
                    <a href="#" class="btn btn-secondary d-flex justify-content-center align-items-center" style="width: 18rem; height: 18rem;"><h2><?php echo $cat["category"]; ?></h2></a>
                </div>
                <?php } } ?>
            </ul>
          </div>
    </div>

    <div class="deals-for-you-container my-5">
        <h1 class="mx-5 my-5">
            Deals for you
        </h1>
        <div class="row row-cols-1 row-cols-md-4 mx-5 my-2 g-5">
            <?php for($i = 0; $i < 8; $i++) {
                ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./images/deal-product.png" class="card-img-top" alt="product image">
                    <div class="card-body">
                        <h5 class="card-title">
                            Hike Shoes
                        </h5>
                        <p class="card-text">
                            Elevate your style with our sleek and comfortable shoes, crafted with premium materials for lasting durability and effortless sophistication.
                        </p>
                        <p class="card-text">
                            Price: <strike>&#x20B9;500</strike> &#x20B9;300
                        </p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="button">Add to cart</button>
                        </div>
                    </div>
                </div>  
            </div>
            <?php } ?>
        </div>
            <?php include('include/footer.php'); ?>