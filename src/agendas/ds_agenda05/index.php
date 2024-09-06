<?php

$professor = ["Matheus Henrique da Silva Mendes", "@asd639#", "Engenharia de Software", "Desenvolvimento de Sistemas II", 3];



function imprimir_Turma_DSII_VBN()
{


    $turma_DSII_VBN = [
        ["Aline", "10", "9.5"],
        ["Alfredo", "8", "5"],
        ["Carla", "5", "6.5"],
        ["César", "9", "9"],
        ["Daniel", "3", "7"],
        ["Esnar", "8", "6"],
        ["Henzo", "6", "8"],
        ["Pablo", "7", "5"],
        ["Wallace", "8", "7"],
        ["Zulmira", "10", "6"]
    ];


    for ($i = 0; $i < count($turma_DSII_VBN); $i++) {
        echo "<tr>";

        for ($j = 0; $j < count($turma_DSII_VBN[$i]); $j++) {

            $item = $turma_DSII_VBN[$i][$j];
            $text = "<td>" . $item . "</td>";
            echo $text;
        }

        echo "</tr>";
    }
}

function imprimir_Turma_DSII_QWE()
{


    $turma_DSII_QWE = [
        ["Ana", "8", "7"],
        ["Bruno", "9", "6"],
        ["Camila", "7", "8"],
        ["Diego", "6", "7"],
        ["Elisa", "4", "5"],
        ["Felipe", "5", "6"],
        ["Gabriela", "9", "8"],
        ["Hugo", "6", "5"],
        ["Isabela", "7", "9"],
        ["João", "8", "6"]
    ];


    for ($i = 0; $i < count($turma_DSII_QWE); $i++) {
        echo "<tr>";

        for ($j = 0; $j < count($turma_DSII_QWE[$i]); $j++) {

            $item = $turma_DSII_QWE[$i][$j];
            $text = "<td>" . $item . "</td>";
            echo $text;
        }

        echo "</tr>";
    }
}


function imprimir_Turma_DSII_XPJ()
{


    $turma_DSII_XPJ = [
        ["Amanda", "6", "8"],
        ["Bernado", "7", "9"],
        ["Carla", "8", "7"],
        ["Daniel", "9", "10"],
        ["Estela", "10", "8"],
        ["Fábio", "5", "7"],
        ["Giovana", "8", "6"],
        ["Heitor", "7", "7"],
        ["Ingrid", "9", "9"],
        ["Júlio", "6", "8"]
    ];


    for ($i = 0; $i < count($turma_DSII_XPJ); $i++) {
        echo "<tr>";

        for ($j = 0; $j < count($turma_DSII_XPJ[$i]); $j++) {

            $item = $turma_DSII_XPJ[$i][$j];
            $text = "<td>" . $item . "</td>";
            echo $text;
        }

        echo "</tr>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda 05 - DS</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <aside>
        <span id="menu--button" class="material-symbols-outlined" onclick="menu_Open()">
            menu
        </span>
        <span id="close--button" class="material-symbols-outlined" onclick="menu_Close()">
            close
        </span>
        <ul>
            <li onclick="displayBlock('home')">Perfil</li>
            <li onclick="displayBlock('OITAVOA')">DSII - VBN</li>
            <li onclick="displayBlock('OITAVOB')">DSII - QWE</li>
            <li onclick="displayBlock('OITAVOC')">DSII - XPJ</li>

        </ul>
    </aside>
    <main onclick="menu_Close()">
        <div class="container">

            <section id="home">
                <div class="banner">
                    <h1>Sistema de Gestão do Professor</h1>
                </div>

                <div class="professor">
                    <h1>Meus Dados</h1>
                    <p>Nome: <?php echo $professor[0] ?> </p>
                    <p>ID:<?php echo $professor[1] ?> </p>
                    <p>Formação: <?php echo $professor[2] ?> </p>
                    <p>Disciplina: <?php echo $professor[3] ?> </p>
                    <p>Qt. Turmas: <?php echo $professor[4] ?> </p>
                </div>
                <div class="turmas">
                    <ul>
                        <h1>Turmas</h1>
                        <li>DSII - VBN</li>
                        <li>DSII - QWE</li>
                        <li>DSII - XPJ</li>

                    </ul>
                </div>
            </section>
            <section id="OITAVOA">
                <div class="responsive--table">

                    <table>
                        <caption>Turma - VBN</caption>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>1º Semestre</th>
                                <th>2º Semestre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php imprimir_Turma_DSII_VBN(); ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <section id="OITAVOB">
                <div class="responsive--table">

                    <table>
                        <caption>Turma - QWE</caption>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>1º Semestre</th>
                                <th>2º Semestre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php imprimir_Turma_DSII_QWE(); ?>
                        </tbody>
                    </table>
                </div>
            </section>
            <section id="OITAVOC">
                <div class="responsive--table">

                    <table>
                        <caption>Turma - XPJ</caption>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>1º Semestre</th>
                                <th>2º Semestre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php imprimir_Turma_DSII_XPJ(); ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
</body>

</html>