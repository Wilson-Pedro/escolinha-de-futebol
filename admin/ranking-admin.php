<?php
require('../html/db/conexao.php');

$sql = $pdo->prepare("SELECT * FROM tbljogadores ORDER BY id LIMIT 1,1000");
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
  <link rel="stylesheet" href="../css/timeAND escudo.css">
  <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/ranking.css">
  <title>Ranking</title>
  <style>
    body {
      font-family: 'Arial';
    }

    header>nav>ul>li>a {
      font-size: 86%;
    }

    .dp-menu ul li a {
      font-weight: bold;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      padding: 10px;
      text-align: center;
      border: solid 1px black;
    }

    .oculto {
      display: none;
    }

    main {
      width: 98vw;
    }
  </style>
</head>

<body>
  <!-- CABEÇALHO -->
  <div class="cabecalho">
    <div class="nomeTime">
      <h1><a href="index.php">LYON SLZ</a></h1>
    </div>
    <div class="escudoTime">
      <a href="index.php"><img src="../img/favicon/favicon.png" alt=""></a>
    </div>
    <header class="navbar mb-2">
      <nav class="dp-menu">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="index-admin.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="marcado" href="#">JOGADORES</a>
            <ul class="sub-menu" id="sobrepor">
              <li>
                <a href="subsAdmin/sub09-admin.php">sub09</a>
                <a href="subsAdmin/sub11-admin.php">sub11</a>
                <a href="subsAdmin/sub13-admin.php">sub13</a>
                <a href="subsAdmin/sub15-admin.php">sub15</a>
                <a href="subsAdmin/sub17-admin.php">sub17</a>
              </li>
              <li>
                <a href="ranking-admin.php" id="marcado">RANKING</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PARTIDAS</a>
            <ul class="sub-menu">
              <li>
                <a href="calendario-admin.php">CALENDÁRIO DE JOGOS</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticiais-admin.php">NOTÍCIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MAIS</a>
            <ul class="sub-menu" id="sobrepor">
              <li>
              <li>
                <a href="cadastro-de-jogador.php">Cadastrar Jogador</a>
                <a href="cadastro-de-partidas.php">Cadastrar partida</a>
                <a href="../html/index.php">Sair</a>
              </li>
          </li>
        </ul>
        </li>
        </ul>
      </nav>
    </header>
  </div>
  <main>
    <br><br><br>
    <?php
    if (count($dados) > 0) {
      echo "<table class=table table-striped>
        <thead class=table-dark>
        <tr>
            <th>Posição</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Posição</th>
            <th>Gols</th>
        </tr>
        </thead>";
      $maior = 0;
      foreach ($dados as $chaves => $valor) {
        if ($valor['gols'] > $maior) {
          $maior = $valor['gols'];
        }
      }

      $aux = 0;
      $contMaior = 0;
      $cont = 0;
      $ranking = 1;
      while ($cont < 11) {
        foreach ($dados as $chaves => $valor) {
          if ($valor['gols'] == $maior) {
            if ($ranking == 11) {
              break;
            }
            echo "<tr>
                        <td>" . $ranking . "</td>
                        <td>" . $valor['nome'] . "</td>
                        <td>" . $valor['idade'] . "</td>
                        <td>" . $valor['posicao'] . "</td>
                        <td>" . $valor['gols'] . "</td>
                    </tr>";
            $ranking += 1;
          }
        }
        $maior -= 1;
        $cont += 1;
        if ($cont == 10) {
          break;
        }
      }


      echo "</table>";
    } else {
      echo "<p>Nenhum Jogador cadastrado</p>";
    }

    ?>
  </main>
  <footer>
    <p class="mb-0">Desenvolvimento estacio</p>
  </footer>
</body>

</html>