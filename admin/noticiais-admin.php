<?php

include('../html/db/conexao.php');

$sql = $pdo->prepare("SELECT * FROM tblpartidas ORDER BY id LIMIT 0, 10000");
$sql->execute();
$dados = $sql->fetchAll();

?>

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
  <link rel="stylesheet" href="../css/imgFile.css">
  <link rel="stylesheet" href="../css/news.css">

  <title>Notícias</title>

</head>
<style>
  #btn-postar {
    color: white;
    font-weight: bold;
  }

  #btn-postar:hover {
    background-color: rgb(230, 150, 3);
  }

</style>

<body>
  <!-- CABEÇALHO -->
  <div class="cabecalho">
    <div class="nomeTime">
      <h1><a href="home-admin.php">LYON SLZ</a></h1>
    </div>
    <div class="escudoTime">
      <a href="home-admin.php"><img src="../img/favicon/favicon.png" alt=""></a>
    </div>
    <header class="navbar mb-2">
      <nav class="dp-menu">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="home-admin.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticiais-admin.php">JOGADORES</a>
            <ul class="sub-menu" id="sobrepor">
              <li>
                <a href="subsAdmin/sub09-admin.php">sub09</a>
                <a href="subsAdmin/sub11-admin.php">sub11</a>
                <a href="subsAdmin/sub13-admin.php">sub13</a>
                <a href="subsAdmin/sub15-admin.php">sub15</a>
                <a href="subsAdmin/sub17-admin.php">sub17</a>
              </li>
              <li>
                <a href="ranking-admin.php">RANKING</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticiais-admin.php">PARTIDAS</a>
            <ul class="sub-menu">
              <li>
                <a href="calendario-admin.php">CALENDÁRIO DE JOGOS</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="noticiais-admin.php" id="marcado">NOTÍCIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MAIS</a>
            <ul class="sub-menu" id="sobrepor">
              <li>
              <li>
                <a href="cadastro-de-jogador.php">Cadastrar Jogador</a>
                <a href="cadastro-de-partidas.php">Cadastrar partida</a>
                <a href="../html/home.php">Sair</a>
              </li>
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

    <div class="row mt-4 mb-4">
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
              <img src="../img/imgTime/imgTime03.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Informações sobre os jogos</h5>
                <!--<p>Some representative placeholder content for the first slide.</p>-->
              </div>
            </div>

            <!-- CARROSSEL 2 -->

            <div class="carousel-item">
              <img src="../img/imgTime/imgTime05.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Jogaddores</h5>

              </div>
            </div>

            <!-- CARROSSEL 3 -->

            <div class="carousel-item">
              <img src="../img/imgTime/imgTime06.png" class="d-block w-100" alt="...">
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
                Sobre o Técnico.
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
                Últimas noticias.
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto mt-4">
          <a href="upload.php" class="btn btn-warning mt-2" id="btn-postar" type="button">Ver Fotos</a>
        </div>

      </div>
    </div>


    <div class="barra"></div>

    <!-- PLACAR -->

    <div class="row mt-4">
      <div class="col-lg-4" class="div-img">
        <img src="../img/imagens/imagem12.png" class="mt-3" alt="...">
      </div>

      <!-- NADA -->

      <div class="col-lg-4">

      </div>

      <div class="col-lg-4">
        <div class="placar">
          <h1>Placar do jogo</h1>
          <p class="fs-2 mt-3"> Lyon 2 x 0 Tiger </p>
        </div>
      </div>
    </div>

    <!-- JOGO DE HOJE -->
    <div class="barra"></div>

    <div class="row mt-4">
      <div class="col-lg-4">
        <div class="placar">
          <h1>Craques da partida</h1>

        </div>
      </div>

      <div class="col-lg-4">

      </div>

      <div class="col-lg-4">
        <div class="placar">
          <img src="../img/imagens/imagem10.png" alt="">
        </div>
      </div>
    </div>

    <!-- CALENÁRIO -->
    <div class="barra"></div>

    <div class="row mt-4">
      <div class="col-lg-4" id="calendar">
        <img src="../img/imagens/imagem19.png" id="img-calendar" alt="...">
        <a href="calendario-admin.php" class="btn btn-warning">Confira os futuros jogos.</a>
      </div>

      <div class="col-lg-4">

      </div>

      <div class="col-lg-4">
        <div class="mt-4" id="jogosToday">
          <?php
          $cont = 0;
          echo "<h1>Jogos: </h1>";
          echo "<hr>";
          $dataAtual = date("Y-m-d");
          if (count($dados) > 0) {
            foreach ($dados as $chaves => $valor) {
              if ($valor['data_partida'] == $dataAtual) {
                $cont += 1;
                if ($cont == 1) {
                  echo "<h1>Hoje tem Jogo!</h1>";
                }
                echo "<h3> Lyon x " . $valor['timeb'] . "</h3>";
                echo "<h3>Horário: " . date("H:i", strtotime($valor['horario'])) . "</h3>";
                echo "<hr>";
              }
            }
            if ($cont == 0) {
              echo "<h1>Não haverá jogo hoje.</h1><br>";
              echo "<p>Para mais informações acesse o calendário</p>";
            }
          }
          ?>
        </div>
      </div>
    </div>

  </div>


  <footer class="mt-4">
    <p class="mb-0">Desenvolvimento estacio</p>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
<script>
  /*const inputFile = document.querySelector("#picture__input");
  const pictureImage = document.querySelector(".picture__image");

  const pictureImageTxt = "Choose an image";
  pictureImage.innerHTML = pictureImageTxt;

  inputFile.addEventListener("change", function(e) {
    const inputTarget = e.target;
    const file = inputTarget.files[0];

    if (file) {
      const reader = new FileReader();

      reader.addEventListener("load", function(e) {
        const readerTarget = e.target;
        var img = document.querySelector("#img");
        //inputFile.style.background = 'white';

        img.src = readerTarget.result;
        img.classList.add("picture__img");

        pictureImage.innerHTML = "";
        pictureImage.appendChild(img);
      });

      reader.readAsDataURL(file);
    } else {
      pictureImage.innerHTML = pictureImageTxt;
    }
  });*/
</script>

</html>