<?php 
$user = $_POST['user'];
$password = $_POST['password'];

$admin = "admin";
$pass = "admin123";

$action;
if($user === $admin  && $password === $pass){
    $action = "sysem.php";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login-container">
        <form action= <?php echo '$action' ?> method="post">
            <h2>Login</h2>
            <label><input type="text" placeholder="User" name="user" required></label>
            <label><input type="password" placeholder="Passowrd" name="password" require></label>
            <button type="submit">Enter</button>
        </form>
    </div>
</body>
</html>