<?php
    require_once __DIR__ . '/../database/connect.php'; // Database Connection
    require_once __DIR__ . '/../database/crud.php'; // CRUD Functions
    require_once __DIR__ . '/../../config/names.php'; // Configurations
    require_once __DIR__ . '/../../config/helper.php'; // Config Helper Function
    require_once __DIR__ . '/../../config/load_env.php'; // ENV File Helper
    loadEnv(); // Call ENV Helper Function to use

    define('BASE_URL', config('route.root'));

    ini_set('session.cookie_lifetime', 86400);
    session_start();

    if(!ISSET($_SESSION['username'])){
        $pageTitle = 'Session Expired!';
        require_once __DIR__ . '../head.inc.php'; // ENV File Helper
        ?>
            <form style='background-color:#f8f9fa; height:100vh; display:flex; align-items:center; justify-content:center;' 
                method='POST' 
                onsubmit="return logout('../')" 
                action='<?= $rootLocation ?>/logout'
                >
                <div style='padding:2rem; text-align:center;'>
                    <img src="<?= BASE_URL ?>/public/images/session-expired.jpg" alt="session_expired.jpg">
                    <h3 class='text-danger'>Session expired! Please Log in again!</h3>
                    <button type='submit' class="btn btn-danger">Back to Log in Page</button>
                </div>
            </form>
        <?php
        die();
    }

    $usertbl = 'user_tbl';
    $userid = 'user_id';
    $sql = "SELECT * FROM $usertbl WHERE $userid = {$_SESSION['user_id']}";
    $result = $connections->query($sql);
    if($result && $result instanceof mysqli_result && $result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $_SESSION['user_id'] = $row[$userid];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['dateofbirth'] = $row['dateofbirth'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['contact_no'] = $row['contact_no'];
            $_SESSION['notes'] = $row['notes'];
            $_SESSION['created_at'] = $row['created_at'];
        }
    }
    // user_tbl
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $gender = $_SESSION['gender'];
    $address = $_SESSION['address'];
    $dateofbirth = $_SESSION['dateofbirth'];
    $role = $_SESSION['role'];
    $email = $_SESSION['email'];
    $contact_no = $_SESSION['contact_no'];
    $notes = $_SESSION['notes'];
    $created_at = $_SESSION['created_at'];