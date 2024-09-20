<?php
$host = "mysql";
$user = "root";
$password = "admin123";
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8');

try {
    $pdo = new PDO("mysql:host=$host;dbname=db_ingles;", $user, $password,$options);
    echo "Sucess";
} catch (PDOException $err) {
    echo "Erro com o banco de dados: " . $err->getMessage();
}