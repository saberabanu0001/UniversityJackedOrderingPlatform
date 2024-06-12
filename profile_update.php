<?php
include("db_connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];

    // Validate new data (optional, but recommended)
    if (empty($new_username) || empty($new_email)) {
        echo "Both fields are required.";
        exit;
    }

    // Check if the new username already exists in the database (excluding the current user)
    $stmt = $db->prepare("SELECT * FROM login WHERE name = ? AND name != ?");
    $stmt->bind_param("ss", $new_username, $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Username already taken.";
        exit;
    }

    // Update the user's data in the database
    $stmt = $db->prepare("UPDATE login SET name = ?, email = ? WHERE name = ?");
    $stmt->bind_param("sss", $new_username, $new_email, $username);
    if ($stmt->execute()) {
        // Update session username
        $_SESSION['username'] = $new_username;
        echo '<span style="color: red; font-size: 30px;">Profile updated successfully.</span>';
    } else {
        echo "Error updating profile.";
    }

    $stmt->close();
    $db->close();
} else {
    echo "Invalid request.";
}
?>
