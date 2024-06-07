<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejong University Jacket Ordering Platform</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="flex">
            <a href="home.php" class="logoImg">
                <img src="image/logoImg.PNG" alt="Logo">
            </a>
            <nav class="navbar"><!--here is the reference for 'making navbar active' from stack overflow,   https://stackoverflow.com/questions/44103092/php-basename-inside-echo-does-not-add-class-active-->
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
                <a href=" " class="like-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
                <a href=" " class="add-to-cart-btn"><i class="bx bx-cart"></i><sup>0</sup></a>
                
            </div>
        </div>
    </header>
    <div class="banner">
        <h1>Welcome to Sejong University<br> Jacket Ordering<br> Platform</h1>
        <button class="cn"><a href="shop_now.php">SHOP</a></button>
        <div class="form">
            <form method="post" action="login.php"> 
                <h3>Login Here</h3>
                <input type="text" name="username" placeholder="Enter your Username" required>
                <input type="password" name="password" placeholder="Enter your Password" required>
                <button type="submit" name="login_user" class="bbtn">Login</button>

                <p class="link">Don't have an account?</p>
                <button type="button" onclick="window.location.href='register.php';" class="bbtn">Register</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 Sejong University. All rights reserved.</p>
    </footer>
</body>
</html>

