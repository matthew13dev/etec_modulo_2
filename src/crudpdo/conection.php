<?php
try{
    $pdo = new PDO("mysql:host=mysql;dbname=db_crudpdo;","root","admin123");
    echo "Banco funcionado!";
}
catch(PDOException $e){
    echo "Erro com o banco de dados: " . $e->getMessage();
}

catch(Exception $e){
    echo "Erro: " . $e->getMessage();
}
