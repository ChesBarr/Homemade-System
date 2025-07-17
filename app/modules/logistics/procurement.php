<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Procurement";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-4"><i class="bi bi-basket me-2"></i>Procurement Requests</h2>
  <table class="table table-striped table-hover">
    <thead class="table-light">
      <tr>
        <th>Item</th>
        <th>Requested By</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Laptops</td>
        <td>John D.</td>
        <td><span class="badge bg-info text-dark">Pending</span></td>
      </tr>
      <tr>
        <td>Office Chairs</td>
        <td>Mary K.</td>
        <td><span class="badge bg-success">Approved</span></td>
      </tr>
    </tbody>
  </table>
</div>




    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>