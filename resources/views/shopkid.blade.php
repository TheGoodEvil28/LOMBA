@extends('layouts.footer')
@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard - Shop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/shop.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>

<!-- Shop Section -->
<section class="shop-section container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <!-- Tabs (Women, Men, Kid) -->
        <ul class="nav nav-tabs" id="categoryTabs">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('shopwomen') }}" data-category="women">Women</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('shopmen') }}" data-category="men">Men</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('shopkid') }}" data-category="kid">Kid</a>
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
                <li><a class="dropdown-item" href="#" data-category="">Kids</a></li>
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
        <button class="btn dropdown-toggle" type="button" id="sortFilter" data-bs-toggle="dropdown" aria-expanded="false">
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
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="m" data-price="85000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\top_s\H&M Cotton Sweatshirt.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size M</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">H&M Cotton Sweatshirt</h5>
                    <p class="product-price">Rp 85.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="l" data-price="185000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\top_s\H&M Polo Shirt.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size L</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">H&M Polo Shirt</h5>
                    <p class="product-price">Rp 185.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="s" data-price="175000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\top_s\Uniqlo Botton Graphic Short Sleeve T-Shirt.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size S</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Uniqlo Botton Graphic Short Sleeve T-Shirt</h5>
                    <p class="product-price">Rp 175.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="s" data-price="85000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\top_s\Ralph Lauren Kids Cotton Rugby Shirt.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size S</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Long-Sleeved Shirt</h5>
                    <p class="product-price">Rp 85.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="xl" data-price="185000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\bottom_s\H&M Relaxed Fit Jeans.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">H&M Relaxed Fit Jeans</h5>
                    <p class="product-price">Rp 185.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="m" data-price="175000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\bottom_s\Zara Twill Trousers With Multiple Pockets.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size M</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Zara Twill Trousers With Multiple Pockets</h5>
                    <p class="product-price">Rp 175.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="s" data-price="175000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\top_s\Uniqlo Botton Graphic Short Sleeve T-Shirt.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size S</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Uniqlo Botton Graphic Short Sleeve T-Shirt</h5>
                    <p class="product-price">Rp 175.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="tops" data-size="s" data-price="85000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\top_s\Ralph Lauren Kids Cotton Rugby Shirt.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size S</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Long-Sleeved Shirt</h5>
                    <p class="product-price">Rp 85.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="xl" data-price="185000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\bottom_s\H&M Relaxed Fit Jeans.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size XL</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">H&M Relaxed Fit Jeans</h5>
                    <p class="product-price">Rp 185.000</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3 product-card" data-category="bottoms" data-size="m" data-price="175000">
            <div class="card">
                <img src="{{ asset('images\Barang_Branded\Kids\bottom_s\Zara Twill Trousers With Multiple Pockets.jpg') }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="product-size">Size M</p>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" class="wishlist-icon" alt="Wishlist Icon" style="width: 24px; height: 24px;">
                    </div>
                    <h5 class="product-name">Zara Twill Trousers With Multiple Pockets</h5>
                    <p class="product-price">Rp 175.000</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Centered Load More Link -->
    <div class="more-link text-center mt-5">
        <a href="#">More <img src="{{ asset('images\Icon_Gambar\Semua_Icon\arrow_down.png') }}" alt="More Icon" style="width: 16px; height: 16px;"></a>
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

</script>

</body>
</html>
