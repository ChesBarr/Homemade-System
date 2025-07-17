<?php
require_once __DIR__ . '/../../views/session-start.inc.php';

$user = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $view_user_id = intval($_POST['user_id']); // Ensure it's an integer

    if ($view_user_id > 0) {
        $query = "SELECT * FROM user_tbl WHERE user_id = ?";
        $params = [$view_user_id];

        $result = executeQuery($query, $params);

        if (!empty($result)) {
            $user = $result[0]; // Get the first (and only) user
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
    $pageTitle = $user ? htmlspecialchars($user['firstname']) . " " . htmlspecialchars($user['lastname']) : "User Not Found";
    require_once __DIR__ . '/../../views/head.inc.php';
?>
<body>
<?php require_once __DIR__ . '/../../views/nav-bar.inc.php'; ?>

<?php
if ($user) {    
?>
    <div>
        <img src="<?= BASE_URL ?>/public/images/pfp-m.jpg" alt="Profile Picture" style='height:20%; width:20%; border-radius:50%;'>
    </div>
    <div class='mainform'>
        <h1><?= $user['firstname']??''. " " . $user['lastname']??'' ?></h1>

        <sub>Username:</sub>
        <h3><?= $user['username']??'' ?></h3>

        <sub>Gender:</sub>
        <h3><?= $user['gender']??'' ?></h3>

        <sub>Address:</sub>
        <h3><?= $user['address']??'' ?></h3>

        <sub>Date of Birth:</sub>
        <h3><?= $user['dateofbirth']??'' ?></h3>

        <sub>Role:</sub>
        <h3><?= $user['role']??'' ?></h3>

        <sub>Email:</sub>
        <h3><?= $user['email']??'' ?></h3>

        <sub>Contact Number:</sub>
        <h3><?= $user['contact_no']??'' ?></h3>

        <sub>Notes:</sub>
        <h3><?= $user['notes']??'' ?></h3>

        <sub>Joined in:</sub>
        <h3><?= $user['created_at']??'' ?></h3>


        <div class='sort-bar'>
            <!-- Cancel -->
            <a class='btn btn-danger bg-danger' href='<?= $rootLocation ?>/accounts-manage'>Cancel</a>

            <?php if ($role === 'admin' || $user_id === $view_user_id): ?>
                <!-- Admin or Self can edit -->
                <a class='btn btn-primary' href='<?= $rootLocation ?>/accounts-edit'>Edit Profile</a>
            <?php endif; ?>

            <?php if ($role === 'admin' && $user_id !== $view_user_id && $user['role'] !== 'admin'): ?>
                <!-- Admin (not self) viewing non-admin account -->

                <!-- TERMINATE Button -->
                <form action="<?= $rootLocation ?>/accounts-delete" method="POST" onsubmit="return confirm('Do you really want to delete <?= htmlspecialchars($user['firstname'] . ' ' . $user['lastname']) ?>\'s account forever?');" style="display:inline;">
                    <input type='hidden' name='user_id' value="<?= htmlspecialchars($user['user_id']) ?>">
                    <button class='btn btn-danger bg-danger' type='submit' name='delete_profile'>TERMINATE (DELETE)</button>
                </form>

                <!-- Ban -->
                <form action="<?= $rootLocation ?>/accounts-ban" method="POST" style="display:inline;">
                    <input type='hidden' name='user_id' value="<?= htmlspecialchars($user['user_id']) ?>">
                    <button class='btn btn-warning text-dark' type='submit' name='ban_profile'>Ban</button>
                </form>

                <!-- Whitelist -->
                <form action="<?= $rootLocation ?>/accounts-whitelist" method="POST" style="display:inline;">
                    <input type='hidden' name='user_id' value="<?= htmlspecialchars($user['user_id']) ?>">
                    <button class='btn btn-success' type='submit' name='whitelist_profile'>Whitelist</button>
                </form>

            <?php endif; ?>
        </div>
        

    </div>
<?php
} else {
    echo "<h1 class='bg-danger'>Invalid or User Not Found</h1>";
}
?>

<?php require_once __DIR__ . '/../../views/footer.inc.php'; ?>
</body>
</html>