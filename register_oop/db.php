<?php
// Database configuration
$DB_server = 'localhost';
$DB_user = 'root';
$DB_password = '';
$DB_name = 'regis_oop';

// Create connection
$conn = mysqli_connect($DB_server, $DB_user, $DB_password, $DB_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
