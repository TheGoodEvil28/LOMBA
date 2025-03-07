<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<style>
    /* General Layout */
    body {
        background-color: #F6F6F6;
    }

    /* Contact Section */
    .contact-section {
        margin-top: 4rem;
        margin-bottom: 4rem;
    }

    /* Left Form with White Background */
    .contact-form {
        background-color: white;
        padding: 30px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .contact-title {
        font-weight: bold;
        font-size: 32px;
        color: #333;
        margin-bottom: 20px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        font-size: 16px;
    }

    .contact-form button {
        background-color: #000;
        color: white;
        padding: 10px;
        width: 100%;
        font-size: 18px;
        border-radius: 5px;
    }

    .contact-form button:hover {
        background-color: #333;
    }

    /* Right Section with Transparent Background */
    .contact-image {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }

    .contact-image img {
        max-width: 400px;
        height: auto;
    }

    /* Responsive Layout */
    @media (max-width: 768px) {
        .contact-form {
            margin-bottom: 20px;
        }

        .contact-image img {
            max-width: 350px;
        }
    }

    @media (max-width: 576px) {
        .contact-form input,
        .contact-form textarea {
            font-size: 14px;
        }

        .contact-form button {
            font-size: 16px;
        }

        .contact-image img {
            max-width: 300px;
        }
    }
</style>
<body>
<?php include "../layouts/navbar.html"; ?>
    <!-- Contact Us Section -->
    <section class="contact-section container">
        <div class="row">
            <!-- Left Side Form (White Background) -->
            <div class="col-md-6 contact-form">
                <h2 class="contact-title">Contact Us</h2>
                <form action="#">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <textarea rows="5" placeholder="Write Message"></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
            <!-- Right Side Image (No Background) -->
            <div class="col-md-6 contact-image">
                <img src="{{ asset('images\Icon_Gambar\Contact_Us\ilustrasi_contact us.png') }}" alt="Contact Illustration">
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include "../layouts/footer.html"; ?>
</body>
</html>