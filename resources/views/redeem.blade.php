<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard - Redeem Points</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/redeem.css">
</head>
<body>

    @include('layouts.navbar')

    <main>
        <section class="redeem-header mt-2">
            <h1>Redeem Points</h1>
            <div class="points-display">
                <img src="{{ asset('images/Icon_Gambar/Semua_Icon/poin.png') }}" alt="XP Icon"> 
                Your Points: 100 XP
            </div>
        </section>

        <section class="redeem-grid">
            <div class="redeem-card">
                <img src="{{ asset('images/Logo_ReWard.png') }}" alt="ReWard Product">
                <h2>ReWard Product</h2>
                <p>Discount 10%</p>
                <div class="btn-container">
                    <a href="{{ url('/redeem2') }}" class="btn-redeem">Redeem</a>
                </div>
            </div>

            <div class="redeem-card">
                <img src="{{ asset('images/Icon_Gambar/ReWardPoint/logo_telkomsel.png') }}" alt="Telkomsel Product">
                <h2>Telkomsel Product</h2>
                <p>Pulsa 10.000</p>
                <div class="btn-container">
                    <a href="{{ url('/redeem2') }}" class="btn-redeem">Redeem</a>
                </div>
            </div>

            <div class="redeem-card">
                <img src="{{ asset('images/Icon_Gambar/ReWardPoint/logo_linkAja.png') }}" alt="LinkAja Balance">
                <h2>LinkAja Balance</h2>
                <p>Balance 10.000</p>
                <div class="btn-container">
                    <a href="{{ url('/redeem2') }}" class="btn-redeem">Redeem</a>
                </div>
            </div>
            <div class="redeem-card">
                <img src="{{ asset('images/Logo_ReWard.png') }}" alt="ReWard Product">
                <h2>ReWard Product</h2>
                <p>Discount 10%</p>
                <div class="btn-container">
                    <a href="{{ url('/redeem2') }}" class="btn-redeem">Redeem</a>
                </div>
            </div>

            <div class="redeem-card">
                <img src="{{ asset('images/Icon_Gambar/ReWardPoint/logo_telkomsel.png') }}" alt="Telkomsel Product">
                <h2>Telkomsel Product</h2>
                <p>Pulsa 10.000</p>
                <div class="btn-container">
                    <a href="{{ url('/redeem2') }}" class="btn-redeem">Redeem</a>
                </div>
            </div>

            <div class="redeem-card">
                <img src="{{ asset('images/Icon_Gambar/ReWardPoint/logo_linkAja.png') }}" alt="LinkAja Balance">
                <h2>LinkAja Balance</h2>
                <p>Balance 10.000</p>
                <div class="btn-container">
                    <a href="{{ url('/redeem2') }}" class="btn-redeem">Redeem</a>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
