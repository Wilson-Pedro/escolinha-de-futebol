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
  <title>Calendario</title>
</head>

<body>
  <header class="navbar navbar-light bg-gradient">
    <nav class="dp-menu">
      <ul class="nav">
        <li class="nav-item ">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">JOGADORES</a>
          <ul class="sub-menu" id="sobrepor">
            <li>
              <a href="#">sub13</a>
              <a href="#">sub14</a>
              <a href="#">sub15</a>
              <a href="#">sub16</a>
              <a href="#">sub17</a>
            </li>
            <li>
              <a href="ranking.php">RANKING</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" id="marcado">PARTIDAS</a>
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
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <h1 id="calendarioDeJogos">CALENDARIO DE JOGOS</h1>
    <table>
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
    </table>
  </main>
  <footer>
    <p class="mb-0">Desenvolvimento estacio</p>
  </footer>
</body>

</html>