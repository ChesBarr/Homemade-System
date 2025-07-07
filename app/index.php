<?php
    require_once __DIR__ . '/database/connect.php';
    require_once __DIR__ . '/views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Home"; require_once __DIR__ . '/views/head.inc.php'; ?>
<body>
<?php require_once __DIR__ . '/views/nav-bar.inc.php'; ?>

    <header style='display:flex; flex-direction:column; justify-content:center; align-items:center; margin:10rem 0 100px 0;'>
        <h1 style='font-size:3.9rem;'>Bestlink General Hospital</h1>
        <h2 style='font-size:3rem;'>Welcome, <?php echo htmlspecialchars($role . " " . $username); ?></h2>
        <p style='font-size:1.5rem;'>Care through virtual devices.</p>
    </header>

    <div class='w-100 h-100 d-flex justify-content-center'>
        <img src='<?= BASE_URL ?>public/images/announcements-sample-image.jpg' class='w-50 h-50'>
    </div>

<?php require_once __DIR__ . '/views/footer.inc.php'; ?>
</body>
</html>