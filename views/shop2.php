<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thriftin - Toko Thrift</title>
    <link rel="icon" type="image/x-icon" href="../resource/images/logoT.png">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/shopdetail.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
    <?php include "../layouts/navbar.html"; ?>

    <!-- Product Details Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Product Images Carousel -->
            <div class="col-lg-6">
                <div id="product-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1300">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../resource/images/Barang_Branded/Female/Top_s/Prada Morocain wo girl.avif" class="d-block w-100" alt="Product Image">
                        </div>
                        <div class="carousel-item">
                            <img src="../resource/images/Barang_Branded/Female/Top_s/Prada Morocain.avif" class="d-block w-100" alt="Product Image">
                        </div>
                        <div class="carousel-item">
                            <img src="../resource/images/Barang_Branded/Female/Top_s/Prada Morocain Full.avif" class="d-block w-100" alt="Product Image">
                        </div>
                        <div class="carousel-item">
                            <img src="../resource/images/Barang_Branded/Female/Top_s/Prada Morocain CLose.avif" class="d-block w-100" alt="Product Image">
                        </div>
                        <div class="carousel-item">
                            <img src="../resource/images/Barang_Branded/Female/Top_s/Prada Morocain Back.avif" class="d-block w-100" alt="Product Image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Information -->
            <div class="col-lg-6">
                <h3 class="product-name">Prada Morocain</h3>
                <p>Size L - Good Condition</p>
                <p class="product-price">Rp 240.000</p>
                <p>Color: Blue 
                    <span class="circle-color" style="background-color: #587098; width: 15px; height: 15px; display: inline-block; border-radius: 50%;"></span>
                </p>

                <!-- Liked by Section -->
                <p class="mt-3">
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    Liked by 1 people
                </p>

                <!-- Shop and Add to Cart Buttons -->
                <div class="mt-3">
                    <a href="shop3.php" class="btn btn-dark w-50 mb-2">Shop Now</a>
                    <a href="#" class="btn btn-outline-dark w-50">+ To Cart</a>
                </div>

                <div class="mt-3 d-flex align-items-center">
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/insurance.png" alt="Insurance Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    
                </div>
                <p>Every product you buy has gone <br>  through our quality control service.</p>

                <!-- Product Description -->
                <div class="product-description mt-4">
                    <h5>Description</h5>
                    <p>Brand: Prada</p>
                    <p>LD 95 - 100</p>
                    <p>P 60</p>
                    <p>Mint Condition, No Tear</p>
                    <p>Size Tag: L</p>
                    <small class="text-muted">1 day ago</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products Section -->
    <div class="container my-5">
        <h2 class="mb-4">You Might Also Like</h2>
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card">
                    <a href="shop2.php">
                        <img src="../resource/images/Barang_Branded/Female/Top_s/PULL&BEAR Pullover Sweater.jpg" class="card-img-top" alt="Product Image">
                    </a>
                    <div class="card-body">
                        <p class="product-size">Size L</p>
                        <h5 class="product-name">PULL&BEAR Pullover Sweater</h5>
                        <p class="product-price">Rp 105.000</p>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card">
                    <a href="shop2.php">
                        <img src="../resource/images/Barang_Branded/Female/Top_s/Nike Sportswear Slim Crop.jpg" class="card-img-top" alt="Product Image">
                    </a>
                    <div class="card-body">
                        <p class="product-size">Size L</p>
                        <h5 class="product-name">Nike Sportswear Slim Crop</h5>
                        <p class="product-price">Rp 135.000</p>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card">
                    <img src="../resource/images/Barang_Branded\Male\Top_s\H&M Slim Fit Jacket.jpg" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <p class="product-size">Size XL</p>
                        <h5 class="product-name">Pleated High jacket</h5>
                        <p class="product-price">Rp 165.000</p>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="card">
                    <a href="shop2.php">
                        <img src="../resource/images/Barang_Branded\Male\Top_s\Levi_s Vintage Wellthread Jacket.jpg" class="card-img-top" alt="Product Image">
                    </a>
                    <div class="card-body">
                        <p class="product-size">Size L</p>
                        <h5 class="product-name">Horsebit Jacket</h5>
                        <p class="product-price">Rp 225.000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../layouts/footer.html"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
