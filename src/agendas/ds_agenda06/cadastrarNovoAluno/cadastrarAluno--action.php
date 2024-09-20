<?php


// MYSQLI
// $db_servername = "localhost";
// $db_username = "root";
// $db_password = "admin123";
// $db_name = "db_ingles";


// $db_conection = new mysqli($db_servername,$db_username,$db_password,$db_name);
// if($db_conection -> connect_errno){
//     die("Conection Failed: " . $db_conection->connect_errno);
// }

// $nomeAluno = $_POST('nome');
// $nota1 = $_POST("nota1");
// $nota2 = $_POST("nota2");
// $nota3 = $_POST("nota3");
// $nota4 = $_POST("nota4");

// $sql = "INSERT INTO tb_alunoConcluinte  (`nome`, `nota1`, `nota2`, `nota3`, `nota4`) 
// VALUES ('$nomeAluno, '$nota1', '$nota2', '$nota2', '$nota4')";

// if($pdo->query($sql) === TRUE){
//     echo '<h1>Aluno Concluinte salvo com sucesso!</h1>';
// } else{
//     echo '<h1>Erro ao salvar!</h1>';
// }

// $db_conection->close();



// PDO
require_once "../connect.php";

$sql = "INSERT INTO tb_alunoConcluinte (nome, nota1, nota2, nota3, nota4) 
        VALUES (:nome, :nota1, :nota2, :nota3, :nota4)";

$response = $pdo->prepare($sql);

$nome =  $_POST["nome"];
$nota1 = (int)$_POST["nota1"];
$nota2 = (int)$_POST["nota2"];
$nota3 = (int)$_POST["nota3"];
$nota4 = (int)$_POST["nota4"];


$response->bindValue(":nome", $nome);
$response->bindValue(":nota1", $nota1);
$response->bindValue(":nota2", $nota2);
$response->bindValue(":nota3", $nota3);
$response->bindValue(":nota4", $nota4);

$response->execute();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormAction</title>
    <link rel="stylesheet" href="action.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Aluno adicionado com Sucesso!</h1>
            <menu>
                <a href="./cadastrarNovoAluno/cadastrarAluno--form.html">Novo Aluno</a>
                <a href="../listarAluno.php">Listar Alunos</a>
            </menu>
        </div>
    </header>
    <main>

        <div class="container">
            <ul>
                <li>Nome: <?php echo $nome ?></li>
                <li>Nota 1º Bimestre: <?php echo $nota1 ?>/10</li>
                <li>Nota 2º Bimestre: <?php echo $nota2 ?>/10</li>
                <li>Nota 3º Bimestre: <?php echo $nota3 ?>/10</li>
                <li>Nota 4º Bimestre: <?php echo $nota4 ?>/10</li>
            </ul>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Itaque eum ad asperiores, quia soluta numquam optio atque
                quasi illo totam officia sunt earum quae fugit sed veritatis
                possimus placeat repudiandae!</p>
        </div>
    </footer>
</body>

</html>