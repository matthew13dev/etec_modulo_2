<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso!</title>
    <link rel="stylesheet" href="css/action.css">
</head>

<body>
    <header>
        <div class="container">
            <img src="./images/image.png" alt="">
        </div>
    </header>
    <main>
        <div class="container">
            <h1>Seus dados foram salvos com Sucesso!</h1>
            <table>
                <tbody>
                    <tr>
                        <td>Nome:</td>
                        <td> <?php echo $_POST["nome"] ?></td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td> <?php echo $_POST["sexo"] ?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td> <?php echo $_POST["email"] ?></td>
                    </tr>
                    <tr>
                        <td>Formação:</td>
                        <td> <?php echo $_POST["formacao"] ?></td>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <td> <?php echo $_POST["descricao"] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>Desenvolvido por <a href="">Matheus Henrique Mendes</a></p>
        </div>
    </footer>
</body>

</html>