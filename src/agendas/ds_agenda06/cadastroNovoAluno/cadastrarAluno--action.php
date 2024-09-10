<?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "admin123";
$db_name = "db_ingles";

$db_conection = new mysqli($db_servername,$db_username,$db_password,$db_name);

if($db_conection -> connect_error){
    die("Conection Failed: " . $db_conection->connect_error);
}

$nomeAluno = $_POST("nome");
$nota1 = $_POST("nota1");
$nota2 = $_POST("nota2");
$nota3 = $_POST("nota3");
$nota4 = $_POST("nota4");

$sql = "INSERT INTO tb_alunoConcluinte  (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) 
VALUES ('$nomeAluno, '$nota1', '$nota2', '$nota2', '$nota4')";

if($db_conection->query($sql) === TRUE){
    echo '<h1>Aluno Concluinte salvo com sucesso!</h1>';
} else{
    echo '<h1>Erro ao salvar!</h1>';
}

$db_conection->close();