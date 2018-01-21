<?php
    require_once('config/database.php');
    require_once('functions/common_functions.php');

    // check for post request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        die('No direct script access allowed');
    }

    $email = clean_input($_POST['email']);
    $password = clean_input($_POST['password']);

    // login form process
    if (strlen($email) && strlen($password)) {
        $email_status = check_email_exist($conn, $email);

        if ($email_status) {
            $query = "SELECT * FROM `users_tb` WHERE `user_email` = '$email' ";
            $result = $conn->query($query);

            $rows = $result->fetch_assoc();

            $password_hash = $rows['user_password'];

            if (password_verify($password, $password_hash)) {
                $_SESSION['secure'] = true;
                $_SESSION['user_logged'] = true;
                header('Location: dashboard.php');
                exit();
            } else {
                die('Email address or password not match. Please try agian.');
            }
        } else {
            die('Email address or password not match. Please try agian.');
        }
    }
