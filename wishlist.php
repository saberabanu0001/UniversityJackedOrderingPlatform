<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist - Sejong University Jacket Ordering Platform</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        :root {
            --muted-teal: #5e7d7e;
            --light-muted-teal: #d5e6e7;
            --box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #575151;
            box-shadow: var(--box-shadow);
            padding: 1rem;
        }

        .flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logoImg img {
            max-height: 50px;
        }

        .icons {
            display: flex;
            align-items: center;
        }

        .icons .cart-btn,
        .icons .like-btn,
        .icons .add-to-cart-btn {
            margin: 0 0.5rem;
            color: #fff; /* White color */
            position: relative;
        }

        .icons .cart-btn sup,
        .icons .like-btn sup {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 0.2rem 0.4rem;
            font-size: 0.8rem;
        }

        .user-box {
            position: absolute;
            top: 100%;
            right: 10px;
            background: #fff;
            box-shadow: var(--box-shadow);
            display: none;
            padding: 1rem;
        }

        .user-box p {
            margin: 0;
        }

        .user-box .btn {
            display: block;
            margin: 1rem 0;
            padding: 0.5rem 1rem;
            background: var(--muted-teal);
            color: #fff;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .user-box .logout-btn {
            background: var(--muted-teal);
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .wishlist-container {
            padding: 2rem;
        }

        .wishlist-item {
            background: #fff;
            box-shadow: var(--box-shadow);
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .wishlist-item img {
            max-width: 100px;
            margin-right: 1rem;
        }

        .wishlist-item-details {
            flex-grow: 1;
        }

        .wishlist-item-details h3 {
            margin: 0;
            font-size: 1.5rem;
        }

        .wishlist-item-details p {
            margin: 0.5rem 0;
        }

        .wishlist-item-actions {
            text-align: right;
        }

        .wishlist-item-actions .btn {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.5rem 1rem;
            background: var(--muted-teal);
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }

        footer {
            background-color: #fff;
            padding: 1rem;
            text-align: center;
            box-shadow: var(--box-shadow);
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar a {
            margin: 0 1rem;
            text-transform: capitalize;
            color: #fff; /* White text color */
            text-decoration: none;
            font-size: 1rem;
        }

        /* Responsive Styling */
        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                padding: 0;
            }

            .navbar a {
                margin: 0.5rem 0;
            }

            .icons {
                margin-left: auto;
            }
        }

        @media screen and (max-width: 576px) {
            .navbar a {
                margin: 0.5rem;
            }
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
                <a href="home.php">home</a>
                <a href="jackets.php">jackets</a>
                <a href="about.php">about us</a>
                <a href="contact.php">contact</a>
            </nav>
            <div class="icons">
                <a href="wishlist.php" class="like-btn"><i class="bx bx-heart"></i><sup>3</sup></a>
                <a href="cart.php" class="add-to-cart-btn"><i class="bx bx-cart"></i><sup>2</sup></a>
                <a href="search.php" class="search-btn"><i class="bx bx-search"></i></a>
                <a href="login.php" class="login-btn"><i class="bx bx-user"></i></a>
            </div>
        </div>
    </header>
    <div class="wishlist-container">
        <h1>My Wishlist</h1>
        <div class="wishlist-item">
            <img src="image/jacket1.jpg" alt="Jacket 1">
            <div class="wishlist-item-details">
                <h3>Jacket 1</h3>
                <p>Description of Jacket 1.</p>
                <p>Price: $99.99</p>
            </div>
            <div class="wishlist-item-actions">
                <a href="#" class="btn">Add to Cart</a>
                <a href="#" class="btn">Remove</a>
            </div>
        </div>
        <div class="wishlist-item">
            <img src="image/jacket2.jpg" alt="Jacket 2">
            <div class="wishlist-item-details">
                <h3>Jacket 2</h3>
                <p>Description of Jacket 2.</p>
                <p>Price: $129.99</p>
            </div>
            <div class="wishlist-item-actions">
                <a href="#" class="btn">Add to Cart</a>
                <a href="#" class="btn">Remove</a>
            </div>
        </div>
        <div class="wishlist-item">
            <img src="image/jacket3.jpg" alt="Jacket 3">
            <div class="wishlist-item-details">
                <h3>Jacket 3</h3>
                <p>Description of Jacket 3.</p>
                <p>Price: $149.99</p>
            </div>
            <div class="wishlist-item-actions">
                <a href="#" class="btn">Add to Cart</a>
                <a href="#" class="btn">Remove</a>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2023 Sejong University. All rights reserved.</p>
    </footer>
</body>
</html>
