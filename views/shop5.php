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
    <link rel="stylesheet" href="../resource/css/payment.css">
</head>
<body>
<?php include "../layouts/navbar.html"; ?>
<!-- Payment Section -->
<section class="payment-section container mt-5">
    <!-- Payment Details -->
    <div class="payment-details p-4 bg-white">
        <h5 class="text-center mb-3">Pay before August 30, 2024 at 23:59</h5>
        <h1 class="text-center mb-4 payment-amount">Rp 256.500</h1>
        
        <h4>Payment Method</h4>
        
        <!-- Bank Transfer Box -->
        <div class="card p-4 mb-4 payment-box">
            <h5>Bank Transfer</h5>
            <div class="bank-logos">
                <img src="../resource/images/Icon_Gambar/Order_Sell/Logo BCA.png" alt="BCA" class="payment-logo">
                <img src="../resource/images/Icon_Gambar/Order_Sell/Logo Mandiri.png" alt="Mandiri" class="payment-logo">
                <img src="../resource/images/Icon_Gambar/Order_Sell/Logo BRI.png" alt="BRI" class="payment-logo">
                <a href="shop7.php" target="_blank">
                <img src="../resource/images/Icon_Gambar/Order_Sell/Logo BNI.png" alt="BNI" class="payment-logo">
                </a>
            </div>
        </div>

        <!-- E-Wallet Box -->
        <div class="card p-2 mb-4 payment-box e-wallet-box">
            <h5>E-Wallet</h5>
            <a href="shop6.php" target="_blank">
                <img src="../resource/images/Icon_Gambar/thriftinPoint/logo_linkAja.png" alt="LinkAja" class="e-wallet">
            </a>
        </div>

        <!-- QR Payment Box -->
        <div class="card p-2 mb-4 d-flex justify-content-between align-items-left payment-box qr-payment-box">
            <h5>QR Payment</h5>
            <a href="shop8.php" target="_blank">
            <img src="../resource/images/Icon_Gambar/Order_Sell/Logo QRIS.png" alt="QR Payment" class="qr-payment">
            </a>
        </div>
    </div>

    <!-- Order Summary -->
    <div class="order-summary p-4">
        <h4 class="mb-4">Order Summary</h4>
        <div class="card p-4 order-summary-card">
            <div class="d-flex align-items-center">
                <img src="../resource/images\Barang_Branded\Female\Top_s\Prada Morocain wo girl.avif" alt="Product Image" class="img-fluid order-product-img" style="width: 100px;">
                <div class="ms-3">
                    <h5>Prada Morocain</h5>
                    <p>Rp 155.000 &nbsp; x1</p>
                </div>
            </div>
            <hr>
            <div class="summary-details">
                <div class="d-flex justify-content-between">
                    <p>Subtotal</p>
                    <p>Rp 240.000</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Shipping</p>
                    <p>Rp 15.000</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Shipping Insurance</p>
                    <p>Rp 1.500</p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between fw-bold total-section">
                <p>Total</p>
                <p>Rp 256.500</p>
            </div>
        </div>
    </div>

</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<?php include "../layouts/footer.html"; ?>
</body>
</html>
