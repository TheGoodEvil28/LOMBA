<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard - Donation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/donate1.css">
</head>
<body>
    <!-- Include the navbar -->
    @include('layouts.navbar')

    <!-- Donation Section -->
    <section class="donation-section">
        <div class="donation-container">
            <div class="donation-image">
                <img src="{{ asset('images/Icon_Gambar/Donation/gambar1.png') }}" alt="Donation Image">
            </div>
            <div class="donation-info">
                <h1 class="reward-title">ReWard Donation</h1>
                <p class="subheading">Donate Usable Secondhand Clothing</p>
                <p class="donation-details">We developed this program to assist in donation activities and utilization of used clothing that is still suitable for use. We work with partners who can recover clothes so that they can improve the quality of the clothes and make them reusable.</p>
                <button class="donate-btn" onclick="window.location.href='{{ route('donate2') }}'">Donate Now</button>
            </div>
        </div>

        <div class="info-sections">
            <!-- What You Need to Know Section -->
            <div class="what-you-need-to-know">
                <h3>What You Need to Know</h3>
                <ul>
                    <li>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/clothing.png') }}" alt="Clothing Icon" class="icon">
                        Donations can be in the form of clothes, pants, shoes, accessories, or bags that still have sales value for all ages.
                    </li>
                    <li>
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/reward_poin.png') }}" alt="Reward Icon" class="icon">
                        Every item sent will be given a reward in the form of points which can later be redeemed online via the ReWard website.
                    </li>
                </ul>
            </div>

            <!-- Product Standards Section -->
            <div class="product-standards">
                <h3>Product Standards</h3>
                <ul>
                    <li>No serious tears/holes</li>
                    <li>Complete condition (not just one pair, for example shoes)</li>
                    <li>Not underwear</li>
                    <li>Color is still acceptable</li>
                    <li>Stains can still be cleaned</li>
                    <li>All products will be cleaned first before being marketed by laundry partners</li>
                    <li>Minimal damage to the item will be stitched by a sewing partner</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Include the footer -->
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
