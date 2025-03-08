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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/order.css">
</head>
<body>
<?php include "../layouts/navbar.html"; ?>
<!-- Order Section -->
<section class="order-section container mt-5 mb-5" style="background-color: #F6F6F6;">
    <div class="row">
        <!-- Order Summary -->
        <div class="col-md-6 order-summary p-4">
    <h4 class="mb-4">Order</h4>
    <div class="card p-3 shadow-sm">
        <div class="d-flex">
            <img src="../resource/images\Barang_Branded\Female\Top_s\Prada Morocain wo girl.avif" alt="Product Image" class="img-fluid" style="width: 100px; height: auto; margin-right: 20px;">
            <div>
                <h5>Prada Morocain</h5>
                <p>Size L - Good Condition</p>
                <p>Color: White <span class="circle-color" style="background-color: #587098; width: 15px; height: 15px; display: inline-block; border-radius:50px;"></span></p>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p>Subtotal</p>
            <p>Rp 240.000</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Shipping</p>
            <p id="shipping-amount">Rp 15.000</p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p>Total</p>
            <p id="total-amount">Rp 255.000</p>
        </div>
    </div>
</div>


        <!-- Address Section with White Background -->
        <div class="col-md-6 address-section p-4 bg-white shadow-sm">
    <h4 class="mb-4">Address</h4>
    <form id="shipping-form">
        <div class="mb-3">
            <label for="full-address" class="form-label">Full Address</label>
            <textarea class="form-control" id="full-address" rows="3" placeholder="Sunde Laboan Suite 973 87285 Fern Pine, East Weldonstad, SC 60534"></textarea>
        </div>
        <div class="mb-3">
            <label for="additional-details" class="form-label">Other Details (Optional)</label>
            <input type="text" class="form-control" id="additional-details" placeholder="Example: block, unit number or benchmark">
        </div>

        <div class="mb-3">
            <label for="shipping-method" class="form-label">Shipping</label>
            <select id="shipping-method" class="form-select" onchange="updateShipping()">
                <option value="15000">Standard - Rp 15.000</option>
                <option value="30000">Express - Rp 30.000</option>
            </select>
        </div>

        <a href="shop5.php" class="btn btn-dark w-100">Proceed to Delivery</a>
    </form>
    <div class="purchase-guarantee">
        <img src="../resource/images/Icon_Gambar/Semua_Icon/insurance.png" alt="Insurance Icon" style="width: 24px; height: 24px; margin-right: 8px;">
        Safe with thriftin Purchase Guarantee
    </div>
</div>

    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php include "../layouts/footer.html"; ?>
</body>
</html>

<script>
    function updateShipping() {
        const shippingMethod = document.getElementById('shipping-method');
        const shippingValue = parseInt(shippingMethod.value);
        const subtotal = 155000; // Assuming subtotal is always Rp 155.000
        const totalElement = document.getElementById('total-amount');
        const shippingElement = document.getElementById('shipping-amount');
        
        // Update shipping and total amount
        shippingElement.textContent = "Rp " + shippingValue.toLocaleString();
        totalElement.textContent = "Rp " + (subtotal + shippingValue).toLocaleString();
    }
</script>
