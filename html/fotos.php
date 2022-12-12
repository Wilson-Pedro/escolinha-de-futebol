<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/timeANDescudo.css">
    <link rel="stylesheet" href="lyon.jpg">
    <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/imgFile.css">
    <link rel="stylesheet" href="../css/navegacao.css">
    <title>Fotos</title>
</head>
<style>
    #body {
        max-width: 100%;
        background-color: rgb(214, 168, 100);
    }

    h1 {
        text-align: center;
    }

    .logo {
        font-weight: bold;
    }

    main {
        margin: auto;
        background-color: rgb(255, 255, 255);
        min-height: 100vh;
        display: block;
        margin: auto;
        width: 92vw;
        box-shadow: 0px 2px 5px 0px black;
    }

    button {
        color: white;
    }

    .hidden {
        display: none;
    }

    footer {
        background-color: #343a40;
        padding: 10px;
    }

    footer>p {
        text-align: center;
        color: white;
        font-weight: bold;
    }

    div#fotos>img {
        display: block;
        margin: auto;
    }

    div#botoes {
        text-align: center;
    }
</style>

<body id="body">
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
            <a class="nav-link" href="noticiais.php">JOGADORES</a>
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
            <a class="nav-link" href="noticiais.php">PARTIDAS</a>
            <ul class="sub-menu">
              <li>
                <a href="calendario.php">CALENDÁRIO DE JOGOS</a>
                <a href="historicoPartidas.php">HISTÓRICO DE PARTIDAS</a>
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
        <br>
        <h1>
            <i class="fa-solid fa-2x fa-camera"></i>
            <span class="logo">FOTOS DO TIME</span>
        </h1>
        <div class="container-fluid mt-3">
            <div id="fotos">
                <?php include('../admin/lista.php'); ?>
            </div>
    </main>
    </div>
    <footer>
        <p class="mb-0">Escolinha de Futebol LYON SLZ</p>
    </footer>
</body>

</html>