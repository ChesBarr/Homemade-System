<?php
    require_once __DIR__ . '/../database/connect.php';
    require_once __DIR__ . '../session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Home"; require_once __DIR__ . '../head.inc.php'; ?>
<body>
<?php require_once __DIR__ . '../nav-bar.inc.php'; ?>

    <header style='display:flex; flex-direction:column; justify-content:center; align-items:center; margin:10rem 0 100px 0;'>
        <h1><?= $_ENV['APP_NAME'] ?></h1>
        <h2>Welcome <?= $role." ".$username ?></h2>
        <p>Welcome to Home Page</p>
    </header>

    <div class='w-100 h-100 d-flex justify-content-center'>
        <img src='<?= BASE_URL ?>/public/images/announcements.jpg' class='w-50 h-50'>
    </div>

<?php require_once __DIR__ . '../footer.inc.php'; ?>
</body>
</html>