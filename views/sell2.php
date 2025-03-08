<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thriftin - Toko Thrift</title>
    <link rel="icon" type="image/x-icon" href="../resource/images/logoT.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/sell2.css">
    
</head>
<body>
    <?php include "../layouts/navbar.html"; ?>
    <section class="container-content">
        <div class="product-details">
            <h3><b>Product Details</b></h3>
            <div class="product-photo-grid">
                <img src="../resource/images/Barang_Non_Branded/Female/Top_s/Striped Sweater.jpg" alt="Product Photo">
                <img src="../resource/images/Barang_Non_Branded/Kids/Top_s/Long-Sleeved Shirt.jpg" alt="Product Photo">
                <img src="../resource/images/Barang_Non_Branded/Male/Bottom_s/Casual Short.jpg" alt="Product Photo">
            </div>
            <div class="item-details">
                <table>
                    <tr><td><strong>Category</strong></td><td>: Outerwear</td></tr>
                    <tr><td><strong>Brand</strong></td><td>: WV Projects</td></tr>
                    <tr><td><strong>Condition</strong></td><td>: Good</td></tr>
                    <tr><td><strong>Color</strong></td><td>: Beige</td></tr>
                    <tr><td><strong>Size</strong></td><td>: XL</td></tr>
                    <tr><td><strong>Fabric</strong></td><td>: Cotton Fleece Premium</td></tr>
                </table>
            </div>
        </div>
        <div class="price-details">
            <h3>Estimated Price of Your Product</h3>
            <p class="price-info">Based on research, the estimated price is <strong>Rp 60,000</strong></p>
            <form action="../views/sell3.php" method="POST">
                <label for="input-price">Enter your price</label>
                <input type="text" id="input-price" name="price" placeholder="Input Price">
                <p class="total-price">Total Price: Rp 63,000</p>
                <button type="submit"><b>Send Product</b></button>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "../layouts/footer.html"; ?>
   
</body>
</html>
