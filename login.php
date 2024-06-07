<?php
session_start();
include('db_connect.php');

if (isset($_POST['username']) && $_POST['password']) {
    $username = $db->real_escape_string($_POST['username']);
    $password = $db->real_escape_string($_POST['password']);

    $errors = array();

    // echo $username . "<br>";
    // echo $password . "<br>";
    // die();

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    if (count($errors) == 0) {

        $new_password = md5($password);
        $query = "SELECT * FROM login WHERE name = ? and password = ? LIMIT 1";
        $stmt = $db->prepare($query);

        if ($stmt) {
            $stmt->bind_param("ss", $username, $new_password); // s means strings
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            // print_r($user); die();

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['name'];
                header('location: shop_now.php');
                exit();
            } else {
                echo '<span style="color: red; font-size: 30px;">Sorry! User and Password do not match!<br>';
                echo 'Click here: <a href="home.php" style="color: blue; font-size: 15px; text-decoration: underline;">Go Back</a></span>';
                array_push($errors, "Wrong email/password combination");
            }
        } else {
            array_push($errors, "Database query failed: " . $db->error);
        }
    }
}
?>