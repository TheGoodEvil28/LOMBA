<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - ReWard</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sell3.css">
</head>
<body>

    @include('layouts.navbar')
    <section class="thank-you-section">
    <h1>Thank You</h1>
    <p>Your request will be processed immediately<span class="loading-dots"></span></p>
    <img src="{{ asset('images\Icon_Gambar\Order_Sell\sell_success.png') }}" alt="Thank You Image">
    <a href="{{ url('/homepage') }}" class="btn">Return to Home Page</a>
    </section>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
