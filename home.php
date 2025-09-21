<?php
$sections = [
    'Exercises Training',
    'Meditation Resources',
    'Sleep Maintenance',
];

if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
}

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Home</title>
</head>
<body>
    <?php require_once './parts/navbar.php'; ?>
    <div class="container">
        <h1 class="welcome-text">Welcome, <?= $_SESSION['user']['username']; ?></h1>
        <?php require_once './parts/calender.php'; ?>

        <div class="mt-5 card stress-level">
            <div class="stress-level-content">
                <h2 class="m-0">Stress Level</h2>
                <h1 class="m-0">8/10</h1>
            </div>

            <div class="stress-level-description">
                <h2 class="m-0">Stress Level Description</h2>
                <p class="m-0">Your stress score stands at 8/10 since your hectic schedule, absence of rest and relaxation time is placing a lot of pressure on your body and mind.</p>
            </div>
        </div>

        <?php foreach ($sections as $section): ?>
            <div class="mt-3 card section-card">
                <p><?= $section; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>