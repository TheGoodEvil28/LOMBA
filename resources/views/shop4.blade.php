@extends('layouts.footer')
@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard - Checkout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/order.css">
</head>
<body>

<!-- Order Section -->
<section class="order-section container mt-5 mb-5" style="background-color: #F6F6F6;">
    <div class="row">
        <!-- Order Summary -->
        <div class="col-md-6 order-summary p-4">
    <h4 class="mb-4">Order</h4>
    <div class="card p-3 shadow-sm">
        <div class="d-flex">
            <img src="{{ asset('images\Barang_Branded\Female\Top_s\Zara Floral Cotton Blouse.jpg') }}" alt="Product Image" class="img-fluid" style="width: 100px; height: auto; margin-right: 20px;">
            <div>
                <h5>Cardigan Souffle Uniqlo</h5>
                <p>Size L - Kondisi sangat baik</p>
                <p>Color: Blue <span class="circle-color" style="background-color: #587098; width: 15px; height: 15px; display: inline-block; border-radius:50px;"></span></p>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p>Subtotal</p>
            <p>Rp 155.000</p>
        </div>
        <div class="d-flex justify-content-between">
            <p>Shipping</p>
            <p id="shipping-amount">Rp 15.000</p>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <p>Total</p>
            <p id="total-amount">Rp 170.000</p>
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

        <a href="/shop5" class="btn btn-dark w-100">Proceed to Delivery</a>
    </form>
    <div class="purchase-guarantee">
        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/insurance.png') }}" alt="Insurance Icon" style="width: 24px; height: 24px; margin-right: 8px;">
        Safe with ReWard Purchase Guarantee
    </div>
</div>

    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
