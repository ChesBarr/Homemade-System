<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Audit Management";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-4"><i class="bi bi-file-earmark-check-fill me-2"></i>Recent Audits</h2>
  <table class="table table-bordered table-hover">
    <thead class="table-light">
      <tr>
        <th>Department</th>
        <th>Date</th>
        <th>Findings</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Logistics</td>
        <td>2025-04-01</td>
        <td><span class="text-danger">Inventory mismatch detected</span></td>
      </tr>
      <tr>
        <td>Procurement</td>
        <td>2025-03-15</td>
        <td><span class="text-success">No issues found</span></td>
      </tr>
    </tbody>
  </table>
</div>




    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>