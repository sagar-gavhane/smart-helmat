<?php
    // start session
    session_start();

    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database_name = 'akshay_project';

    // create connection
    $conn = new mysqli($server_name, $user_name, $password, $database_name);

    // check connection
    if($conn->connect_error){
        die('connection failed: '. $conn->connect_error);
    }

    // echo 'database connection done';