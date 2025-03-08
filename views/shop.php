
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thriftin - Toko Thrift</title>
    <link rel="icon" type="image/x-icon" href="../resource/images/logoT.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/shop.css">
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

    <!-- Filter Section -->
    <div class="filters-section d-flex">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="categoryFilter" data-bs-toggle="dropdown" aria-expanded="false">
                Category
            </button>
            <ul class="dropdown-menu" aria-labelledby="categoryFilter">
                <li><a class="dropdown-item" href="#" data-category="">Women</a></li>
                <li><a class="dropdown-item" href="#" data-category="tops">Tops</a></li>
                <li><a class="dropdown-item" href="#" data-category="bottoms">Bottom</a></li>
                <li><a class="dropdown-item" href="#" data-category="outerwear">Outerwear</a></li>
                <li><a class="dropdown-item" href="#" data-category="dresses">Dresses</a></li>
                <li><a class="dropdown-item" href="#" data-category="footwear">Footwear</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="sizeFilter" data-bs-toggle="dropdown" aria-expanded="false">
                Size
            </button>
            <ul class="dropdown-menu" aria-labelledby="sizeFilter">
                <li><a class="dropdown-item" href="#" data-size="">Size</a></li>
                <li><a class="dropdown-item" href="#" data-size="s">S</a></li>
                <li><a class="dropdown-item" href="#" data-size="m">M</a></li>
                <li><a class="dropdown-item" href="#" data-size="l">L</a></li>
                <li><a class="dropdown-item" href="#" data-size="xl">XL</a></li>
                <li><a class="dropdown-item" href="#" data-size="onesize">Shoe Size</a></li>
            </ul>
        </div>

        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="priceFilter" data-bs-toggle="dropdown" aria-expanded="false">
                Price
            </button>
            <ul class="dropdown-menu p-3">
                <input type="number" id="minPrice" class="form-control" placeholder="Rp Min">
                <span> - </span>
                <input type="number" id="maxPrice" class="form-control" placeholder="Rp Max">
                <div class="d-flex justify-content-between mt-3">
                    <button class="btn btn-dark" id="filterPriceBtn">Done</button>
                    <button class="btn btn-secondary" id="resetPriceBtn">Reset</button>
                </div>
            </ul>
        </div>

        <div class="dropdown sort-dropdown">
            <button class="btn dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="sortFilter" data-bs-toggle="dropdown" aria-expanded="false">
                Sort by
            </button>
            <ul class="dropdown-menu" aria-labelledby="sortFilter">
                <li><a class="dropdown-item" data-sort="low" href="#">Low to High</a></li>
                <li><a class="dropdown-item" data-sort="high" href="#">High to Low</a></li>
            </ul>
        </div>
    </div>

    <!-- Product Grid -->
    <div class="row g-4" id="product-grid">
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="240000">
            <div class="card">
                <a href="shop2.php">
                    <img src="../resource/images\Barang_Branded\Female\Top_s\Prada Morocain wo girl.avif" 
                    data-hover-src="../resource/images\Barang_Branded\Female\Top_s\Prada Morocain.avif"
                    class="card-img-top hover-image" alt="Product Image">
                </a>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size L</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <a href="shop2.php" class="product-link">
                        <h5 class="product-name">Prada Marocain top</h5>
                    </a>
                    <p class="product-price">Rp 240.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="210000">
            <div class="card">
            <img src="../resource/images\Barang_Branded\Female\Top_s\blue shirt prada.avif" 
                    data-hover-src="../resource/images\Barang_Branded\Female\Top_s\blue shirt prada woman.avif"
                    class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size L</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Prada Blue Shirt</h5>
                    <p class="product-price">Rp 210.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="m" data-price="200000">
            <div class="card">
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
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="s" data-price="120000">
            <div class="card">
                <img src="../resource/images\Barang_Branded\Female\Top_s\dark brown knitwear.avif" 
                data-hover-src="../resource/images/Barang_Branded/Female/Top_s/dark brown knitwear woman.avif"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size S</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Prada Dark Brown Knitwear</h5>
                    <p class="product-price">Rp 120.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="xl" data-price="300000">
            <div class="card">
                <img src="../resource/images\Barang_Branded\Female\Bottom_s\technical grey pants.avif"
                data-hover-src="../resource/images\Barang_Branded\Female\Bottom_s\technical grey pants woman.avif"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Prada Technical Grey Pants</h5>
                    <p class="product-price">Rp 3000.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="m" data-price="305000">
            <div class="card">
            <img src="../resource/images\Barang_Branded\Female\Bottom_s\sable trousers.png"
            data-hover-src="../resource/images\Barang_Branded\Female\Bottom_s\sable trousers woman.png"
            class="card-img-top hover-image" alt="Product Image">
                <div class="card-body hover-image">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size M</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Sable Trousers</h5>
                    <p class="product-price">Rp 305.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="bottoms" data-price="285000">
            <div class="card">
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
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="xl" data-price="285000">
            <div class="card">
                <img src="../resource/images\Barang_Branded\Female\Bottom_s\emboridered silk and wool skirt.avif"
                data-hover-src="../resource/images\Barang_Branded\Female\Bottom_s\emboridered silk and wool skirt woman.avif"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Embroidered Silk and Wool Skirt</h5>
                    <p class="product-price">Rp 285.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="footwear" data-size="onesize" data-price="245000">
            <div class="card">
                <img src="../resource/images\Barang_Branded\Female\Shoes\chuck 70 lunar new year two.png" 
                data-hover-src="../resource/images\Barang_Branded\Female\Shoes\chuck 70 lunar new year.png"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size 38</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Converse Chuck 70 Lunar New Year</h5>
                    <p class="product-price">Rp 245.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="footwear" data-size="onesize" data-price="305000">
            <div class="card">
                <img src="../resource/images\Barang_Branded\Female\Shoes\chuck taylor all star move petals and pearls high top two.png" 
                data-hover-src="../resource/images\Barang_Branded\Female\Shoes\chuck taylor all star move petals and pearls high top.png" 
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size 36</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Converse Chuck Taylor All Star Move Petals and Pearls High Top</h5>
                    <p class="product-price">Rp 305.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="footwear" data-size="onesize" data-price="125000">
            <div class="card">
                <img src="../resource/images\Barang_Branded\Female\Shoes\chuck 8- de luxe heel sandal two.png" 
                data-hover-src="../resource/images\Barang_Branded\Female\Shoes\chuck 8- de luxe heel sandal.png"
                class="card-img-top hover-image" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size 41</p>
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/love.png" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Converse Chuck 8-Deluxe Heel Sandal</h5>
                    <p class="product-price">Rp 125.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="footwear" data-size="onesize" data-price="220000">
            <div class="card">
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
    </div>
    

    <!-- Centered Load More Link -->
    <div class="more-link text-center mt-5">
        <a href="#">More <img src="../resource/images\Icon_Gambar\Semua_Icon\arrow_down.png" alt="More Icon" style="width: 16px; height: 16px;"></a>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
