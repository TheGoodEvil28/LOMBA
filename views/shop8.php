<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thriftIn - Order Success</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<style>

    /* Order Success Section */
    .order-success-section {
        margin-top: 8rem; /* Increased top margin for better spacing with navbar */
        margin-bottom: 4rem;
        width: 100%;
        max-width: 560px; /* Adjust width for the entire section */
        margin-left: auto;
        margin-right: auto; /* Center the section */
    }

    /* Adjusted the spacing of the "Yeay, Order Successful!" text */
    .order-title {
        font-weight: bold;
        font-size: 36px;
        color: #333;
        margin-bottom: 50px; /* More bottom margin for spacing */
    }

    .order-image img {
        max-width: 350px;
        height: auto;
    }

    /* Adjusted the size of the payment card */
    .payment-card {
        width: 100%; /* Adjust to 100% of the section */
        padding: 14px;
        border-radius: 10px;
        border: 1px solid #ddd;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px; /* Added bottom margin */
    }

    /* Adjusted button width */
    .btn-large {
        width: 100%; /* Full width button */
        background-color: #000;
        font-size: 18px;
        padding: 15px;
    }

    /* Payment logo */
    .payment-logo {
        width: 50px;
    }

    .payment-amount {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        padding-left: 280px; /* Space between icon and text */
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .order-image img {
            max-width: 250px;
        }

        .payment-method-details .payment-amount {
            font-size: 20px;
        }

        .payment-card {
            padding: 15px;
        }

        .order-title {
            font-size: 30px;
        }

        .btn-large {
            font-size: 16px;
            padding: 12px;
        }
    }

    @media (max-width: 576px) {
        .order-image img {
            max-width: 200px;
        }

        .payment-method-details .payment-amount {
            font-size: 18px;
        }

        .btn-large {
            font-size: 14px;
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
                    <span class="payment-amount">Rp 171.500</span>
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