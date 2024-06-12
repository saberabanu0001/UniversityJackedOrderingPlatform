<?php
include('db_connect.php');   

// REGISTER USER
if (isset($_POST['username'])) {
    $name = $db->real_escape_string($_POST['username']);
    $email = $db->real_escape_string($_POST['email']);
    $password_1 = $db->real_escape_string($_POST['password_1']);
    $password_2 = $db->real_escape_string($_POST['password_2']);

    // echo $name."<br>"; 
    // echo $email."<br>"; 
    // echo $password_1."<br>"; 
    // echo $password_1."<br>"; 

    $errors = array();

    // Form validation
    if (empty($name)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "Passwords do not match");
    }

    // Check if user already exists
    $user_check_query = "SELECT * FROM login WHERE name = ? OR email = ? LIMIT 1";
    $stmt = $db->prepare($user_check_query);

    // print_r($stmt); die();
    if ($stmt) {
        $stmt->bind_param("ss", $name, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // print_r( $user); die();

        if ($user) { // if user exists
            if ($user['name'] === $name) {
                array_push($errors, "Username already exists");
            }

            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
            }

        // Register user if no errors
        } else {
            $password = md5($password_1); // Encrypting the password using md5     we can use hash function as well

            // echo $password; die();

            $query = "INSERT INTO login (name, email, password) VALUES(?, ?, ?)";
            $stmt = $db->prepare($query);

            if ($stmt) {
                $stmt->bind_param("sss", $name, $email, $password);
                $stmt->execute();
                $_SESSION['username'] = $name;
                $_SESSION['success'] = "Registration successful!";

                echo '<span style="color: red;font-size: 40px;">You have successfully registered!</span><br>';

                echo '<span style="color: blue;font-size: 40px;">Click here: <a href="register.php"> To Back </a></span>';
                // header('location: home.php', $_SESSION);
                //exit();
            } else {
                echo "Sorry! Your information is alreay exist.";
                //array_push($errors, "Database insertion failed: " . $db->error);
            }
        }
        

    } else {
        array_push($errors, "Database query failed: " . $db->error);      
    }
} else {
    echo "Please provide registration information";
}
?>