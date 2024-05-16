<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/productPage-styles.css">
    <title>Product Page</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="product-page">
        <div class="product-app-desc d-flex justify-content-between">
            <img src="./photos/" class="bg-light mx-5 my-5" alt="product image" style="width: 30rem; height: 30rem;">
            <div class="desc mx-5 my-5">
                <h1 class="fs-1">
                    Product Name
                </h1>
                <div class="rating-box fs-2">
                    stars
                </div>
                <p class="price fs-2">
                    Price: 500
                </p>
                <p class="short-desc fs-2">
                    Short description about product and some specification and uses
                </p>
                <div class="btns-container d-flex justify-content-around">
                    <button type="button" class="btn btn-light btn-outline-dark add-cart-btn">
                        Add to Cart
                    </button>
                    <button type="button" class="btn btn-dark buy-btn">
                        Buy now
                    </button>
                </div>
            </div>
        </div>
        <div class="product-details mx-5">
            <h2 class="heading-product-details fs-1">Product details</h2>
            <p class="details fs-5 mx-5">
                Introducing the latest marvel in technological innovation, the XYZ Ultra 12X smartphone. Crafted with precision engineering and cutting-edge design, this device embodies the epitome of modern sophistication and functionality. Seamlessly blending style with substance, the XYZ Ultra 12X redefines the smartphone experience, offering unparalleled features and performance to meet the diverse needs of today's dynamic users.

                At the heart of the XYZ Ultra 12X lies its powerful octa-core processor, capable of delivering lightning-fast performance and seamless multitasking. Whether you're streaming your favorite movies, playing graphics-intensive games, or tackling productivity tasks, this smartphone effortlessly handles it all with unparalleled speed and efficiency.

                Equipped with a stunning 6.7-inch Super AMOLED display, the XYZ Ultra 12X offers an immersive viewing experience like no other. From vivid colors to deep blacks, every detail comes to life with stunning clarity and contrast. Whether you're binge-watching your favorite TV shows or editing photos, the XYZ Ultra 12X's display ensures an unparalleled visual experience.

                Capture every moment in breathtaking detail with the XYZ Ultra 12X's advanced camera system. Featuring a triple-lens setup with a 64MP main camera, 12MP ultra-wide lens, and 8MP telephoto lens, this smartphone lets you unleash your creativity and capture stunning photos and videos in any environment. From sweeping landscapes to close-up portraits, the XYZ Ultra 12X empowers you to explore the world through your lens.

            </p>
        </div>
        <div class="reviews-section d-flex flex-column">
            <h2 class="mx-5 my-5">
                Add Review
            </h2>
            <div class="add-review-container d-flex justify-content-center">
                <div class="add-review-card">
                    <div class="card mb-3" style="max-width: 34rem;">
                        <div class="card-header d-flex justify-content-start align-items-center">
                            <div class="pfp-icon">

                            </div>
                            <h3 class="review-user-name">
                                User Name
                            </h3>
                        </div>
                        <div class="card-body">
                            <textarea name="review-desc" id="review-desc" cols="60" rows="7" placeholder="Write the review here"></textarea>
                          </div>
                        <div class="card-footer bg-transparent d-flex justify-content-between">
                            <div class="add-rating">
                                stars
                            </div>
                            <button type="button" class="btn btn-dark" style="width: 12rem;">Post review</button>
                        </div>
                      </div>
                </div>
            </div>
            <h2 class="mx-5">Reviews</h2>
            <div class="all-reviews d-flex flex-column align-items-center">
                <div class="row row-cols-1 row-cols-md-4 mx-2 my-2 g-5 d-flex justify-content-center">
                    <div class="col">
                        <div class="review-card">
                            <div class="card mb-3" style="max-width: 26rem;">
                                <div class="card-header d-flex justify-content-start align-items-center">
                                    <div class="pfp-icon">
        
                                    </div>
                                    <h3 class="review-user-name">
                                        User Name
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="review-desc-by-user" style="height: 6rem;">
                                        review by the user of the product 
                                    </div>
                                  </div>
                                <div class="card-footer bg-transparent d-flex justify-content-between">
                                    <div class="rating">
                                        stars
                                    </div>
                                    <div class="like-reply-container d-flex justify-content-end">
                                        <button type="button" class="btn btn-light btn-outline-dark mx-2">Like</button>
                                        <button type="button" class="btn btn-dark mx-2">Reply</button>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="review-card">
                            <div class="card mb-3" style="max-width: 26rem;">
                                <div class="card-header d-flex justify-content-start align-items-center">
                                    <div class="pfp-icon">
        
                                    </div>
                                    <h3 class="review-user-name">
                                        User Name
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="review-desc-by-user" style="height: 6rem;">
                                        review by the user of the product 
                                    </div>
                                  </div>
                                <div class="card-footer bg-transparent d-flex justify-content-between">
                                    <div class="rating">
                                        stars
                                    </div>
                                    <div class="like-reply-container d-flex justify-content-end">
                                        <button type="button" class="btn btn-light btn-outline-dark mx-2">Like</button>
                                        <button type="button" class="btn btn-dark mx-2">Reply</button>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="review-card">
                            <div class="card mb-3" style="max-width: 26rem;">
                                <div class="card-header d-flex justify-content-start align-items-center">
                                    <div class="pfp-icon">
        
                                    </div>
                                    <h3 class="review-user-name">
                                        User Name
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="review-desc-by-user" style="height: 6rem;">
                                        review by the user of the product 
                                    </div>
                                  </div>
                                <div class="card-footer bg-transparent d-flex justify-content-between">
                                    <div class="rating">
                                        stars
                                    </div>
                                    <div class="like-reply-container d-flex justify-content-end">
                                        <button type="button" class="btn btn-light btn-outline-dark mx-2">Like</button>
                                        <button type="button" class="btn btn-dark mx-2">Reply</button>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="review-card">
                            <div class="card mb-3" style="max-width: 26rem;">
                                <div class="card-header d-flex justify-content-start align-items-center">
                                    <div class="pfp-icon">
        
                                    </div>
                                    <h3 class="review-user-name">
                                        User Name
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="review-desc-by-user" style="height: 6rem;">
                                        review by the user of the product 
                                    </div>
                                  </div>
                                <div class="card-footer bg-transparent d-flex justify-content-between">
                                    <div class="rating">
                                        stars
                                    </div>
                                    <div class="like-reply-container d-flex justify-content-end">
                                        <button type="button" class="btn btn-light btn-outline-dark mx-2">Like</button>
                                        <button type="button" class="btn btn-dark mx-2">Reply</button>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn dropdown-toggle">Show more</button>                    
                </div>
            </div>
        </div>
        <div class="featured-products-container">
            <h1 class="mx-5 my-5">
                Similar Products
            </h1>
            <div class="row row-cols-1 row-cols-md-4 mx-2 my-2 g-5">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./photos/product.png" class="card-img-top" alt="product image">
                        <div class="card-body">
                            <h5 class="card-title">
                                Shirt
                            </h5>
                            <p class="card-text">
                                Classic yet contemporary, our shirt features timeless elegance with a modern twist, crafted from premium materials for comfort and style.
                            </p>
                            <p class="card-text">
                                Price: &#x20B9;500
                            </p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="button">Add to cart</button>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./photos/product.png" class="card-img-top" alt="product image">
                        <div class="card-body">
                            <h5 class="card-title">
                                Shirt
                            </h5>
                            <p class="card-text">
                                Classic yet contemporary, our shirt features timeless elegance with a modern twist, crafted from premium materials for comfort and style.
                            </p>
                            <p class="card-text">
                                Price: &#x20B9;500
                            </p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="button">Add to cart</button>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./photos/product.png" class="card-img-top" alt="product image">
                        <div class="card-body">
                            <h5 class="card-title">
                                Shirt
                            </h5>
                            <p class="card-text">
                                Classic yet contemporary, our shirt features timeless elegance with a modern twist, crafted from premium materials for comfort and style.
                            </p>
                            <p class="card-text">
                                Price: &#x20B9;500
                            </p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="button">Add to cart</button>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="./photos/product.png" class="card-img-top" alt="product image">
                        <div class="card-body">
                            <h5 class="card-title">
                                Shirt
                            </h5>
                            <p class="card-text">
                                Classic yet contemporary, our shirt features timeless elegance with a modern twist, crafted from premium materials for comfort and style.
                            </p>
                            <p class="card-text">
                                Price: &#x20B9;500
                            </p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-primary me-md-2" type="button">Add to cart</button>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>