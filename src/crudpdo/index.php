<?php
require_once "models/User.php";

$host = "mysql";
$dbname = "db_crudpdo";
$user = "root";
$password = "admin123";

$user = new User($host, $dbname, $user, $password);

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $user->deleteUser($id);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="container">


        <aside>
            <?php
            if (isset($_POST['save'])) {
                $nome = addslashes($_POST['name']);
                $phone = addslashes($_POST['phone']);
                $email = addslashes($_POST['email']);

                if ($nome != null && $phone != null && $email != null) {
                    $isUser = $user->insertUser($nome, $phone, $email);
                    if (!$isUser) {
                        echo "<div class='error'>ERRO: Usuario já Cadastrado!</div>";
                    }
                } else {
                    echo "<h1>preencha todos os campos!</h1>";
                }
            }

            ?>
            <form action="./index.php" method="post">
                <h2>Register a new User:</h2>
                <label><input type="text" name="name" placeholder="Username" required></label>
                <label><input type="text" name="phone" placeholder="Phone" required></label>
                <label><input type="email" name="email" placeholder="Email" required></label>
                <button type="submit" value="save" name="save">Save</button>
            </form>


            <form action="">
                <h2>Seach a user:</h2>
                <label for="">
                    <input type="text" name="seach" placeholder="Fisrt Name">
                </label>
                <button type="submit">GO!</button>
            </form>
        </aside>
        <main class="principal">
            <a href="./index.php" class="top">top</a>
            <header>
                <p>ADMIN-USERS</p>
                <a href="../index.html" class="logout">Louout</a>
            </header>

            <section class="table--container">
                <table>
                    <thead>
                        <tr class="title">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th colspan="2">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $list = $user->selectAll();
                        if ($list) {
                            for ($i = 0; $i < count($list); $i++) {

                                $item = $list[$i];

                                echo "<tr>";
                                echo "<td> $item[ID]</td>";
                                echo "<td> $item[nome]</td>";
                                echo "<td> $item[telefone]</td>";
                                echo "<td> $item[email]</td>";
                                echo "<td class='option'>";
                                echo "<form action='index.php' method='POST' onsubmit='return confirm('Tem certeza em exluir esse usuario?')';>
                                            <input type='hidden' name='idExcluir' value='$item[ID]'>
                                            <button type='submit'>Excluir</button>
                                        </form>";

                                echo "<form action='index.php' method='POST' onsubmit='return confirm('Tem certeza em exluir esse usuario?')';>
                                            <input type='hidden' name='idAtualizar' value='$item[ID]'>
                                            <button type='submit'>Atualizar</button>
                                        </form>";

                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr>
                                        <td colspan='4' style='text-align:center';>
                                            Sem registros no banco
                                        </td>
                                    </tr>";
                        }

                        if (isset($_POST['idExcluir'])) {
                            $idUser = addslashes($_POST['idExcluir']);
                            $user->deleteUser($idUser);
                        }
                        ?>
                    </tbody>
                </table>
            </section>
            </m>
        </main>
</body>

</html>