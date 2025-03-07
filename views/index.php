<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thriftin - Toko Thrift</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/landing.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
</head>
<body>
<?php include "../layouts/navbar.html"; ?>
<!-- Hero Section -->
<section class="hero-section">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Text Content -->
                <div class="hero-text">
                <img src="../resource/images/Logo_Thriftin.png" alt="Thriftin Logo" class="img-fluid logo-image-hero">
                    <p class="hero-description">
                        <br>
                        We are the preloved fashion company in Indonesia and we offer A/B Grade second-hand clothes, shoes, bags, and other used textile products.
                    </p>
                    <br>
                    <div class="cta-buttons mt-4">
                        <a href="sell.php" class="btn sell-btn">Sell</a>
                        <a href="shop.php" class="btn shop-btn">Shop</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="../resource/images/Icon_Gambar/Landing_Page/gambar1.png" alt="Fashion" class="img-fluid hero-image">
            </div>
        </div>
    </div>
</section>

<!-- Slider Image Section -->
<section id="image-slider" class="container-fluid">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../resource/images/Icon_Gambar\Landing_Page\banner2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../resource/images/Icon_Gambar\Landing_Page\banner1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../resource/images/Icon_Gambar\Landing_Page\banner4f.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Shop Section -->
<section class="shop-section container my-5">
    <h2 class="section-title">SHOP</h2>
    <ul class="nav nav-tabs justify-content-left mb-4" id="productTabs">
        <li class="nav-item">
            <a class="nav-link active" href="#newArrivals" data-bs-toggle="tab">New Arrivals</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#popularProducts" data-bs-toggle="tab">Popular Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#bestSellers" data-bs-toggle="tab">Best Sellers</a>
        </li>
    </ul>

 <!-- Tab content -->
 <div class="tab-content">
        <!-- New Arrivals Tab -->
        <div class="tab-pane fade show active" id="newArrivals">
            <div class="row">
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images//Barang_Branded/Male/Top_s/Ralph Lauren Slim Fit Mesh Polo Shirt.jpg" class="card-img-top" alt="Ralph Lauren Polo Shirt">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size M</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Ralph Lauren Slim Fit Mesh Polo Shirt</h5>
                            <p class="product-price">Rp 255.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Female/Top_s/Uniqlo Cardigan Souffle.jpg" class="card-img-top" alt="Uniqlo Cardigan Souffle">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size L</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Cardigan Souffle Uniqlo</h5>
                            <p class="product-price">Rp 155.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Male/Top_s/Uniqlo Cotton Crew Neck Long Sleeved.jpg" class="card-img-top" alt="Uniqlo Cotton Crew Neck">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size L</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Uniqlo Cotton Crew Neck Long Sleeved</h5>
                            <p class="product-price">Rp 220.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Non_Branded/Kids/Top_s/Bomber Jacket.jpg" class="card-img-top" alt="Bomber Jacket">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size M</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Bomber Jacket</h5>
                            <p class="product-price">Rp 125.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popular Products Tab -->
        <div class="tab-pane fade" id="popularProducts">
            <div class="row">
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Female/Bottom_s/H&M Cotton Cargo Shorts.jpg" class="card-img-top" alt="H&M Cotton Cargo Shorts">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size L</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">H&M Cotton Cargo Shorts</h5>
                            <p class="product-price">Rp 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Female/Top_s/Adidas Women Future Bomber Jacket.jpg" class="card-img-top" alt="Adidas Future Bomber Jacket">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size M</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Adidas Women Future Bomber Jacket</h5>
                            <p class="product-price">Rp 241.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Female/Bottom_s/Prada_Mesh Floral Skirt.jpg" class="card-img-top" alt="Mesh Floral Skirt">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size L</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Mesh Floral Skirt</h5>
                            <p class="product-price">Rp 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Male/Top_s/Levi_s Vintage Wellthread Jacket.jpg" class="card-img-top" alt="Levi's Wellthread Jacket">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size L</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Levi's Vintage Wellthread Jacket</h5>
                            <p class="product-price">Rp 300.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Best Sellers Tab -->
        <div class="tab-pane fade" id="bestSellers">
            <div class="row">
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Male/Top_s/Nike Grey Long Sleeve.jpg" class="card-img-top" alt="Nike Grey Long Sleeve">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size M</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Nike Grey Long Sleeve</h5>
                            <p class="product-price">Rp 155.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Female/Shoes/Adidas Women_s Gazelle.jpg" class="card-img-top" alt="Adidas Gazelle">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size 39</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Adidas Women's Gazelle</h5>
                            <p class="product-price">Rp 355.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Female/Shoes/GUCCI  Horsebit Loafers.jpg" class="card-img-top" alt="GUCCI Horsebit Loafers">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size 38</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">GUCCI Horsebit Loafers</h5>
                            <p class="product-price">Rp 499.999</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="../resource/images/Barang_Branded/Male/Bottom_s/Nike SB Kearny Cargo Pants.jpg" class="card-img-top" alt="Nike SB Cargo Pants">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="product-size">Size L</p>
                                <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                            </div>
                            <h5 class="product-name">Nike SB Kearny Cargo Pants</h5>
                            <p class="product-price">Rp 155.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Centered More Link -->
<div class="more-link mt-3">
    <a href="shop.php">More <img src="../resource/images/Icon_Gambar/Semua_Icon/right_arrow.png" alt="Right Arrow" style="width: 16px; height: 16px;"></a>
</div>
<!-- Enhanced Thriftin About Us Section -->
<!-- About Us Section -->
<section class="about-reward-section container my-5">
    <div class="text-center">
        <h2 class="section-title" id="about">Who We Are</h2>
        <p class="about-text">
            At <strong>ThriftIn</strong>, we give fashion a second life. Our platform connects people with high-quality thrift fashion, ensuring affordability while promoting sustainability and ethical consumption. Join us in making fashion greener and smarter.
        </p>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-4 text-center sdg-icon-wrapper">
            <img src="../resource/images/Icon_Gambar/Landing_Page/sdg8.png" alt="SDG 8" class="sdg-icon">
            <p class="sdg-text">Decent Work & Economic Growth</p>
        </div>
        <div class="col-md-4 text-center sdg-icon-wrapper">
            <img src="../resource/images/Icon_Gambar/Landing_Page/sdg9.png" alt="SDG 9" class="sdg-icon">
            <p class="sdg-text">Industry, Innovation & Infrastructure</p>
        </div>
        <div class="col-md-4 text-center sdg-icon-wrapper">
            <img src="../resource/images/Icon_Gambar/Landing_Page/sdg12.png" alt="SDG 12" class="sdg-icon">
            <p class="sdg-text">Responsible Consumption & Production</p>
        </div>
    </div>
</section>


<!-- UNDP Quote Section -->
<section class="undp-quote-section">
    <div class="undp-quote-overlay">
        <div class="quote-text">
            <p>“2.3 million tons of textile waste were produced last year in Indonesia, with only around 7% being recycled.”</p>
            <p>- UNDP Indonesia -</p>
        </div>
    </div>
</section>

<!-- Bootstrap JS and Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"></script>
<?php include "../layouts/footer.html"; ?>

</body>
</html>
