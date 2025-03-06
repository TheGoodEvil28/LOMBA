<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard - Donation Item Details</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/donate3.css">
</head>

<body>

    @include('layouts.navbar')

    <section class="donation-details-container">
        <!-- Left Section (Donation Item Details) -->
        <div class="left-section">
            <h3 class="section-title">Donation Item Details</h3>

            <div class="sender-identity">
                <label for="sender-identity">Sender Identity</label>
                <textarea id="sender-identity" readonly>Name: Rian Maulana
Phone: +6282456734189
Address: Jl Merdeka No. 56, Margasari, Bandung, Kota Bandung, Jawa Barat, 40286, Indonesia
                </textarea>
            </div>

            <div class="item-details">
                <label for="type">Types of Donation Items</label>
                <select id="type" name="type">
                    <option>Clothes</option>
                    <option>Shoes</option>
                    <option>Accessories</option>
                </select>

                <label for="number">Number of Donated Items</label>
                <input type="number" id="number" name="number" value="1">
            </div>

            <div class="item-description">
                <label for="description">Item Description</label>
                <textarea id="description" readonly>Polo Ralph Lauren Men's Navy Denim
Size: L
Length: 58 cm
Color: Navy
Excellent condition—embossed button, rugged & thick material, intense colors, hard to find. Levis Type II alternative.
                </textarea>
            </div>

            <div class="item-photos">
                <strong>Item Photos</strong>
                <div>
                    <img src="{{ asset('images\Barang_Non_Branded\Male\Top_s\Flannel Shirt.jpg') }}" alt="Photo 1">
                    <img src="{{ asset('images\Barang_Non_Branded\Male\Top_s\Slim Fit Jacket.jpg') }}" alt="Photo 2">
                </div>
            </div>
        </div>

        <!-- Right Section (Pickup Date) -->
        <div class="right-section">
            <h3 class="section-title">Pickup Date</h3>
            <div class="pickup-section">
                <label for="pickup-date">Determine the Pick-up Date for Donated Items</label>
                <input type="date" id="pickup-date" name="pickup_date">
            </div>

            <button class="submit-btn" onclick="window.location.href='{{ route('donate4') }}'">Send Donation</button>
        </div>
    </section>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
