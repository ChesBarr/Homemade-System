<?php
    // Load Session, most files are loaded in here, so loading this will be fine
    require_once __DIR__ . '/../../views/session-start.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
    // Change Tab Title
    $pageTitle = "Sample Title";

    // Load Head(CSS and other Links)
    require_once __DIR__ . '/../../views/head.inc.php';
?>
<body>

<!-- Load Navigation Bar -->
<?php require_once __DIR__ . '/../../views/nav-bar.inc.php'; ?>

<div>
    <br>
    <!-- You can start Developing here -->
    <h3 class="text-primary">You can start developing here</h3>
    <hr>

    <!-- Echo simply -->
    <p><?= "The Root Folder is: " . $rootLocation ?></p>
    <hr>

    <!-- Utilize .env -->
    <h3>Author:</h3>
    <h1><?= $_ENV['AUTHOR'] ?></h1>
    <hr>
    
    <h3>System:</h3>
    <h1><?= $_ENV['APP_NAME'] ?></h1>
    <hr>

    <!-- Utilize names.php -->
    <?= "Admin(and other role) Dashboard Location: " . config('role.admin.Dashboard') ?>
    <hr>

    <?php
        // If you are an Admin, you will see a Create Button
        if($role == 'admin'){
            ?>
                <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-success" onclick="window.location.href='/sample'">
                    If you see this, you are an Admin
                </button>
            <?php
        }

        // HOW TO CALL THE CRUD FUNCTIONS(in app/database/crud.php)

        // Read Function how to call
        // 
        // Take Data From Database
        //
        // $readSample = "SELECT * FROM sample_tbl";
        // $result = executeQuery($readSample);
        //
        // Display All
        // 
        // if (!empty($result)) {   
        //     foreach ($result as $row) {
        //         echo "COlumn 1: " . $row['column1'] . " Column 2: " . $row['column2'] . "<br>";
        //     }
        // } else {
        //     echo "No records found.";
        // }

        // Create Function how to call
        // 
        // $createSample = create('sampletable', [
        //     'column1' => 'sample_data',
        //     'column2' => 'sample_data',
        //     'column3' => 'sample_data',
        // ]);

        // Update Function how to call
        // 
        // $updateSample = "
        //     UPDATE user_tbl 
        //     SET column1 = ?, column2 - ?
        //     WHERE sample_id = ?
        // ";
        // $params = [$column1, $column2, $sample_id];
        // executeQuery($updateQuery, $params);


        // Delete Function how to call
        // 
    	// $deleteSample = delete('sample_tbl', ['sample_id' => 5]);
    ?>

</div>
<!-- Load Footer-->
<?php require_once __DIR__ . '/../../views/footer.inc.php'; ?> 
</body>
</html>