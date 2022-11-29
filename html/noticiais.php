<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../css/timeAND escudo.css">
  <link rel="stylesheet" href="lyon.jpg">
  <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/noticiais.css">
  <title>Notícias</title>
  <style>
    :root {
      --cor-fundo: linear-gradient(55deg, rgb(250, 165, 6), black);
      --cor-submenu: rgb(172, 114, 8);
      --cor-hover: rgb(226, 190, 30);
      --cor-primaria: rgb(231, 241, 236);
    }

    body {
      background-color: white;
    }

    header {
      height: 25vh;
    }

    .dp-menu ul {
      list-style-type: none;
      padding: 0;
    }

    .dp-menu ul {
      background-color: var(--cor-fundo);
    }

    .dp-menu ul ul.sub-menu {
      background-color: var(--cor-submenu);
      z-index: 1;
    }

    .dp-menu ul li {
      display: inline;
      position: relative;
    }

    .dp-menu ul li a {
      color: var(--cor-primaria);
      text-decoration: none;
      display: inline-block;
      padding: 10px;
      transition-duration: 0.3s;
    }

    .dp-menu ul li a:hover {
      background-color: var(--cor-hover);
    }

    /*sub menu*/
    .dp-menu ul ul {
      display: none;
      left: 0;
      position: absolute;
    }

    .dp-menu ul li:hover ul {
      display: block;
    }

    .dp-menu ul ul {
      width: 150px
    }

    .dp-menu ul ul li a {
      display: block;
    }

    /*header>nav {
      width: 100vw;

    }*/

    #marcado {
      color: black;
    }

    a.nav-link {
      color: white;
      font-weight: bold;
      font-size: 85%;
    }

    a.nav-link:hover {
      color: rgb(0, 0, 0);
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

    /*a.navbar-brand,
    a.nav-link {
      color: white;
    }

    a.navbar-brand:hover,
    a.nav-link:hover {
      color: rgb(211, 208, 208);
    }*/
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
            <a class="nav-link" href="#">PARTIDAS</a>
            <ul class="sub-menu">
              <li>
                <a href="calendario.php">CALENDÁRIO DE JOGOS</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticiais.php" id="marcado">NOTÍCIAS</a>
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

  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-8">
        <h1>
          <i class="fa-solid fa-2x fa-bullhorn"></i>
          <span class="logo">De olho nas notíciais!</span>
        </h1>
      </div>
      <div class="col-lg-2">

      </div>
    </div>

    <!-- BARRA DE NAVEGAÇÃO -->

    <div>
      <hr>
      <div>
        <!--<nav class="navbar navbar-expand-lg bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ranking.php">Ranking</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="calendario.php">Calendario</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>-->
        <!--<li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>-->

        <!--</ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </form>
            </div>
          </div>
        </nav>-->
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-8">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

          <!--BOTÕES DO CARROSSEL-->

          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>

          <!-- IMAGENS DO CARROSSEL -->

          <div class="carousel-inner">

            <!-- CARROSSEL 1 -->

            <div class="carousel-item active">
              <img src="../img/imagens/imagem7.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Informações sobre os jogos</h5>
                <!--<p>Some representative placeholder content for the first slide.</p>-->
              </div>
            </div>

            <!-- CARROSSEL 2 -->

            <div class="carousel-item">
              <img src="../img/imagens/imagem2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Jogaddores</h5>

              </div>
            </div>

            <!-- CARROSSEL 3 -->

            <div class="carousel-item">
              <img src="../img/imagens/imagem3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Veja os Gols</h5>

              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- ACCORDION -->

      <div class="col-lg-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Sobre o Time
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CARDS -->

    <div class="row mt-4">
      <div class="col-lg-4">

        <!-- CARD 1 -->

        <div class="card mt-4" style="width: 100%;">
          <img src="../img/imagens/imagem4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Informações sobre os jogos</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->

      <div class="col-lg-4">
        <div class="card mt-4" style="width: 100%;">
          <img src="../img/imagens/imagem5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jogadores</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->

      <div class="col-lg-4">
        <div class="card mt-4" style="width: 100%;">
          <img src="../img/imagens/imagem1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Gols</h5>
            <p class="card-text">Veja os gols da última partida.</p>
            <a href="#" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <p class="mb-0">Desenvolvimento estacio</p>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>