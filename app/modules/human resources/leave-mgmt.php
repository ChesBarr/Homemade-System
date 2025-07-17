<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Leave Management";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-3"><i class="bi bi-calendar-check me-2"></i>Leave Management</h2>
  <p class="text-muted">Track leave requests and balances.</p>

  <ul class="list-group mt-3">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <div>
        <strong>Jenny Cruz</strong> - Vacation Leave - <small>May 21–23</small>
      </div>
      <span class="badge bg-success">Approved</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <div>
        <strong>Arnold Reyes</strong> - Sick Leave - <small>May 19</small>
      </div>
      <span class="badge bg-warning text-dark">Pending</span>
    </li>
  </ul>
</div>




    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>