<?php
session_start();
session_destroy();
echo '<span style="color: green; font-size: 30px;">You have been logged out. ';
echo '<a href="home.php" style="color: blue; font-size: 20px; text-decoration: underline;">Go back</a></span>';
