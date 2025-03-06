@extends('layouts.footer')
@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard - Donation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/donate2.css">
</head>

<body style="background-color: #FDFDFD;">
    <section class="donation-section">
        <h2 class="section-title">Detail Information</h2>
        <form action="{{ route('donate2') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" placeholder="Name" name="name">
                <select name="category">
                    <option value="">Donation Item Category</option>
                    <option value="clothes">Clothes</option>
                    <option value="shoes">Shoes</option>
                    <option value="accessories">Accessories</option>
                </select>
            </div>
            <div class="form-group">
                <select name="province">
                    <option value="">Select Province</option>
                    <option value="West Java">West Java</option>
                    <option value="Central Java">Central Java</option>
                </select>
                <input type="number" placeholder="Number of Donated Items" name="items_number">
            </div>
            <div class="form-group full">
                <textarea name="description" placeholder="Describe the items to be donated (brand, name, size, and condition)"></textarea>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Phone Number" name="phone">
                <div class="file-upload">
                    <label for="file-upload" class="file-upload-label">
                        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/picture.png') }}" alt="Upload Icon" class="upload-icon">
                        Upload Item Photos
                    </label>
                    <input id="file-upload" type="file" name="photos[]" multiple hidden>
                </div>
            </div>
            <div class="form-group full">
                <input type="text" placeholder="Full Address" name="address">
            </div>
            <div class="submit-btn">
    <a href="{{ route('donate3') }}" class="donate-btn">Start Donating</a>
</div>

        </form>
    </section>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
