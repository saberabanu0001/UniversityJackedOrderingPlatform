<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Sejong University Jacket Ordering Platform</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .about-section {
            padding: 40px;
            background-color: #f9f9f9;
            text-align: center;
        }
        .about-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
        }
        .about-section h4 {
            font-size: 32px;
            margin-bottom: 20px;
            color: blue;
        }
        .about-section p {
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>
    <header>
        <div class="flex">
            <a href="home.php" class="logoImg">
                <img src="image/logoImg.PNG" alt="Logo">
            </a>
            <nav class="navbar">
                <a href="home.php" <?php if (basename($_SERVER['PHP_SELF']) == 'home.php') echo 'class="active"'; ?>>home</a>
                <a href="shop_now.php" <?php if (basename($_SERVER['PHP_SELF']) == 'shop_now.php') echo 'class="active"'; ?>>shop now</a>
                <a href="aboutUs.php" <?php if (basename($_SERVER['PHP_SELF']) == 'aboutUs.php') echo 'class="active"'; ?>>about us</a>
                <a href="contact.php" <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?>>contact</a>
            </nav>
            <div class="search">
                <input type="search" class="src" name="" placeholder="Search here">
                <button class="btnn">Search</button>
            </div>
            <div class="icons">
                <a href="wishlist.php" class="like-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
                <a href="cart.php" class="add-to-cart-btn"><i class="bx bx-cart"></i><sup>0</sup></a>
            </div>
        </div>
    </header>
    <div class="about-section">
        <h2>**********About Us*********</h2>
        <h4>Welcome to the Sejong University Jacket Ordering Platform!</h4>
        <p>We are dedicated to providing students, faculty, and alumni with high-quality, custom-designed jackets that represent the pride and spirit of Sejong University.</p>
        <p>Our platform was established with the mission to make it easy and convenient for everyone associated with Sejong University to order their official jackets. Whether you are a current student, a proud graduate, or a faculty member, our jackets are designed to celebrate your connection to Sejong University.</p>
        <p>Our mission is to offer high-quality jackets that symbolize the excellence and tradition of Sejong University. We strive to provide exceptional customer service and ensure that every order is handled with the utmost care and attention to detail.</p>
        <p>Thank you for choosing our platform. We are excited to help you show off your Sejong University pride!</p>
    </div>
    <footer>
        <p>&copy; 2023 Sejong University. All rights reserved.</p>
    </footer>
</body>
</html>
