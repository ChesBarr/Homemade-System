<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Asset Management";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-4"><i class="bi bi-hdd-stack me-2"></i>Company Assets</h2>
  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Desktop PC - IT Dept
      <span class="text-muted small">SN# 12345678</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Projector - Meeting Room
      <span class="text-muted small">SN# 87654321</span>
    </li>
  </ul>
</div>




    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>