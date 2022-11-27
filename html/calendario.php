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
  <link rel="stylesheet" href="../css/timeAND escudo.css">
  <title>Calendario</title>
</head>
<style>
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
      <h1><a href="index.php">LYON SLZ</a></h1>
    </div>
    <div class="escudoTime">
      <a href="index.php"><img src="../img/favicon/favicon.png" alt=""></a>
    </div>
    <header class="navbar mb-2">
      <nav class="dp-menu">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">HOME</a>
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
                <a href="calendario.php">CALENDARIO DE JOGOS</a>
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
                <a href="login.php">Área privada</a>
                <a href="cadastro-de-jogador.php">Cadastrar Jogador</a>
                <a href="cadastro-de-partidas.php">Cadastrar partida</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
  </div>

  <main>
    <h1 id="calendarioDeJogos">CALENDARIO DE JOGOS</h1>
    <?php
    if (count($dados) > 0) {
      echo "<table class=table table-striped>
      <thead class=table-dark>
      <tr>
          <th>LOCAL</th>
          <th>JOGOS</th>
          <th>DATA</th>
          <th>HORARIO</th>
      </tr>
      </thead>";

      foreach ($dados as $chaves => $valor) {
        echo "<tr>
              <td>" . $valor['local'] . "</td>
              <td>" . $valor['timea'] . " X " . $valor['timeb'] . "</td>
              <td>" . $valor['data'] . "</td>
              <td>" . $valor['horario'] . "</td>
        </tr>";
      }

      echo "</table>";
    } else {
      echo "<p>Nenhum jogador cadastrado</p>";
    }

    ?>
  </main>
  <footer>
    <p class="mb-0">Desenvolvimento estacio</p>
  </footer>
</body>

</html>
<!--table>
      <thead>
        <tr>
          <th>LOCAL</th>
          <th>JOGOS</th>
          <th>DATA</th>
          <th>HORARIO</th>
        </tr>
      </thead>
      <tr>
        <td>Local</td>
        <td>Time A x Time B</td>
        <td>22/10</td>
        <td>15:00</td>
      </tr>
      <tr>
        <td>Local</td>
        <td>Time C x Time D</td>
        <td>25/10</td>
        <td>16:45</td>
      </tr>
      <tr>
        <td>Local</td>
        <td>Time E x Time F</td>
        <td>30/10</td>
        <td>20:00</td>
      </tr>
      <tr>
        <td>Local</td>
        <td>Time G x Time H</td>
        <td>02/11</td>
        <td>14:30</td>
      </tr>
      <tr>
        <td>Local</td>
        <td>Time N x Time M</td>
        <td>06/11</td>
        <td>17:15</td>
      </tr>
      <tr>
        <td>Local</td>
        <td>Time Z x Time X</td>
        <td>10/11</td>
        <td>21:00</td>
      </tr>
    </table>-->