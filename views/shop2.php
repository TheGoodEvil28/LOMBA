
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thriftIn - Shop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/shopdetail.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
<?php include "../layouts/navbar.html"; ?>
<!-- Shop Section -->
<section class="shop-section container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <!-- Tabs (Women, Men, Kid) -->
        <ul class="nav nav-tabs" id="categoryTabs">
            <li class="nav-item">
                <a class="nav-link active" href="shop.php" data-category="women">Women</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopmen.php" data-category="men">Men</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopkid.php" data-category="kid">Kid</a>
            </li>
        </ul>

        <!-- Search Bar -->
        <div class="input-group search-wrapper">
            <input type="text" class="form-control search-bar" placeholder="Search for items" id="search-input">
        </div>
    </div>
    
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="shop.php">Women</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cardigans</li>
        </ol>
    </nav>

    <!-- Product Details Section -->
    <!-- Product Details Section -->
<div class="row">
    <div class="col-lg-6">
        <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../resource/images/Barang_Branded/Female/Top_s/Zara Floral Cotton Blouse.jpg" class="d-block w-100" alt="Product Image">
                </div>
                <div class="carousel-item">
                    <img src="../resource/images/Barang_Branded/Female/Top_s/Zara Floral Cotton Blouse.jpg" class="d-block w-100" alt="Product Image">
                </div>
                <!-- Add more images as needed -->
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <h3 class="product-name">Cardigan Souffle Uniqlo</h3>
        <p>Size L - Kondisi sangat baik</p>
        <p class="product-price">Rp 155.000</p>
        <p>Color: Blue <span class="circle-color" style="background-color: #587098; width: 15px; height: 15px; display: inline-block; border-radius:50px;"></span></p>

        <!-- Liked by Section -->
        <p class="mt-4">
            <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
            Liked by 1 people
        </p>

        <!-- Shop and Add to Cart Buttons -->
        <a href="shop3.php">
            <button class="btn btn-dark w-50 mb-2">Shop Now</button>
        </a>
        <a href="#">
            <button class="btn btn-outline-dark w-50">+ To Cart</button>
        </a>

        <div class="mt-1 d-flex align-items-center">
            <img src="../resource/images/Icon_Gambar/Semua_Icon/insurance.png" alt="Insurance Icon" style="width: 24px; height: 24px; margin-right: 8px;">
            Semua produk telah melalui proses pengecekan dan memenuhi standar kualitas
        </div>

        <!-- Product Description -->
        <div class="product-description mt-4">
            <h5>Description</h5>
            <p>Cardigan Hitam Rajut</p>
            <p>Brand Uniqlo</p>
            <p>LD 95 - 100</p>
            <p>P 60</p>
            <p>No Minus, Kancing Aman</p>
            <p>Size Tag L</p>
            <!-- Time since product was uploaded -->
            <small class="text-muted">1 hari yang lalu</small>
        </div>
    </div>
</div>

<!-- Product Grid -->
<div class="row g-4" id="product-grid">
    <h1 class="product-name">You Might Also Like</h1>
    <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="185000">
        <div class="card">
            <a href="shop2.php">
                <img src="../resource/images\Barang_Branded\Female\Top_s\PULL&BEAR Pullover Sweater.jpg" class="card-img-top" alt="Product Image">
            </a>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="product-size">Size L</p>
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                </div>
                <a href="shop2.php" class="product-link">
                    <h5 class="product-name">PULL&BEAR Pullover Sweatert</h5>
                </a>
                <p class="product-price">Rp 185.000</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="185000">
        <div class="card">
            <a href="shop2.php">
                <img src="../resource/images\Barang_Branded\Female\Top_s\Nike Sportswear Slim Crop.jpg" class="card-img-top" alt="Product Image">
            </a>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="product-size">Size L</p>
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                </div>
                <a href="shop2.php" class="product-link">
                    <h5 class="product-name">H&M Fitted Blazer Jacket</h5>
                </a>
                <p class="product-price">Rp 185.000</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="xl" data-price="185000">
            <div class="card">
                <img src="../resource/images\Barang_Non_Branded\Female\Bottom_s\Pleated High Waisted  Pants.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Pleated High Waisted Pants</h5>
                    <p class="product-price">Rp 185.000</p>
                </div>
            </div>
        </div>
    <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="185000">
        <div class="card">
            <a href="shop2.php">
                <img src="../resource/images\Barang_Branded\Female\Shoes\GUCCI  Horsebit Loafers.jpg" class="card-img-top" alt="Product Image">
            </a>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="product-size">Size L</p>
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                </div>
                <a href="shop2.php" class="product-link">
                    <h5 class="product-name">H&M Fitted Blazer Jacket</h5>
                </a>
                <p class="product-price">Rp 185.000</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="185000">
        <div class="card">
            <a href="shop2.php">
                <img src="../resource/images\Barang_Branded\Male\Top_s\Uniqlo Flannel shirt.jpeg" class="card-img-top" alt="Product Image">
            </a>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="product-size">Size L</p>
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                </div>
                <a href="shop2.php" class="product-link">
                    <h5 class="product-name">H&M Fitted Blazer Jacket</h5>
                </a>
                <p class="product-price">Rp 185.000</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="185000">
        <div class="card">
            <a href="shop2.php">
                <img src="../resource/images\Barang_Branded\Female\Shoes\New Balance Women_s Shoes.jpg" class="card-img-top" alt="Product Image">
            </a>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="product-size">Size L</p>
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                </div>
                <a href="shop2.php" class="product-link">
                    <h5 class="product-name">H&M Fitted Blazer Jacket</h5>
                </a>
                <p class="product-price">Rp 185.000</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="185000">
        <div class="card">
            <a href="shop2.php">
                <img src="../resource/images\Barang_Branded\Female\Shoes\Michael Kors Aurora Sneaker.jpg" class="card-img-top" alt="Product Image">
            </a>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="product-size">Size L</p>
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                </div>
                <a href="shop2.php" class="product-link">
                    <h5 class="product-name">H&M Fitted Blazer Jacket</h5>
                </a>
                <p class="product-price">Rp 185.000</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="185000">
        <div class="card">
            <a href="shop2.php">
                <img src="../resource/images\Barang_Branded\Female\Shoes\Adidas Women_s Gazelle.jpg" class="card-img-top" alt="Product Image">
            </a>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="product-size">Size L</p>
                    <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                </div>
                <a href="shop2.php" class="product-link">
                    <h5 class="product-name">H&M Fitted Blazer Jacket</h5>
                </a>
                <p class="product-price">Rp 185.000</p>
            </div>
        </div>
    </div>
</div>

</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php include "../layouts/footer.html"; ?>
</body>
</html>