// Variables for filtering
const categoryItems = document.querySelectorAll('.dropdown-item[data-category]');
const sizeItems = document.querySelectorAll('.dropdown-item[data-size]');
const searchInput = document.getElementById('search-input');
const minPriceInput = document.getElementById('minPrice');
const maxPriceInput = document.getElementById('maxPrice');
const productGrid = document.getElementById('product-grid');

// Filtering products based on criteria
function filterProducts() {
    const selectedCategory = document.querySelector('.dropdown-item.active[data-category]')?.dataset.category || '';
    const selectedSize = document.querySelector('.dropdown-item.active[data-size]')?.dataset.size || '';
    const searchQuery = searchInput.value.toLowerCase();

    document.querySelectorAll('.product-card').forEach(product => {
        const productCategory = product.dataset.category;
        const productSize = product.dataset.size;
        const productPrice = parseInt(product.dataset.price);
        const productName = product.querySelector('.product-name').innerText.toLowerCase();

        const matchesCategory = !selectedCategory || productCategory === selectedCategory;
        const matchesSize = !selectedSize || productSize === selectedSize;
        const matchesSearch = productName.includes(searchQuery);
        const matchesPrice = (minPriceInput.value === '' || productPrice >= parseInt(minPriceInput.value)) &&
                             (maxPriceInput.value === '' || productPrice <= parseInt(maxPriceInput.value));

        if (matchesCategory && matchesSize && matchesSearch && matchesPrice) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

// Event listeners for filters
categoryItems.forEach(item => {
    item.addEventListener('click', function (event) {
        event.preventDefault();
        categoryItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
        filterProducts();
    });
});

sizeItems.forEach(item => {
    item.addEventListener('click', function (event) {
        event.preventDefault();
        sizeItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
        filterProducts();
    });
});

// Event listener for search functionality
searchInput.addEventListener('input', filterProducts);

// Event listener for price filtering
document.getElementById('filterPriceBtn').addEventListener('click', filterProducts);
document.getElementById('resetPriceBtn').addEventListener('click', function () {
    minPriceInput.value = '';
    maxPriceInput.value = '';
    filterProducts();
});
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
