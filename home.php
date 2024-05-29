<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejong University Jacket Ordering Platform</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
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
        .icons .like-btn {
            margin: 0 0.5rem;
            color: #fff; /* White color */
            position: relative;
        }

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

        .banner {
            background-image: url('image/university image.jpg');
            background-size: contain;
            background-position: center;
            height: 80vh;
            width: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(144, 12, 87);
            text-align: center;
            padding-top: 1vh;
        }

        .banner h1 {
            font-size: 3rem;
            text-transform: uppercase;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
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
            background-color: #575151;
            padding: 1rem;
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

        /* Jackets Section */
        .jackets-section {
            padding: 2rem;
        }

        .section-title {
            font-size: 2rem;
            color: var(--muted-teal);
            text-align: center;
            margin-bottom: 1rem;
        }

        .jacket-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .jacket-card {
            background-color: #fff;
            box-shadow: var(--box-shadow);
            margin: 1rem;
            padding: 1rem;
            border-radius: 8px;
            flex: 0 0 30%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .jacket-card img {
            max-width: 100%;
            border-radius: 8px;
        }

        .jacket-card h2 {
            margin: 1rem 0 0.5rem 0;
            font-size: 1.5rem;
            color: var(--muted-teal);
        }

        .jacket-card p {
            margin: 0.5rem 0;
        }

        .jacket-card .price {
            font-size: 1.2rem;
            color: #e67e22;
            margin: 0.5rem 0;
        }

        .jacket-card .btn {
            background-color: var(--muted-teal);
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0.5rem 0;
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

            .jacket-card {
                flex: 0 0 45%;
            }
        }

        @media screen and (max-width: 576px) {
            .navbar a {
                margin: 0.5rem;
            }

            .jackets-section {
                padding: 1rem;
            }

            .jacket-card {
                flex: 0 0 100%;
                margin: 0.5rem 0;
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
                <a href="wishlist.php" class="like-btn"><i class="bx bx-heart"></i><sup>0</sup></a>
                <a href="cart.php" class="add-to-cart-btn"><i class="bx bx-cart"></i><sup>0</sup></a>
                <a href="search.php" class="search-btn"><i class="bx bx-search"></i></a>
                <a href="login.php" class="login-btn"><i class="bx bx-user"></i></a>
            </div>
        </div>
    </header>
    <div class="banner">
        <h1>Welcome to Sejong University Jacket Ordering Platform</h1>
    </div>

    <!-- Computer Science Jackets Section -->
    <div class="jackets-section">
        <h2 class="section-title">Computer Science Jackets</h2>
        <div class="jacket-cards">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="jacket-card">
                    <img src="image/jacket.png" alt="Jacket">
                    <h2>Department Jacket</h2>
                    <p>Department of Computer Science</p>
                    <p class="price">$50.00</p>
                    <button class="btn add-to-cart">Add to Cart</button>
                    <button class="btn add-to-wishlist">Add to Wishlist</button>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Business Administration Jackets Section -->
    <div class="jackets-section">
        <h2 class="section-title">Business Administration Jackets</h2>
        <div class="jacket-cards">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="jacket-card">
                    <img src="image/jacket.png" alt="Jacket">
                    <h2>Department Jacket</h2>
                    <p>Department of Business Administration</p>
                    <p class="price">$50.00</p>
                    <button class="btn add-to-cart">Add to Cart</button>
                    <button class="btn add-to-wishlist">Add to Wishlist</button>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Professors Jackets Section -->
    <div class="jackets-section">
        <h2 class="section-title">Professors Jackets</h2>
        <div class="jacket-cards">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="jacket-card">
                    <img src="image/jacket.png" alt="Jacket">
                    <h2>Department Jacket</h2>
                    <p>Professors</p>
                    <p class="price">$50.00</p>
                    <button class="btn add-to-cart">Add to Cart</button>
                    <button class="btn add-to-wishlist">Add to Wishlist</button>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- ISA Jackets Section -->
    <div class="jackets-section">
        <h2 class="section-title">ISA Jackets</h2>
        <div class="jacket-cards">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="jacket-card">
                    <img src="image/jacket.png" alt="Jacket">
                    <h2>Department Jacket</h2>
                    <p>ISA</p>
                    <p class="price">$50.00</p>
                    <button class="btn add-to-cart">Add to Cart</button>
                    <button class="btn add-to-wishlist">Add to Wishlist</button>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Global Buddy Jackets Section -->
    <div class="jackets-section">
        <h2 class="section-title">Global Buddy Jackets</h2>
        <div class="jacket-cards">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div class="jacket-card">
                    <img src="image/jacket.png" alt="Jacket">
                    <h2>Department Jacket</h2>
                    <p>Global Buddy</p>
                    <p class="price">$50.00</p>
                    <button class="btn add-to-cart">Add to Cart</button>
                    <button class="btn add-to-wishlist">Add to Wishlist</button>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Sejong University. All rights reserved.</p>
    </footer>
    <script>
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', () => {
                const cartCount = document.querySelector('.add-to-cart-btn sup');
                cartCount.textContent = parseInt(cartCount.textContent) + 1;
            });
        });

        document.querySelectorAll('.add-to-wishlist').forEach(button => {
            button.addEventListener('click', () => {
                const likeCount = document.querySelector('.like-btn sup');
                likeCount.textContent = parseInt(likeCount.textContent) + 1;
            });
        });
    </script>
</body>
</html>
