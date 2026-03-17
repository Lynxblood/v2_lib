<?php
    include_once '../config/db.php';

    if(isset($_POST[''])){

    }

    if(isset($_POST['changeName'])){

        $userId = $_SESSION['user']['id'];
        $name = $_SESSION['user']['name'];
        $email = $_SESSION['user']['email'];
        $newName = trim($_POST['name']);

            if(!empty($newName)){

                $stmt = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");
                $stmt->bind_param("si", $newName, $userId);

                if($stmt->execute()){

                    // update session
                    $_SESSION['user']['name'] = $newName;

                    $name = $newName;

                    $_SESSION['success'] = "Update Successful!";
                    header("Location: ../pages/admin/account.php");
                    exit();

                } else {
                    $_SESSION['success'] = "Update failed!";
                    header("Location: ../pages/admin/account.php");
                    exit();
                }

            $stmt->close();
        }
    }

    if(isset($_POST['changePass'])) {

        $userId = $_SESSION['user']['id'];

        // Get password values from POST
        $oldPass = trim($_POST['opass'] ?? '');
        $newPass = trim($_POST['pass1'] ?? '');
        $confirmPass = trim($_POST['pass2'] ?? '');

        // 1. Check for empty fields
        if(empty($oldPass) || empty($newPass) || empty($confirmPass)){
            $_SESSION['error'] = "Please fill in all password fields.";
        } 
        // 2. Check if new password matches confirm password
        elseif($newPass !== $confirmPass){
            $_SESSION['error'] = "New password and confirm password do not match.";
        } 
        else {
            // 3. Get current hashed password from database
            $stmt = $conn->prepare("SELECT password FROM users WHERE id = ?");
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $stmt->bind_result($currentHashedPassword);
            $stmt->fetch();
            $stmt->close();

            // 4. Verify old password
            if(!password_verify($oldPass, $currentHashedPassword)){
                $_SESSION['error'] = "Old password is incorrect.";
            } else {
                // 5. Hash new password
                $newHashedPassword = password_hash($newPass, PASSWORD_BCRYPT);

                // 6. Update password in database
                $stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
                $stmt->bind_param("si", $newHashedPassword, $userId);

                if($stmt->execute()){
                    $_SESSION['user']['password'] = $newHashedPassword;
                    $_SESSION['success'] = "Password updated successfully!";
                } else {
                    $_SESSION['error'] = "Failed to update password. Please try again.";
                }

                $stmt->close();
            }
        }
        
        // Optional: Redirect to avoid form resubmission
        header("Location: ../pages/admin/account.php");
        exit();
    }

    if(isset($_POST['addUser'])){

        mysqli_begin_transaction($conn);
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $role = "admin";
        $name = $_POST['name'];
        $status = "active";

        if($email == '' || $name == '' || $pass == ''){
            $_SESSION['error'] = "All fields are required, Try Again!";
           header("Location: ../pages/admin/users.php");
            exit();
        }

        $query1 = "SELECT email FROM users WHERE email = ?";
        $stmt1 = mysqli_prepare($conn, $query1);
        mysqli_stmt_bind_param($stmt1, "s", $email);
        mysqli_stmt_execute($stmt1);
        $result = mysqli_stmt_get_result($stmt1);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['error'] = "Email already used!";
            header("Location: ../pages/admin/users.php");
            exit();
        }

        $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);

        $query = "INSERT INTO `users`(`name`, `email`, `password`, `role`, `status`) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $hashedPassword, $role, $status);
        $signup = mysqli_stmt_execute($stmt);

        mysqli_commit($conn);

        if($signup){
            $_SESSION['success'] = "Account Created Successfully!";
            header("Location: ../pages/admin/users.php");
            exit();
        }else{
            mysqli_rollback($conn);
            
            $_SESSION['error'] = "Something went wrong!";
            header("Location: ../pages/admin/users.php");
            exit();
        }
    }

    


?>