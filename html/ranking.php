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
    <link rel="stylesheet" href="../css/ranking.css">
    <title>Ranking</title>
</head>
<body>
    <header class="navbar navbar-light bg-gradient">
        <nav class="dp-menu">
            <ul class="nav">
              <li class="nav-item ">
                <a class="nav-link" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="marcado" href="#">JOGADORES</a>
                <ul class="sub-menu">
                  <li><a href="perfl-Jogadores.php">PERFIL DOS JOGADORES</a></li>
                  <li><a href="ranking.php">RANKING</a></li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PARTIDAS</a>
                <ul class="sub-menu">
                  <li><a href="#">CALENDARIO DE JOGOS</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="noticiais.php">NOTÍCIAS</a>
              </li>            
            </ul>
          </nav>
    </header>
    <main>
        <h2>Ranking dos Jogadores</h2>
        <div>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jogador</th>
                        <th scope="col">Gols</th>
                        <th scope="col">Posição</th>
                      </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td class="nome-jogador">Mark</td>
                        <td>12</td>
                        <td>atacante</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td class="nome-jogador">Jacob</td>
                        <td>10</td>
                        <td>atacante</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td class="nome-jogador">Juninho</td>
                        <td>9</td>
                        <td>meia</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td class="nome-jogador">Mark</td>
                        <td>7</td>
                        <td>lateral</td>
                      </tr>
                      <tr>
                        <th scope="row">5</th>
                        <td class="nome-jogador">Jacob</td>
                        <td>6</td>
                        <td>atacante</td>
                      </tr>
                      <tr>
                        <th scope="row">6</th>
                        <td class="nome-jogador">Mark</td>
                        <td>5</td>
                        <td>meia</td>
                      </tr>
                      <tr>
                        <th scope="row">7</th>
                        <td class="nome-jogador">Mark</td>
                        <td>3</td>
                        <td>atacante</td>
                      </tr>
                      <tr>
                        <th scope="row">8</th>
                        <td class="nome-jogador">Jacob</td>
                        <td>2</td>
                        <td>meia</td>
                      </tr>
                      <tr>
                        <th scope="row">9</th>
                        <td class="nome-jogador">Mark</td>
                        <td>1</td>
                        <td>lateral</td>
                      </tr>
                      <tr>
                        <th scope="row">10</th>
                        <td class="nome-jogador">Mark</td>
                        <td>1</td>
                        <td>atacante</td>
                      </tr>
                </tbody>
              </table>
        </div>
    </main>
    <footer>
        <p class="mb-0">Desenvolvimento estacio</p>
    </footer>
</body>
</html>