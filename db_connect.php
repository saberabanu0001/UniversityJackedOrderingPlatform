<?php 

//<!--this file is created to make the connection with the database-->
// connect to the database
$db = new mysqli('localhost', 'root', '', 'login_db');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
