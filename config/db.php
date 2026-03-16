<?php
    session_start();

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'v2_lib';

    $conn = mysqli_connect($hostname, $username, $password, $database);

    if(!$conn){
        echo "Database connection failed!";
    }else{
        echo "Connected to the database successfully!";
    }

?>