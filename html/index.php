<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="../css/timeAND escudo.css">
  <link rel="stylesheet" href="lyon.jpg">
  <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">

  <title>Escolinha de futebol</title>
  <style>

    

    .card-title {
      text-align: center;
    }

    .card-text {
      text-align: center;
    }

    img.d-block {
      z-index: 0;
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
            <a class="nav-link" id="marcado" href="index.php">HOME</a>
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
            <a class="nav-link" href="#">PARTIDAS</a>
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
  </div>

  <!--CARROSSEL-->

  <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <!--IMAGENS DO CARROSSEL-->

      <div class="carousel-inner">
        <div class="carousel-item active">
            <!--IMAGEM 1--> 
          <img class="d-block w-100" src="../img/imagens/imagem6.jpg" alt="calendario">
        </div>
        <div class="carousel-item">
           <!--IMAGEM 2-->  
          <img class="d-block w-100" src="../img/imagens/imagem4.jpg" alt="galeria de fotos">
        </div>
         <!--IMAGEM 3-->
        <div class="carousel-item">
          <img class="d-block w-100" src="../img/imagens/imagem3.jpg" alt="historico de partidas">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </section>

      <!--CARDS-->

      <section>
        <div class="container mb-5">
          <div class="row mt-4">
            <div class="col--sm-12 text-dark text-center my-3">
              <h1 class="mais">Mais</h1>

            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="card border-success mt-4">
                <img class="card-img-top" src="https://source.unsplash.com/300x200/?torcida"
                  alt="Imagem de capa do card">

                <!-- CARD 1 -->
                <div class="card-body">
                  <h5 class="card-title">CALENDARIO DE PARTIDAS</h5>
                  <p class="card-text">Confira os futuros jogos do seu time!</p>
                  <a href="calendario.php" class="btn btn-outline-success">Visitar</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card border-success mt-4">
                <img class="card-img-top" src="https://source.unsplash.com/300x200/?torcida"
                  alt="Imagem de capa do card">

                <!-- CARD 2 -->
                <div class="card-body">
                  <h5 class="card-title">CONFIRA O QUE ROLOU</h5>
                  <p class="card-text">Local destinado para ir diretamente para galeria de videos e fotos da ultima
                    partida
                  </p>
                  <a href="#" class="btn btn-outline-success">Visitar</a>
                </div>
              </div>
            </div>

            <!-- CARD 3 -->
            <div class="col-sm-4">
              <div class="card border-success mt-4">
                <img class="card-img-top" src="https://source.unsplash.com/300x200/?ball" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title">ULTIMAS NOTICIAS</h5>
                  <p class="card-text">Local destinado a informacoes extras sobre partidas e acontecimentos</p>
                  <a href="noticiais.php" class="btn btn-outline-success">Visitar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>
        <p class="mb-0">Desenvolvimento estacio</p>
      </footer>





      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>