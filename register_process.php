<?php

require_once('config/database.php');
require_once('functions/common_functions.php');

// check for post request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die('No direct script access allowed');
}

$first_name = clean_input($_POST['first_name']);
$last_name = clean_input($_POST['last_name']);
$device_id = clean_input($_POST['device_id']);
$email = clean_input($_POST['email']);
$password = clean_input($_POST['password']);

if (strlen($first_name) && strlen($last_name) && strlen($device_id) && strlen($email) && strlen($password)) {

    // check email exist or not
    $email_status = check_email_exist($conn, $email);

    if(! $email_status){
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        
        $query = "INSERT INTO `users_tb` (`user_first_name`, `user_last_name`, `user_device_id`, `user_email`, `user_password`) VALUES ('$first_name', '$last_name', '$device_id', '$email', '$password_hash') ";
        
        $result = $conn->query($query);
        
        if($result){
            $_SESSION['secure'] = true;
            $_SESSION['user_logged'] = true;
            header('Location: dashboard.php');
            exit();
        }else{
            die('Something went wrong unable to complete registration');
        }
    } else {
        die('Email address '.$email.' is already register with another user. Please try another email address');
    }    
}else{
    die('You have missed to fill field in registration form');
}
