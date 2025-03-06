<!-- resources/views/layout/footer.blade.php -->
<link rel="stylesheet" href="css/nav.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Voga&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<script src="https://unpkg.com/heroicons@1.0.1/dist/solid.js"></script>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container d-flex justify-content-between">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="{{ asset('images/Logo_ReWard.png') }}" alt="ReWard Logo" class="img-fluid logo-image">
    </a>

    <!-- Button for Mobile Navbar Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Links -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('homepage') ? 'active' : '' }}" href="/homepage">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('shopwomen') ? 'active' : '' }}" href="/shopwomen">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('donate') ? 'active' : '' }}" href="/donate">DONATE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('sell') ? 'active' : '' }}" href="/sell">SELL</a>
        </li>
      </ul>
    </div>

    <!-- User Icons -->
    <div class="d-flex align-items-center position-relative">
      <a class="nav-link" href="#">
        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/notification.png') }}" alt="Notification Icon" style="width: 24px; height: 24px;">
      </a>
      <a class="nav-link" href="#">
        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/love.png') }}" alt="Love Icon" style="width: 24px; height: 24px;">
      </a>
      <a class="nav-link" href="#">
        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/gift.png') }}" alt="Gift Icon" style="width: 24px; height: 24px;">
      </a>
      <a class="nav-link" href="/shopwomen">
        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/shopping bag.png') }}" alt="Shopping Bag Icon" style="width: 24px; height: 24px;">
      </a>
      <!-- Profile Icon with Dropdown -->
      <a class="nav-link profile-link position-relative" href="#" id="profileIcon">
        <img src="{{ asset('images/Icon_Gambar/Semua_Icon/profile.png') }}" alt="Profile Icon" style="width: 24px; height: 24px;">
      </a>
      <!-- Dropdown Menu -->
      <div class="profile-dropdown d-none position-absolute" id="profileDropdown">
        <ul>
          <li><a href="/dashboard">Profile</a></li>
          <li><a href="/setting">Setting</a></li>
          <hr>
          <li><a href="/">Sign Out</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<script>
    document.getElementById('profileIcon').addEventListener('click', function(event) {
        event.preventDefault();
        var dropdown = document.getElementById('profileDropdown');
        dropdown.classList.toggle('d-none');
    });

    // Close the dropdown when clicking outside of it
    document.addEventListener('click', function(event) {
        var dropdown = document.getElementById('profileDropdown');
        var profileIcon = document.getElementById('profileIcon');
        if (!profileIcon.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('d-none');
        }
    });
</script>
