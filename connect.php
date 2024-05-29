<?php
// Database connection setup (adjust with your actual database details)
try {
    $db_name = 'mysql:host=localhost;dbname=order_jacket';
    $db_user = 'root';
    $db_pass = '';
    $connect = new PDO($db_name, $db_user, $db_pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
