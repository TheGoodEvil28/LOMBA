<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReWard - Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/settings.css">
</head>
<body> 
@include('layouts.navbar')
<main class="settings-page">
    <section class="settings-container">
        <!-- Profile Picture Section -->
        <div class="profile-picture-section">
            <img src="images/Icon_Gambar/Semua_Icon/user.png" alt="User Image" class="profile-picture">
            <input type="file" id="upload" name="profile_image" accept="image/*" class="upload-button">
            <label for="upload" class="btn-change-picture">Change Picture</label>
        </div>

        <!-- User Details Section -->
        <div class="user-details-section">
            <form action="/dashboard" method="POST">
                <h3 class="form-title">My Profile Details</h3>

                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" placeholder="First Name">
                </div>

                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" placeholder="Last Name">
                </div>

                <div class="form-group">
                    <label for="phone-number">Phone Number</label>
                    <input type="text" id="phone-number" placeholder="Your Phone Number">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Your Email">
                </div>

                <h3 class="form-title">Change Password</h3>

                <div class="form-group password-group">
                    <label for="old-password">Old Password</label>
                    <div class="password-container">
                        <input type="password" id="old-password" placeholder="Old Password">
                        <i class="fa fa-eye toggle-password" onclick="togglePassword('old-password')"></i>
                    </div>
                </div>

                <div class="form-group password-group">
                    <label for="new-password">New Password</label>
                    <div class="password-container">
                        <input type="password" id="new-password" placeholder="New Password">
                        <i class="fa fa-eye toggle-password" onclick="togglePassword('new-password')"></i>
                    </div>
                </div>

                <h3 class="form-title">Change Address</h3>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" placeholder="Enter your address"></textarea>
                </div>

                <div class="form-group">
                    <label for="province">Province</label>
                    <select id="province" onchange="populateCities()">
                        <option value="">Select Province</option>
                        <option value="BALI">BALI</option>
                        <option value="BANTEN">BANTEN</option>
                        <option value="JAWA BARAT">JAWA BARAT</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <select id="city">
                        <option value="">Select City</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="postal-code">Postal Code</label>
                    <input type="text" id="postal-code" placeholder="Enter postal code">
                </div>

                <a href="/dashboard" class="btn-save">Save Changes</a>
            </form>
        </div>
    </section>
</main>


<script>
function togglePassword(inputId) {
    const inputField = document.getElementById(inputId);
    const icon = inputField.nextElementSibling;

    if (inputField.type === "password") {
        inputField.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        inputField.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

// Dynamic city population based on selected province
function populateCities() {
    const province = document.getElementById("province").value;
    const citySelect = document.getElementById("city");

    // Clear existing options
    citySelect.innerHTML = '<option value="">Select City</option>';

    const cities = {
        "BALI": ["Denpasar", "Ubud"],
        "BANTEN": ["Serang", "Tangerang"],
        "JAWA BARAT": ["Bandung", "Bekasi", "Bogor"]
        // Add more city lists per province
    };

    if (cities[province]) {
        cities[province].forEach(function(city) {
            let option = document.createElement("option");
            option.value = city;
            option.textContent = city;
            citySelect.appendChild(option);
        });
    }
}
</script>

@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
