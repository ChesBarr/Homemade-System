<?php
    require_once __DIR__ . '../../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Diet Management";
require_once __DIR__ . '../../../views/head.inc.php'; ?>
<body>
    <?php require_once __DIR__ . '../../../views/nav-bar.inc.php'; ?>

    <div class="container mt-5">
  <h2 class="mb-4 text-primary">
    <i class="bi bi-egg-fried me-2"></i>Dietary Plans
  </h2>

  <ul class="list-group shadow-sm">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      John D.
      <span class="badge bg-secondary">Diabetic Diet</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Emily K.
      <span class="badge bg-info text-dark">High Protein</span>
    </li>
  </ul>
</div>



    <?php require_once __DIR__ . '../../../views/footer.inc.php'; ?>
</body>
</html>