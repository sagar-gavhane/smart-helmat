<?php

function check_device_id($conn, $device_id)
{
    // $device_id = 'abcd12'; // remove later
    $query = "SELECT `user_device_id` FROM `users_tb` WHERE `user_device_id` = '$device_id' ";
    $result = $conn->query($query);
        
    if ($result->num_rows) {
        return true; // if key already used then return true
    } else {
        return false;
    }
}

// generate device id
function generate_device_id($conn, $length = 6)
{
    repeat: // repeat untill get unquie device identity

    $device_id = ''; // empty device id
    $keys = array_merge(range(0, 9), range('A', 'Z'));
    
    for ($i=0; $i < $length; $i++) {
        $device_id .= $keys[array_rand($keys)]; // generate single character between 0-9 and A-Z
    }
    
    // check status of device id available
    $status = check_device_id($conn, $device_id);

    // if key is not available then return ture else false
    if ($status) {
        goto repeat;
    }

    return $device_id; // return device id
}


function clean_input($string)
{
    $string = trim($string);
    $string = strip_tags($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    
    return $string;
}

function check_email_exist($conn, $email)
{
    $query = "SELECT `user_email` FROM `users_tb` WHERE `user_email` = '$email' ";
    $result = $conn->query($query);

    if ($result->num_rows) {
        return true; // if email already exist then return true else false
    } else {
        return false;
    }
}