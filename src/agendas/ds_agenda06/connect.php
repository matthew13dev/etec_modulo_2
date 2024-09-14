<?php

try {
    $pdo = new PDO("mysql:host=mysql;dbname=db_ingles;", "root", "admin123");
} catch (PDOException $e) {
    echo "Erro com o banco de dados: " . $e->getMessage();
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}