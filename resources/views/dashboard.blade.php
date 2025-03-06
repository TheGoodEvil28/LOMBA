<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard - User Profile</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

    @include('layouts.navbar')

<main>
    <div class="profile-header">
        <div class="profile-info">
            <img src="{{ asset('images/Icon_Gambar/Semua_Icon/user.png') }}" alt="User Profile Picture">
            <div>
                <h2>Rian Maulana</h2>
                <p>@rian_m</p>
                <div class="profile-stats">
                    <div class="xp">
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/poin.png') }}" alt="XP Icon">
                        <span>100 XP</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-buttons">
            <a href="{{ url('leaderboard') }}" class="btn btn-leaderboard">Leaderboard</a>
            <a href="{{ url('redeem') }}" class="btn btn-redeem">Redeem</a>
        </div>
    </div>

    <div class="tabs">
        <a href="#" class="active" onclick="showSection('shopping-history')">Shopping History</a>
        <a href="#" onclick="showSection('donation-history')">Donation History</a>
        <a href="#" onclick="showSection('sales-history')">Sales History</a>
    </div>
    
    <!-- Shopping History Section -->
    <div id="shopping-history" class="history-list">
        <div class="history-item">
            <img src="{{ asset('images/Barang_Non_Branded/Female/Top_s/Cardigan Kimono.jpg') }}" alt="Cardigan Image">
            <p>Cardigan Souffle Uniqlo</p>
        </div>
        <p class="price">Rp 155.000</p>
    </div>

    <!-- Donation History Section -->
    <div id="donation-history" class="history-list hidden">
        <div class="history-item">
            <img src="{{ asset('images/Barang_Non_Branded/Female/Top_s/Denim Shirt.jpg') }}" alt="Denim Image">
            <p>Polo Ralph Lauren Men's Navy Denim</p>
        </div>
        <p class="impact">Impact: 100 Kg CO2e | 100 XP</p>
    </div>

    <!-- Sales History Section -->
    <div id="sales-history" class="history-list hidden">
        <div class="history-item">
            <img src="{{ asset('images/Barang_Non_Branded/Male/Top_s/Slim Fit Jacket.jpg') }}" alt="Jacket Image">
            <p>Patagonia Men's Fleece Jacket</p>
        </div>
        <p class="price">Rp 250.000</p>
    </div>
</main>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function showSection(sectionId) {
        // Hide all sections
        document.getElementById('shopping-history').classList.add('hidden');
        document.getElementById('donation-history').classList.add('hidden');
        document.getElementById('sales-history').classList.add('hidden');

        // Show the selected section
        document.getElementById(sectionId).classList.remove('hidden');

        // Remove 'active' class from all tabs and add to the clicked tab
        const tabs = document.querySelectorAll('.tabs a');
        tabs.forEach(tab => tab.classList.remove('active'));

        event.target.classList.add('active');
    }
</script>

</body>
</html>
