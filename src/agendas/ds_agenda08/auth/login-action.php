<?php

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    require "../db/connect.php";
    require "../models/Login.php";

    $email = addslashes($_POST["email"]);
    $password = addslashes($_POST["password"]);

    $login = new Login($email, $password);

    if ($login->validation()) {
        if (isset($_SESSION['id'])) {
            header("location:../index.php");
        } else {
            echo "usuario não existe.";
            echo "<p><a href='./login.php'>Pagina de Login</a></p>";
            echo "<p><a href='./singup.php'>Pagina de Cadastro</a></p>";
        }
    } else {
        echo "usuario não existe.";
        echo "<p><a href='./login.php'>Pagina de Login</a></p>";
        echo "<p><a href='./singup.php'>Pagina de Cadastro</a></p>";
    }
} else {
    header('Location:./login.php');
}
