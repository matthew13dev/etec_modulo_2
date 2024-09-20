<?php
require_once "./connect.php";

$sql = "SELECT * FROM tb_alunoConcluinte";
$result = $pdo->prepare($sql);
$result->execute();

$listaAlunos = $result->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="listarAluno.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Lista de Alunos Concluintes</h1>
            <menu>
                <a href="./cadastrarNovoAluno/cadastrarAluno--form.html">Novo Aluno</a>
            </menu>
        </div>
    </header>
    <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Aluno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Nota 4</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        
                        for ($i = 0; $i < count($listaAlunos); $i++) {

                            $id = $listaAlunos[$i]["ID"];

                            echo "<tr>";
                            echo "<td>" . $listaAlunos[$i]["ID"] . "</td>";
                            echo "<td>" . $listaAlunos[$i]["nome"] . "</td>";
                            echo "<td>" . $listaAlunos[$i]["nota1"] . "</td>";
                            echo "<td>" . $listaAlunos[$i]["nota2"] . "</td>";
                            echo "<td>" . $listaAlunos[$i]["nota3"] . "</td>";
                            echo "<td>" . $listaAlunos[$i]["nota4"] . "</td>";
                            echo "
                                
                                <td class='controles'>
                                    <form action='delete.php' method='post'>
                                        <input type='hidden' name='id' value='$id'>
                                        <button class='excluir' type='submit' name='delete' onclick='return confirm('Tem certeza em excluir esse registro?')'>Deletar</button>
                                    </form>
                                </td>
                                
                            ";
                        }

                        ?>

                    </tr>
                    </tr>
                </tbody>
            </table>
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