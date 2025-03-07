<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/sell.css">
</head>
<body>
<?php include "../layouts/navbar.html"; ?>

<section class="sell-section">
    <h2>Sell Your Items</h2>
    <form action="../views/sell2.php" method="POST" enctype="multipart/form-data">
        <div class="sell-container">
            <!-- Product Section -->
            <div class="product-section">
                <h3>Product</h3>
                <div class="product-photo-grid">
                    <!-- Photo Items -->
                    <div class="photo-item">
                        <label for="add-photo">
                            <img src="{{ asset('images/Icon_Gambar/Semua_Icon/camera.png') }}" alt="Add Photo">
                        </label>
                        <span>Add Photo</span> <!-- Text moved below the image -->
                        <input type="file" id="add-photo" name="photo" style="display:none;">
                    </div>
                    <!-- Additional empty photo blocks for future uploads -->
                    <div class="photo-item"></div>
                    <div class="photo-item"></div>
                    <div class="photo-item"></div>
                    <div class="photo-item"></div>
                    <div class="photo-item"></div>
                </div>

                <textarea name="description" placeholder="Describe the items to be sold (brand, name, size, and condition)"></textarea>
            </div>

            <!-- Detail Information Section -->
            <div class="detail-section">
    <h3>Detail Information</h3>
    <label for="category">Category</label>
    <select name="category">
        <option value="">Category</option>
        <option value="Women's Fashion">Women's Fashion</option>
        <option value="Men's Fashion">Men's Fashion</option>
        <option value="Kid's Fashion">Kid's Fashion</option>
    </select>
    
    <label for="brand">Brand</label>
    <select name="brand">
        <option value="">Brand</option>
        <option value="Uniqlo">Uniqlo</option>
        <option value="Zara">Zara</option>
        <option value="Adidas">Adidas</option>
    </select>

    <label for="condition">Condition</label>
    <select name="condition">
        <option value="">Condition</option>
        <option value="New">New</option>
        <option value="Like New">Like New</option>
        <option value="Used">Used</option>
    </select>
    <label for="size">Color</label>
    <select name="color">
                    <option value="">Color</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Black">Black</option>
                </select>

    <label for="size">Size</label>
    <select name="size">
        <option value="">Size</option>
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
    </select>

    <label for="fabric">Type of Fabric</label>
    <select name="fabric">
        <option value="">Type of Fabric</option>
        <option value="Cotton">Cotton</option>
        <option value="Polyester">Polyester</option>
        <option value="Wool">Wool</option>
    </select>
</div>

        </div>

        <div class="submit-button">
            <button type="submit">Submit</button>
        </div>
    </form>
</section>

<?php include "../layouts/footer.html"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<script>
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const photoItem = document.querySelector('#add-photo').closest('.photo-item');
                const imgElement = photoItem.querySelector('img');
                imgElement.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>
</body>
</html>
