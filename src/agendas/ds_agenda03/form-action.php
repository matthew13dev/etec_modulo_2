<?php
$cliente =  $_POST['nome'];
$compra = (int)$_POST['dinheiro'];
$pagamento = $_POST['pagamento'];


$total = 0;
$desconto_percent = 0;
$desconto_real = 0;

$desconto_debito = 0.05;
$desconto_credito = 0.03;
$desconto_deposito = 0.1;
$desconto_pix = 0.1;

$cincoPercent = "5%";
$tresPercent = "3%";
$dezPercent = "10%";

if ($pagamento === "debito") {
    $desconto_real = $compra * $desconto_debito;
    $total = $compra - $desconto_real;
    $desconto_percent = $cincoPercent;
    $pagamento = "Cartão de Débito";
}

if ($pagamento === "credito") {
    $desconto_real = $compra * $desconto_credito;
    $total = $compra - $desconto_real;
    $desconto_percent = $tresPercent;
    $pagamento = "Cartão de Crédito";
}

if ($pagamento === "deposito" || $pagamento === "pix") {
    $desconto_real = $compra * $desconto_deposito;
    $total = $compra - $desconto_real;
    $desconto_percent = $dezPercent;
    if ($pagamento === "pix") {
        $pagamento = "Pix";
    } else {
        $pagamento = "Depósito Bancário";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Action</title>
    <link rel="stylesheet" href="./css/form-action.css">
</head>

<body>

    <header>
        <div class="container">
            <h3>Madeira e Cia Ltda</h3>
            <menu>
                <ul>
                    <li><a href="">Colaboradores</a></li>
                    <li><a href="">Fazer um Orçamento</a></li>
                </ul>
            </menu>
        </div>
    </header>


    <main>
        <div class="container">
            <button class="voltar"><a href="./index.html">Nova Consulta</a></button>
            <div class="box">
                <h1>Parabéns <?php echo $cliente ?>!</h1>
                <p>
                    Valor da Compra Sem Desconto:<br> <span>R$<?php echo $compra ?></span>
                </p>

                <p>
                    Forma de Pagamento: <br> <span><?php echo $pagamento; ?>
                </p>

                <p>
                    Desconto: <br> <span><?php echo $desconto_percent ?></span>
                </p>

                <p>
                    Você economizou: <br> <span>R$<?php echo $desconto_real ?></span>
                </p>

                <p>
                    Valor à Pagar: <br> <span>R$<?php echo $total ?></span>
                </p>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>Desenvolvido por Matheus Henrique Mendes</p>
            <p>ETEC - Desenvolvimento de Sistemas</p>
            <p>Turma DWK</p>
            <p>Agenda 03 - DS II</p>
        </div>
    </footer>

</body>

</html>