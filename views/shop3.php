<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thriftin - Toko Thrift</title>
    <link rel="icon" type="image/x-icon" href="../resource/images/logoT.png">

    <!-- Bootstrap & Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resource/css/order.css">
</head>
<body>
    <?php include "../layouts/navbar.html"; ?>

    <!-- Order Section -->
    <section class="order-section container my-5">
        <div class="row g-4">
            <!-- Order Summary -->
            <div class="col-lg-6">
                <div class="order-summary p-4 shadow-sm bg-light rounded">
                    <h4 class="mb-4">Order</h4>
                    <div class="card p-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <img src="../resource/images/Barang_Branded/Female/Top_s/Prada Morocain wo girl.avif" 
                                alt="Product Image" class="img-fluid rounded" style="width: 100px; height: auto; margin-right: 20px;">
                            <div>
                                <h5 class="mb-1">Prada Morocain</h5>
                                <p class="text-muted mb-1">Size L - Good Condition</p>
                                <p class="text-muted mb-0">Color: White 
                                    <span class="circle-color d-inline-block" 
                                        style="background-color: #587098; width: 15px; height: 15px; border-radius: 50%;">
                                    </span>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p>Subtotal</p>
                            <p>Rp 240.000</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Shipping</p>
                            <p>In the next stage</p>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between fw-bold">
                            <p>Total</p>
                            <p>Rp 240.000</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Address Section -->
            <div class="col-lg-6">
                <div class="address-section p-4 bg-white shadow-sm rounded">
                    <h4 class="mb-4">Address</h4>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="phone" placeholder="Your Phone Number">
                        </div>
                        <div class="mb-3">
                            <label for="address-search" class="form-label">Find Your Address</label>
                            <input type="text" class="form-control" id="address-search" placeholder="Example: street/building/housing">
                        </div>
                        <div class="mb-3">
                            <label for="full-address" class="form-label">Full Address</label>
                            <textarea class="form-control" id="full-address" rows="3" placeholder="Make sure the address is correct"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="additional-details" class="form-label">Other Details (Optional)</label>
                            <input type="text" class="form-control" id="additional-details" placeholder="Example: block, unit number or landmark">
                        </div>
                        <a href="shop4.php" class="btn btn-dark w-100">Proceed to Delivery</a>
                    </form>
                    <div class="purchase-guarantee d-flex align-items-center mt-3">
                        <img src="../resource/images/Icon_Gambar/Semua_Icon/insurance.png" alt="Insurance Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                        <small class="text-muted">Safe with Thriftin Purchase Guarantee</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "../layouts/footer.html"; ?>
</body>
</html>
