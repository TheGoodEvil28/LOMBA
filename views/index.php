<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thriftin - Toko Thrift</title>
    <link rel="icon" type="image/x-icon" href="../resource/images/logoT.png">
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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1300">
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
                    <img src="../resource/images\Barang_Branded\Male\Top_s\striped silk and cotton polo shirt.avif" 
                    data-hover-src="../resource/images\Barang_Branded\Male\Top_s\striped silk and cotton polo shirt man.avif"
                    class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size L</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Striped Silk and Cotton Polo Shirt</h5>
                    <p class="product-price">Rp 190.000</p>
                </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="../resource/images\Barang_Branded\Male\Bottom_s\Air Jordan Men's Trousers.png"
                data-hover-src="../resource/images\Barang_Branded\Male\Bottom_s\Air Jordan Men's Trousers man.png"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Air Jordan Men's Trousers</h5>
                    <p class="product-price">Rp 170.000</p>
                </div>
            </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="../resource/images\Barang_Branded\Male\Bottom_s\Nike Club Fleece.png"
                data-hover-src="../resource/images\Barang_Branded\Male\Bottom_s\Nike Club Fleece man.png"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Nike Club Fleece</h5>
                    <p class="product-price">Rp 250.000</p>
                </div>
            </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="../resource/images\Barang_Branded\Male\Bottom_s\Nike Kobe Men's Pleated Trousers.png"
                data-hover-src="../resource/images\Barang_Branded\Male\Bottom_s\Nike Kobe Men's Pleated Trousers man.png"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Nike Kobe Men's Pleated Trousers</h5>
                    <p class="product-price">Rp 185.000</p>
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
                    <img src="../resource/images\Barang_Branded\Male\Bottom_s\Nike Victory+ Men's Water-Repellent Golf Trousers.png"
                data-hover-src="../resource/images\Barang_Branded\Male\Bottom_s\Nike Victory+ Men's Water-Repellent Golf Trousers man.png"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Nike Victory+ Men's Water-Repellent Golf Trousers</h5>
                    <p class="product-price">Rp 210.000</p>
                </div>
            </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="../resource/images/Barang_Branded/Female/Top_s/Cardigan Souffle Uniqlo.avif" 
                        data-hover-src="../resource/images/Barang_Branded/Female/Top_s/Cardigan Souffle Uniqlo Woman.avif"
                        class="card-img-top hover-image" alt="Uniqlo Cardigan Souffle">
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
                        <img src="../resource/images/Barang_Branded/Male/Top_s/Uniqlo Cotton Crew Neck Long Sleeved.avif" 
                        data-hover-src="../resource/images/Barang_Branded/Male/Top_s/Uniqlo Cotton Crew Neck Long Sleeved Man.jpg" 
                        class="card-img-top hover-image" alt="Uniqlo Cotton Crew Neck">
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
                        <img src="../resource/images/Barang_Branded/Male/Top_s/Uniqlo Dry Sweat Full-Zip.avif" 
                        data-hover-src="../resource/images/Barang_Branded/Male/Top_s/Uniqlo Dry Sweat Full-Zip Man.avif" 
                        class="card-img-top hover-image" alt="Bomber Jacket">
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

        <!-- Best Sellers Tab -->
        <div class="tab-pane fade" id="bestSellers">
            <div class="row">
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="../resource/images/Barang_Branded/Kids/bottom_s/light denim blue.avif" 
                data-hover-src="../resource/images/Barang_Branded/Kids/bottom_s/light denim blue boy.avif"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size M</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Light Denim Blue</h5>
                    <p class="product-price">Rp 110.000</p>
                </div>
            </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="../resource/images/Barang_Branded/Kids/bottom_s/loose fit jeans.avif" 
                data-hover-src="../resource/images/Barang_Branded/Kids/bottom_s/loose fit jeans boy.avif"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size S</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Loose Fit Jeans</h5>
                    <p class="product-price">Rp 115.000</p>
                </div>
            </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="../resource/images/Barang_Branded/Female/Top_s/oversized cotton shirt.avif"
                 data-hover-src="../resource/images/Barang_Branded/Female/Top_s/oversized cotton shirt girl.avif"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size M</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Prada Oversized Cotton Shirt</h5>
                    <p class="product-price">Rp 200.000</p>
                </div>
            </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card">
                    <img src="../resource/images\Barang_Branded\Female\Bottom_s\rush stitch skirt with leather fringe.avif"
            data-hover-src="../resource/images\Barang_Branded\Female\Bottom_s\rush stitch skirt with leather fringe woman.avif"
            class="card-img-top hover-image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size M</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Rush Stitch Skirt with Leather Fringe</h5>
                    <p class="product-price">Rp 285.000</p>
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
<section class="about-thriftin-section container my-5">
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
<script>
document.querySelectorAll('.hover-image').forEach(img => {
  const originalSrc = img.src;
  const hoverSrc = img.dataset.hoverSrc;

  img.addEventListener('mouseenter', () => {
    // Set timeout for 1 second (1000ms)
    hoverTimeout = setTimeout(() => {
      img.style.opacity = '0';
      setTimeout(() => {
        img.src = hoverSrc;
        img.style.opacity = '1';
      }, 150); // This 150ms is for the fade effect
    }, 350);
  });

  img.addEventListener('mouseleave', () => {
    // Clear the timeout if mouse leaves before 1 second
    clearTimeout(hoverTimeout);
    img.style.opacity = '0';
    setTimeout(() => {
      img.src = originalSrc;
      img.style.opacity = '1';
    }, 150);
  });
});
</script>
<?php include "../layouts/footer.html"; ?>

</body>
</html>