<?php
    include_once '../config/db.php';

    if(isset($_POST['create'])){
        $email = 'admin@gmail.com';
        $pass = '12345678';
        $role = 'admin';
        $name = 'superadmin';
        $status = 'active';

        mysqli_begin_transaction($conn);

        $query1 = "SELECT email FROM users WHERE email = ?";
        $stmt1 = mysqli_prepare($conn, $query1);
        mysqli_stmt_bind_param($stmt1, "s", $email);
        mysqli_stmt_execute($stmt1);
        $result = mysqli_stmt_get_result($stmt1);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['error'] = "Email already used!";
            header("Location: ../pages/login.php");
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
            header("Location: ../pages/login.php");
            exit();
        }else{
            mysqli_rollback($conn);
            $_SESSION['error'] = "Error has occured!";
            header("Location: ../pages/login.php");
            exit();
        }


    }

     if(isset($_POST['signup'])){

        mysqli_begin_transaction($conn);
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $role = "admin";
        $name = $_POST['name'];
        $status = "active";

        $query1 = "SELECT email FROM users WHERE email = ?";
        $stmt1 = mysqli_prepare($conn, $query1);
        mysqli_stmt_bind_param($stmt1, "s", $email);
        mysqli_stmt_execute($stmt1);
        $result = mysqli_stmt_get_result($stmt1);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['error'] = "Email already used!";
            header("Location: ../pages/login.php");
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
            header("Location: ../pages/login.php");
            exit();
        }else{
            mysqli_rollback($conn);
            $_SESSION['error'] = "Invalid Credentials!";
            header("Location: ../pages/login.php");
            exit();
        }
    }

    if(isset($_POST['login'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);

        if($email == '' || $pass == ''){
            $_SESSION['error'] = "All fields are required!";
            header("Location: ../pages/login.php");
            exit();
        }

        $query1 = "SELECT * FROM users WHERE email = ?";
        $stmt1 = mysqli_prepare($conn, $query1);
        mysqli_stmt_bind_param($stmt1, "s", $email);
        mysqli_stmt_execute($stmt1);
        $result = mysqli_stmt_get_result($stmt1);

        if (mysqli_num_rows($result) === 0) {
            $_SESSION['error'] = "Invalid Credentials";
            header("Location: ../pages/login.php");
            exit();
        }

        $row = mysqli_fetch_assoc($result);

        $hashedPassword = $row['password'];

        if(!password_verify($pass, $hashedPassword)){
            $_SESSION['error'] = "Invalid Credentials";
            header("Location: ../pages/login.php");
            exit();
        }

        $_SESSION['user'] = $row;

        if(isset($_SESSION['user'])){
            $_SESSION['success'] = "Login Successful!";
            header("Location: ../pages/admin/dashboard.php");
            exit();
        }else{
            $_SESSION['error'] = "Something went wrong!";
            header("Location: ../pages/login.php");
            exit();
        }  
    }

    
    if(isset($_POST['logout'])){
        unset($_SESSION['user']);
        $_SESSION['success'] = "Logout Successful!";
        header("Location: ../pages/login.php");
        exit();
    }
?>