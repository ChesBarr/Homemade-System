<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Pharmacy";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-4 text-primary">
    <i class="bi bi-capsule me-2"></i>Pharmacy
  </h2>

  <table class="table table-bordered table-hover align-middle shadow-sm bg-white">
    <thead class="table-light">
      <tr>
        <th>Medicine</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Paracetamol</td>
        <td>230</td>
        <td>₱5.00</td>
        <td><span class="badge bg-success">Available</span></td>
      </tr>
      <tr>
        <td>Amoxicillin</td>
        <td>0</td>
        <td>₱10.00</td>
        <td><span class="badge bg-danger">Out of Stock</span></td>
      </tr>
    </tbody>
  </table>
</div>




    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>