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


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormAction</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            border: 0;
            color: black;
            text-decoration: none;
            list-style: none;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            width: 100%;

            top: 0;
            position: fixed;
        }

        header .container {
            display: flex;
            justify-content: end;
            align-items: center;
            height: 100%;
        }

        header a {
            display: inline-block;
            height: 100%;
            padding: 10px;
            border-bottom: 3px solid transparent;
            transition: all 0.05s linear;
        }

        header a:hover {
            border-bottom: 3px solid orange;
        }

        main {
            width: 100%;
            min-height: 100vh;
        }

        .container {
            width: 1024px;
            margin: auto;
        }

        h1 {
            margin-top: 50px;
        }

        ul li {
            padding: 10px;
            font-size: 20px;
        }

        footer {
            background-color: #444;
            height: 200px;
        }

        footer .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer p {
            color: #999;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <a href="../index.html">Tela Inicial</a>
            <a href="../cadastrarNovoAluno/cadastrarAluno--form.html">Nova Adição</a>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>Cadastro feito com sucesso!</h1>
            <ul>
                <li>Aluno: <?php echo $nome ?></li>
                <li>1º Bimestre: <?php echo $nota1 ?>/10</li>
                <li>2º Bimestre: <?php echo $nota2 ?>/10</li>
                <li>3º Bimestre: <?php echo $nota3 ?>/10</li>
                <li>4º Bimestre: <?php echo $nota4 ?>/10</li>
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