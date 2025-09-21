<?php
require_once './utils/database.php';

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
    $result = query($query);

    if ($result) {
        echo 'User registered successfully';
    } else {
        echo 'User registration failed';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Santaify</title>
</head>
<body>
    <header>
        
    </header>

    <div class="container text-center">
        <img class="login_logo mt-5 mb-3" src="./images/logo.png" alt="Santaify">

        <form id="signup-form" class="d-flex flex-column gap-2" action="" method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="name" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="register">Register</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>