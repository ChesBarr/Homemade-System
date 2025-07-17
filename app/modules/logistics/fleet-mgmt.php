<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Fleet Management";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-4"><i class="bi bi-truck-front-fill me-2"></i>Fleet Overview</h2>
  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Van A
      <span class="badge bg-warning text-dark">Oil Change Due</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Truck B
      <span class="badge bg-success">Good Condition</span>
    </li>
  </ul>
</div>




    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>