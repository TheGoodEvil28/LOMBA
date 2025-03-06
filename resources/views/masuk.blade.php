<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Voga&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/Logo_ReWard.png') }}" alt="Logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
       </div>
</nav>

<div class="container-fluid login-background" style="background-image: url('{{ asset('images/Icon_Gambar/Register_Signin/gambar1_shape.png') }}');">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-md-4">
            <div class="card login-box shadow-lg">
                <div class="card-body">
                    <h2 class="text-center mb-4">Sign In</h2>
                    <form action="{{ url('/') }}" method="GET">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label visually-hidden">Email/Phone Number</label>
                            <input type="text" class="form-control custom-input" id="email" name="email" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label visually-hidden">Password</label>
                            <input type="password" class="form-control custom-input" id="password" name="password" placeholder="Password">
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="#" class="forgot-password-link">Forgot Password?</a>
                        </div>

                        <div class="d-grid">
                            <a href="{{ url('/homepage') }}" class="btn btn-dark btn-block">Sign In</a>
                        </div>

                        <div class="text-center mt-3">
                            <p>Don't have an account yet? <a href="{{ url('/registrasi') }}" class="register-link">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
