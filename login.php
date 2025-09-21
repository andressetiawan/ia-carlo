<?php
session_start();
require_once './utils/database.php';

$error = '';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = query($query);

    if ($result) {
        $_SESSION['user'] = $result[0];
        header('Location: home.php');
    } else {
        $error = 'Login failed / wrong email or password';
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
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="text-center">
        <img class="login_logo mt-5 mb-3" src="./images/logo.png" alt="Santaify">
    </div>

    <form id="form" class="d-flex flex-column gap-2" action="./login.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <p class="text-danger"><?= $error; ?></p>
        <button type="submit" name="login">Login</button>
    </form>

    <div class="form-section">
        <a class="text-decoration-none border" href="index.php">Register</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
