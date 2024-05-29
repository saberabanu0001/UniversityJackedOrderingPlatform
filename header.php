<?php
session_start();
?>

<header>
    <div class="flex">
        <a href="home.php" class="logoImg">
            <img src="images/logoImg.PNG" alt="Logo Image">
        </a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="jackets.php">Jackets</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>
        <div class="icons">
            <a href="wishlist.php" class="cart-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
            <a href="cart.php" class="cart-btn"><i class="bx bx-cart"></i><sup>0</sup></a>
            <i class="bx bx-search" id="search-btn"></i>
            <i class="bx bx-user" id="user-btn"></i>
            <div class="user-box">
                <p>Username: <span><?php echo isset($_SESSION['user_name']) ? htmlspecialchars($_SESSION['user_name']) : 'Guest'; ?></span></p>
                <p>Email: <span><?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'Not Logged In'; ?></span></p>
                <?php if (isset($_SESSION['user_name'])): ?>
                    <form method="post">
                        <button type="submit" name="logout" class="logout-btn">Log Out</button>
                    </form>
                <?php else: ?>
                    <a href="login.php" class="btn">Login</a>
                    <a href="register.php" class="btn">Register</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
