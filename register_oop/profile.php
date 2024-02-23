<?php
include('db.php');
session_start();


// Query to get user data
$sql = "SELECT * FROM register WHERE ID";
$result = mysqli_query($conn, $sql);

// Check if query executed successfully
if ($result) {
    // Fetch user data
    $row = mysqli_fetch_assoc($result);
    $name = $row['fullname'];
    $phnum = $row['phone'];
    $email = $row['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        .profile-info {
            margin-top: 20px;
        }
        .profile-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Profile</h2>
        <div class="profile-info">
            <p><strong>Name:</strong> <?php echo isset($name) ? $name : ''; ?></p>
            <p><strong>Email:</strong> <?php echo isset($email) ? $email : ''; ?></p>
            <p><strong>Phone:</strong> <?php echo isset($phnum) ? $phnum : ''; ?></p>
        </div>
    </div>
</body>
</html>
