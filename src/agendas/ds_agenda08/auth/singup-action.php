<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm-password'];

if(isset($username) && !empty($username)){
    $username = filter_var($username);
}
if(isset($email) && !empty($username)){
    if(filter_var($email, FILTER_SANITIZE_EMAIL)){
        $email = addslashes($email);
    }
}

if(isset($password) && !empty($password)){
    if(isset($confirmPassword) && !empty($confirmPassword)){
        if($password === $confirmPassword){
            $password = addslashes($password);
        }
    }
}

global $pdo;

$sql = "INSERT INTO register (username, email, password) values(:username, :email, :password);";
