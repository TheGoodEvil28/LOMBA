<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/sell2.css">
</head>
<body>

<?php include "../layouts/navbar.html"; ?>

<section class="container-content">
    <!-- Product Details Section -->
    <div class="product-details">
        <h3>Product Details</h3>
        <div class="product-photo-grid">
            <img src="../resource/images/Barang_Non_Branded/Female/Top_s/Striped Sweater.jpg" alt="Product Photo">
            <div class="photo-item"><img src="../resource/images/Barang_Non_Branded/Kids/Top_s/Long-Sleeved Shirt.jpg" alt="Product Photo"></div>
            <div class="photo-item"><img src="../resource/images/Barang_Non_Branded/Male/Bottom_s/Casual Short.jpg" alt="Product Photo"></div>
        </div>

        <div class="item-details">
            <table>
                <tr>
                    <td><strong>Category</strong></td>
                    <td>: Outerwear</td>
                </tr>
                <tr>
                    <td><strong>Brand</strong></td>
                    <td>: WV Projects</td>
                </tr>
                <tr>
                    <td><strong>Condition</strong></td>
                    <td>: Good</td>
                </tr>
                <tr>
                    <td><strong>Color</strong></td>
                    <td>: Beige</td>
                </tr>
                <tr>
                    <td><strong>Size</strong></td>
                    <td>: XL</td>
                </tr>
                <tr>
                    <td><strong>Fabric</strong></td>
                    <td>: Cotton Fleece Premium</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- Price Details Section -->
    <div class="price-details">
        <h3>Estimated Price of Your Product</h3>
        <p class="price-info">Based on the price research, the estimated price for the product you sent is <strong>Rp 60,000</strong></p>
        
        <form action="../views/sell3.php" method="POST" enctype="multipart/form-data">

            <label for="input-price">Enter the price you want</label>
            <input type="text" id="input-price" name="price" placeholder="Input Price">

            <p class="total-price">Total Price: Rp 63,000</p>

            <button type="submit">Send Product</button>

        </form>
    </div>
</section>
<?php include "../layouts/footer.html"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
