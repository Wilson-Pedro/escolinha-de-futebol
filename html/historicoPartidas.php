<?php
require('db/conexao.php');

$sql = $pdo->prepare("SELECT * FROM tblpartidas ORDER BY id LIMIT 0, 1000");
$sql->execute();
$dados = $sql->fetchAll();


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="lyon.jpg">
    <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/calendario.css">
    <link rel="stylesheet" href="../css/timeANDescudo.css">
    <title>Histório de Partidas</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    table {
        width: 80vw;
        border-collapse: collapse;
        background-color: rgb(243, 231, 231);
        color: black;
        margin: auto;
        margin-top: 6vh;
    }

    td,
    th {
        text-align: center;
        border: 1px solid rgb(0, 0, 0);
    }

    #calendarioDeJogos {
        text-align: center;
        padding-top: 5vh;
        font-weight: bold;
        padding-bottom: 3vh;
    }

    header>nav>ul>li>a {
        font-size: 86%;
    }

    .dp-menu ul li a {
        font-weight: bold;
    }
</style>

<body>
    <!-- CABEÇALHO -->
    <div class="cabecalho">
        <div class="nomeTime">
            <h1><a href="home.php">LYON SLZ</a></h1>
        </div>
        <div class="escudoTime">
            <a href="home.php"><img src="../img/favicon/favicon.png" alt=""></a>
        </div>
        <header class="navbar mb-2">
            <nav class="dp-menu">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">JOGADORES</a>
                        <ul class="sub-menu" id="sobrepor">
                            <li>
                                <a href="subs/sub09.php">sub09</a>
                                <a href="subs/sub11.php">sub11</a>
                                <a href="subs/sub13.php">sub13</a>
                                <a href="subs/sub15.php">sub15</a>
                                <a href="subs/sub17.php">sub17</a>
                            </li>
                            <li>
                                <a href="ranking.php">RANKING</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="marcado" href="#">PARTIDAS</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="calendario.php">CALENDÁRIO DE JOGOS</a>
                                <a href="historicoPartidas.php" id="marcado">HISTÓRICO DE PARTIDAS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticiais.php">NOTÍCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticiais.php">MAIS</a>
                        <ul class="sub-menu" id="sobrepor">
                            <li>
                            <li>
                                <a href="login.php">Logar</a>
                            </li>
                    </li>
                </ul>
                </li>
                </ul>
            </nav>
        </header>
    </div>

    <main>
        <h1 id="calendarioDeJogos">HISTÓRICO DE PARTIDAS</h1>
        <?php
        $data_Atual = date("Y-m-d");
        if (count($dados) > 0) {
            echo "<table class='table table-striped'>
        <thead class=table-dark>
        <tr>
            <th>JOGOS</th>
            <th>RESULTADO</th>
            <th>DATA</th>
        </tr>
        </thead>";

            foreach ($dados as $chaves => $valor) {
                $dataJogo = $valor['data_partida'];
                if (strtotime($dataJogo) <= strtotime($data_Atual)) {
                    echo "<tr>
          <td>" . "Lyon X " . $valor['timeb'] . "</td>
          <td>" . $valor['gols_lyon'] . " x " . $valor['gols_adv'] . "</td>
          <td>" . date("d/m/y", strtotime($valor['data_partida'])) . "</td>

    </tr>";
                }
            }

            echo "</table>";
        } else {
            echo "<p>Nenhum jogador cadastrado</p>";
        }

        ?>
    </main>
    <footer>
        <p class="mb-0">Escolinha de Futebol LYON SLZ</p>
    </footer>
</body>

</html>