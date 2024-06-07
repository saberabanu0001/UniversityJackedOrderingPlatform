<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div style="display: flex; align-items: center;">
        <!-- <h2 style="color:blue; text-align: center;">Welcome To Register Form</h2> -->
        <div class="form register-form">
            <form  action="register_post.php" method="post">
               
                <h3>Register Here</h3>
                <input type="text" name="username" placeholder="Enter your Username" required>
                <input type="email" name="email" placeholder="Enter your Email" required>
                <input type="password" name="password_1" placeholder="Enter your Password" required>
                <input type="password" name="password_2" placeholder="Confirm your Password" required>
                <button type="submit" name="reg_user" class="bbtn">Register</button>

                <p class="link">Already have an account?</p>
                <button type="button" onclick="window.location.href='home.php';" class="bbtn">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
