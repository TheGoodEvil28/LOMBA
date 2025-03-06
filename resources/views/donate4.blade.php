<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - ReWard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/donate4.css">
</head>
<body>
    @include('layouts.navbar')

    <section class="thank-you-section">
        <h1>Thank You for Donating!</h1>
        <img src="{{ asset('images/Icon_Gambar/Donation/succesfull_donaion.png') }}" alt="Donation Success">
        <p>You have helped reduce the impact of global carbon emissions by 100 kg CO2e</p>
        <a href="{{ route('donate') }}" class="btn">Return to Donation Page</a>
    </section>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
