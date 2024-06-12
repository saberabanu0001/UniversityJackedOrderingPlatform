<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sejong University Jacket Ordering Platform</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .contact-section {
            padding: 40px;
            background-color: #f9f9f9;
            text-align: center;
        }
        .contact-section h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
        }
        .contact-section p {
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
    <div class="contact-section">
        <h2>Contact Us</h2>
        <p>Have questions or feedback? We'd love to hear from you!</p>
        <p>You can reach us by email at <span style="color: blue;">******@sejong.ac.kr</span></p>  
        <p>For inquiries related to orders or customer support, please call us at  <span style="color: blue;">010********</span></p>
        <p>Our office hours are Monday to Friday, 9:00 AM to 5:00 PM.</p>
    </div>
    <footer>
        <p>&copy; 2023 Sejong University. All rights reserved.</p>
    </footer>
</body>
</html>
