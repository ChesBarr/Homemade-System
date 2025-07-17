<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Payroll";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-3"><i class="bi bi-cash-stack me-2"></i>Payroll</h2>
  <p class="text-muted">View salary processing and payroll history.</p>

  <div class="card mt-3 shadow-sm">
    <div class="card-body">
      <h5 class="card-title">Payroll Summary - May 2025</h5>
      <p class="card-text fs-5">Total Paid: <strong>PHP 2,000,000</strong></p>
      <button class="btn btn-primary">
        <i class="bi bi-download me-1"></i> Download Payslip
      </button>
    </div>
  </div>
</div>




    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>