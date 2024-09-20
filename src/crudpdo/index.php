<?php
require_once "models/User.php";

$host = "mysql";
$dbname = "db_crudpdo";
$user = "root";
$password = "admin123";

$user = new User($host, $dbname, $user, $password);




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
    <header>
        <div class="container">
            <p>ADMIN-USERS</p>
            <a href="../index.html" class="logout">Logout</a>
        </div>
    </header>
    <main>
        <div class="container">
            <section id="left">
                <?php
                if (isset($_POST['save'])) {
                    $nome = addslashes($_POST['name']);
                    $phone = addslashes($_POST['phone']);
                    $email = addslashes($_POST['email']);

                    if ($nome != null && $phone != null && $email != null) {
                        $isUser = $user->insertUser($nome, $phone, $email);
                        if (!$isUser) {
                            echo "<h1>ERRO: Usuario já Cadastrado!</h1>";
                        }
                    } else {
                        echo "<h1>preencha todos os campos!</h1>";
                    }
                }

                ?>
                <form action="./index.php" method="post">
                    <h2>Register a new User</h2>
                    <label><input type="text" name="name" placeholder="Username" required></label>
                    <label><input type="text" name="phone" placeholder="Phone" required></label>
                    <label><input type="email" name="email" placeholder="Email" required></label>
                    <button type="submit" value="save" name="save">Save</button>
                </form>
            </section>
            <section id="right">
                <table>
                    <thead>
                        <tr>
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
                    
                                    return $item = $list[$i];
                    
                                    echo "<tr>";
                                    echo "<td> $item[ID]</td>";
                                    echo "<td> $item[nome]</td>";
                                    echo "<td> $item[telefone]</td>";
                                    echo "<td> $item[email]</td>";
                                    echo "<td class='option'>";
                                    echo "<form action='index.php' method='POST' onsubmit='return confirm('Tem certeza que deseja excluir este registro?');'>
                                            <input type='hidden' name='id' value='$item[ID]'>
                                            <button type='submit'>Excluir</button>
                                        </form>";
                                    echo "<a href=''>update</a>";
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

                        if (isset($_POST['id'])) 
                        {
                            $idUser = addslashes($_POST['id']);
                            $user->deleteUser($idUser);
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</body>

</html>