<?php
    require_once __DIR__ . '../../../database/connect.php';
    require_once __DIR__ . '/../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Manage Accounts"; require_once __DIR__ . '/../../views/head.inc.php'; ?>
<style>
    .display-accounts {
        display:flex; justify-content:center; align-items:center;
        flex-wrap:wrap;
        margin-top: 50px;
    }
    .account {
        display:flex; flex-direction:column; justify-content:center; align-items:center;
        margin:100px 10px;
        height:200px;
        width:200px;
        background-color: var(--bub-primary);
        border-radius: 50%;
    }
    .account button {
    }
    .account button img {
        border-radius: 50%;
        height: 100%;
        width: 100%;
    }
</style>
<body>
<?php require_once __DIR__ . '/../../views/nav-bar.inc.php'; ?>

<div class='display-accounts'>
<div class="container py-5">
  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-success" onclick="window.location.href='<?= BASE_URL ?>/accounts-create';">Create New Account</button>
  <h2 class="text-center mb-4">Manage Accounts</h2>
  <div class="table-responsive">
    <table class="table table-hover table-bordered align-middle text-center">
      <thead class="table-info">
        <tr>
          <th></th>
          <th>ID</th>
          <th>Username</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        
        <!-- Row -->

<?php
    // Display All the Accounts
    require_once __DIR__ . '../../../database/connect.php';
    require_once __DIR__ . '../../../database/crud.php';

    $query = "SELECT * FROM user_tbl";
    $result = executeQuery($query);
    
    if (!empty($result)) {
        foreach ($result as $row) {
        ?>

            <tr onclick="submitUserForm(<?= $row['user_id'] ?>);" style="cursor: pointer;">
                <td><img src='<?= BASE_URL ?>/public/images/pfp-m.jpg' alt="profile" style='height:50px; width:50px;'></td>
                <td><?= $row['user_id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['lastname'] . ", " . $row['firstname'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['role'] ?></td>
            </tr>
            <form id="userForm<?= $row['user_id'] ?>" method="POST" action="<?= $rootLocation ?>/accounts-view" style="display: none;">
                <input type="hidden" name="user_id" id="user_id<?= $row['user_id'] ?>" value='<?= $row['user_id'] ?>'>
            </form>
        
        <?php
        }
    } else {
        echo "No records found.";
    }
?>


      </tbody>
    </table>
  </div>
</div>

</div>
<?php require_once __DIR__ . '/../../views/footer.inc.php'; ?>
</body>
</html>