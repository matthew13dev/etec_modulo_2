<?php

$host = "mysql";
$dbname = "db_crudpdo";
$user = "root";
$password = "admin123";

global $pdo;

try {
    // Conexão correta com PDO
    $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo "Erro de Conexão: " . $err->getMessage();
} catch (Exception $generico) {
    echo "Erro genérico: " . $generico->getMessage();
}