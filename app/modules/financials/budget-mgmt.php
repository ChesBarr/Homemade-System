<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Budget Management";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <?php
$canView = in_array($role, ['admin', 'employee']);

if (!$canView) {
  require_once __DIR__ . '../../../views/restricted.inc.php';
  exit;
}
?>

<div class="container mt-5">
  <h2 class="mb-4 text-primary"><i class="bi bi-piggy-bank-fill me-2"></i>Budget Management</h2>

  <div class="card shadow-sm border-0">
    <div class="card-body">
      <h5 class="card-title mb-3">Budget Utilization</h5>

      <div class="progress mb-4" style="height: 25px;">
        <div class="progress-bar bg-success fw-bold" style="width: 60%;">
          60% Used
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <p><i class="bi bi-currency-peso me-1"></i><strong>Current Budget:</strong> ₱500,000</p>
        </div>
        <div class="col-md-6">
          <p><i class="bi bi-wallet2 me-1"></i><strong>Remaining:</strong> ₱200,000</p>
        </div>
      </div>

      <?php if ($role === 'admin'): ?>
        <button class="btn btn-outline-primary mt-3">
          <i class="bi bi-graph-up-arrow me-1"></i> View Detailed Report
        </button>
      <?php endif; ?>
    </div>
  </div>
</div>





    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>