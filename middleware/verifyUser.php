<?php
    function verifyUser(){
        if(!isset($_SESSION['user'])){
            header("Location: ../login.php");
            exit();
        } 
    }  

    function isUserLoggedIn(){
        if(isset($_SESSION['user'])){
            header("Location: ../pages/admin/dashboard.php");
            exit();
        } 
    }


?>