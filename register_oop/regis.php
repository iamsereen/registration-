<?php
session_start();
// Include the database connection file
include('db.php');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['fullname'];
    $password = $_POST['password'];
    $phnum = $_POST['phone'];
    $email = $_POST['email'];

    // Insert data into database
    $sql = "INSERT INTO register (fullname, password, phone, email) VALUES ('$name', '$password', '$phnum', '$email')";
    $result = mysqli_query($conn, $sql);

    // Check if query executed successfully
    if ($result) {
        $_SESSION['user_email'] = $email;
        //echo "Registration successful!";
        echo "<script>window.location.href='profile.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
