<nav>
    <div class="container d-flex justify-content-between align-items-center">
        <div class="nav-header">
            <a href="#">
                <img src="./images/logo.png" alt="Santaify">
            </a>
        </div>
        <div class="nav-links d-flex gap-4">
            <div class="profile-image">
                <p class="m-0"><?= $_SESSION['user']['username']; ?></p>
            </div>
            <form class="d-flex align-items-center" action="" method="post">
                <button class="btn btn-dark" type="submit" name="logout">Logout</button>
            </form>
        </div>
    </div>
</nav>