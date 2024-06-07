<?php
include("db_connect.php");
session_start();


$username = $_SESSION['username'];
$stmt = $db->prepare("SELECT * FROM login WHERE name = ? LIMIT 1");
$stmt->bind_param("s", $username); // s means strings
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user) {
    $name = $user['name'];
    $email = $user['email'];
} else {
    echo "User not found. Only logged in users can access the profile page";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="styles.css">
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
           <a href="logout.php" style="color: white;"> Logout </a>
           <a href="profile.php" style="color: white; margin-left: 10px;"> Edit Profile </a>
        </div>
    </div>
</header>
<div style="display: flex; align-items: center;">
    <div class="form register-form">
        <form action="profile_update.php" method="post">
            <h3>Edit Profile</h3>
            <input type="text" name="username" value="<?php echo $name ?>" required>
            <input type="email" name="email" value="<?php echo $email ?>" required>
            <button type="submit" class="bbtn">Update</button>
        </form>
    </div>
</div>
</body>
</html>
