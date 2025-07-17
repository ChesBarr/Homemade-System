<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Billing & Discharge Management";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-4">
    <i class="bi bi-receipt-cutoff me-2"></i>Billing & Discharge
  </h2>
  <p class="text-muted">Review final billing details and discharge patients.</p>

  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      John D. - Total: ₱25,000
      <button class="btn btn-sm btn-outline-success">
        <i class="bi bi-file-earmark-text me-1"></i>Generate Invoice
      </button>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Carla S. - Total: ₱15,400
      <button class="btn btn-sm btn-outline-success">
        <i class="bi bi-door-open me-1"></i>Discharge
      </button>
    </li>
  </ul>
</div>



    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>