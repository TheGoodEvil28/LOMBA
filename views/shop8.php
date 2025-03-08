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
</head>


<style>
    /* Order Success Section */
    .order-success-section {
        margin-top: 6rem; /* Adjusted for better spacing */
        margin-bottom: 3rem;
        width: 90%; /* Increased responsiveness */
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;
    }

    /* Title Styling */
    .order-title {
        font-weight: bold;
        font-size: 32px;
        color: #333;
        margin-bottom: 30px; 
    }

    /* Success Image */
    .order-image img {
        max-width: 100%;
        height: auto;
    }

    /* Payment Card */
    .payment-card {
        width: 100%;
        padding: 15px;
        border-radius: 10px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    /* Payment Logo */
    .payment-logo {
        width: 50px;
        height: auto;
    }

    /* Payment Amount */
    .payment-amount {
        font-size: 22px;
        font-weight: bold;
        color: #333;
    }

    /* Button Styling */
    .btn-large {
        width: 100%;
        background-color: #000;
        font-size: 18px;
        padding: 14px;
        border-radius: 8px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .order-success-section {
            width: 100%;
            padding: 0 15px;
        }

        .order-title {
            font-size: 28px;
        }

        .payment-card {
            flex-direction: row;
            justify-content: space-between;
            padding: 12px;
        }

        .payment-logo {
            width: 45px;
        }

        .payment-amount {
            font-size: 20px;
        }

        .btn-large {
            font-size: 16px;
            padding: 12px;
        }
    }

    @media (max-width: 576px) {
        .order-title {
            font-size: 26px;
        }

        .payment-logo {
            width: 40px;
        }

        .payment-amount {
            font-size: 18px;
        }

        .btn-large {
            font-size: 15px;
            padding: 10px;
        }
    }
</style>


<body>
<?php include "../layouts/navbar.html"; ?>
    <!-- Order Success Section -->
    <section class="order-success-section container text-center">
        <h2 class="order-title">Yeay, Order Successful!</h2>
        <div class="order-image">
            <img src="../resource/images/Icon_Gambar/Order_Sell/succesful order.png" alt="Order Success Image" class="img-fluid success-image">
        </div>
        <div class="payment-method-details">
            <div class="card payment-card">
                <div class="d-flex justify-content-between align-items-center">
                    <img src="../resource/images/Icon_Gambar/Order_Sell/Logo QRIS.png" alt="LinkAja" class="payment-logo">
                    <span class="payment-amount">Rp 256.500</span>
                </div>
            </div>
        </div>
        <a href="shop.php" class="btn btn-dark btn-large">Back to Shopping</a>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "../layouts/footer.html"; ?>
</body>
</html>