<?php
    require_once __DIR__ . '/../../views/session-start.inc.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once __DIR__ . '/../../database/connect.php';
        require_once __DIR__ . '/../../database/crud.php';
        
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = $_POST['password']; // Passwords will not be filtered.
        $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
        $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
        $dateofbirth = filter_input(INPUT_POST, 'dateofbirth', FILTER_SANITIZE_STRING);
        $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $contact_no = filter_input(INPUT_POST, 'contact_no', FILTER_SANITIZE_NUMBER_INT);
        $notes = htmlspecialchars($_POST[ 'notes']); // Use htmlspecialchars() for text areas

        // Hash the Password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        $result = create('user_tbl', [
            'username' => $username,
            'password' => $hashedPassword,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'gender' => $gender,
            'address' => $address,
            'dateofbirth' => $dateofbirth,
            'role' => $role,
            'email' => $email,
            'contact_no' => $contact_no,
            'notes' => $notes,
        ]);
        
        if ($result['success']) {
            echo "<script>alert('" . $result['message'] . "');</script>"; // Record successfully inserted
            echo "<script>alert('" . 'Insert ID: ' . $result['insert_id'] . "');</script>";
        } else {
            echo "<script>alert('" . $result['message'] . "');</script>"; // Error message
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php $pageTitle = "Create New Account"; require_once __DIR__ . '/../../views/head.inc.php'; ?>
<body>
<?php require_once __DIR__ . '/../../views/nav-bar.inc.php'; ?>

    <h1 class='title'>Create New Account</h1>

    <form class='mainform' action="" method='POST'>
        <sub>Username</sub>
        <input type='text' name='username' placeholder='Enter Username...' require autocomplete='off'></input>
        
        <sub>Password</sub>
        <span>
            <input style='width:85%;' type='password' name='password' id='password' placeholder='Enter Password...' require autocomplete='off'></input>
            <button style='font-size:2rem;' type="button" onclick="togglePassword()">👁</button>
        </span>

        <sub>Name</sub>
        <input type='text' name='firstname' placeholder='Enter Firstname...' require autocomplete='off'></input>
        <input type='text' name='lastname' placeholder='Enter Lastname...' require autocomplete='off'></input>

        <sub>Gender</sub>
        <section>
            <input type='radio' name='gender' value='m'>Male  
            <input type='radio' name='gender' value='f'>Female  
            <input type='radio' name='gender' value='o'>Other
        </section>

        <sub>Address</sub>
        <input type='text' name='address' placeholder='Enter Address...' require autocomplete='off'></input>
        
        <sub>Date of Birth</sub>
        <input type='date' name='dateofbirth' require autocomplete='off'></input>

        <sub>Role</sub>
        <div>
            <select name="role">
                <option>none</option>
                <?php
                    require_once __DIR__ . '../../../database/connect.php';
                    require_once __DIR__ . '../../../database/crud.php';
                
                    $roles = getEnumValues('user_tbl', 'role');
                    if ($roles === false) {
                        echo "<option value=''>Error fetching roles</option>";
                    } elseif (!empty($roles)) {
                        foreach ($roles as $role) {
                            if ($role !== '') {
                                echo "<option value='$role'>$role</option>";
                            }
                        }
                    } else {
                        echo "<option value=''>No roles found</option>";
                    }
                ?>
            </select>
        </div>

        <sub>Email</sub>
        <input type='text' name='email' placeholder='Enter Email...' require autocomplete='off'></input>

        <sub>Contact no.</sub>
        <input type='number' name='contact_no' maxlength='10' placeholder='Enter Contact Number...' require autocomplete='off'></input>

        <sub>Notes</sub>
        <textarea name='notes' col='25' row='5' placeholder='Enter Notes..' require autocomplete='off'></textarea>
        
        <div class='sort-bar'>
            <a class='delete cancel' href='<?= BASE_URL ?>/home/users/manage-account.php'>Cancel</a>
            <button class='create' type='submit'>Create</button>
        </div>
    </form>

<?php require_once __DIR__ . '/../../views/footer.inc.php'; ?>
</body>
</html>