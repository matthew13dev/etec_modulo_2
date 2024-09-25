<?php
require_once "models/User.php";

$host = "mysql";
$dbname = "db_crudpdo";
$user = "root";
$password = "admin123";

$user = new User($host, $dbname, $user, $password);

$idDelete = isset($_POST['idDelete']);
if ($idDelete) {
    $idDelete = addslashes($_POST['idDelete']);
    $user->deleteUser($idDelete);
}



if (isset($_POST['idUpdate'])) {
    $idUpdate = addslashes($_POST['idUpdate']);
    $res = $user->selectUser($idUpdate);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
    <link rel="stylesheet" href="style.css">
    <script src="./script.js" defer></script>
</head>

<body>
    <main class="container">


        <aside>
            <?php
            if (isset($_POST['btn-insert']) || isset($_POST['btn-update'])) {

                if (isset($_POST['btn-update'])) {

                    $idUpdate = addslashes($_POST['btn-update']);
                    $nome = addslashes($_POST['name']);
                    $phone = addslashes($_POST['phone']);
                    $email = addslashes($_POST['email']);

                    if ($nome != null && $phone != null && $email != null) {
                        $user->updateUser($idUpdate, $nome, $phone, $email);
                    }

                    
                } else {
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
            }

            ?>
            <form action="./index.php" method="post">
                <?php if (isset($res)) {
                    echo "<h2>UPDATE your User: $idUpdate</h2>";
                } else {
                    echo "<h2>INSERT a new User:</h2>";
                } ?>
                <label><input type="text" name="name" placeholder="Username" required
                        value="<?php if (isset($res)) {
                                    echo $res['nome'];
                                } ?>"></label>

                <label><input type="text" name="phone" placeholder="Phone" required
                        value="<?php if (isset($res)) {
                                    echo $res['telefone'];
                                } ?>"></label>

                <label><input type="email" name="email" placeholder="Email" required
                        value="<?php if (isset($res)) {
                                    echo $res['email'];
                                } ?>"></label>

                <?php
                if (isset($res)) {
                    echo "<button class='btn-form' type='submit' value='$res[ID]' name='btn-update'>Update</button>";
                } else {
                    echo "<button class='btn-form' type='submit' value='Insert' name='btn-insert'>Insert</button>";
                }
                ?>
            </form>


            <form action="">
                <h2>SELECT a user:</h2>
                <label for="">
                    <input type="text" name="nome" placeholder="User's name">
                </label>
                <button class="btn-form" type="submit" value="seach">Select</button>
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

                                $register =
                                    "<tr>
                                <td> $item[ID]</td>
                                <td> $item[nome]</td>
                                <td> $item[telefone]</td>
                                <td> $item[email]</td>
                                <td class='option'>
                                <form action='index.php' method='POST'>
                                    <input type='hidden' name='idDelete' value='$item[ID]'>
                                    <button class='btn-option-delete' type='submit'>Delete</button>
                                </form>
                                

                                <form action='index.php' method='POST';>
                                    <input type='hidden' name='idUpdate' value='$item[ID]'>
                                    <button class='btn-option-update' type='submit'>Edit</button>
                                </form>

                                </td>
                                </tr>";
                                echo $register;
                            }
                        } else {
                            echo "<tr>
                                    <td colspan='4' style='text-align:center';>
                                        Sem registros no banco
                                    </td>
                                </tr>";
                        }


                        ?>
                    </tbody>
                </table>
            </section>
        </main>
</body>

</html>