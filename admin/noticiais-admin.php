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

    .dp-menu ul li a {
      font-weight: bold;
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

    div.placar {
      text-align: center;
    }

    div#calendar > h1 > a {
      text-decoration: none;
      color: rgb(31, 30, 30);
    }

    div#calendar > h1 {
      margin-top: 28vh;
      cursor: pointer;
    }

    div#calendar > h1:hover {
      text-decoration: underline;
    }

    #calendar >  h1 > a:hover {
      color: rgb(8, 21, 83);  
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
            <a class="nav-link" href="index-admin.php">HOME</a>
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
                <a href="../html/index.php">Sair</a>
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
        <img src="../img/imagens/imagem1.jpg" alt="">
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
      </div>
    </div>

    <hr>

    <!-- PLACAR -->

    <div class="row mt-4">
      <div class="col-lg-4">
        <img src="../img/imagens/imagem12.png" class="mt-3" alt="...">
      </div>

      <div class="col-lg-4">

      </div>

      <div class="col-lg-4">
        <div class="placar">
          <h1>Placar do jogo</h1>
          <p class="fs-2 mt-3"> Lyon 2 x 0 Tiger </p>
        </div>
      </div>
    </div>
    
    <!-- ??? -->
    <hr>
  
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
    <hr>

    <div class="row mt-4">
      <div class="col-lg-4">
        <img src="../img/imagens/imagem19.png" class="mt-3" alt="...">
      </div>

      <div class="col-lg-4">

      </div>

      <div class="col-lg-4 mt-4">
        <div class="placar mt-4" id="calendar">
          <h1><a href="calendario-admin.php">Confira os futuros jogos.</a></h1>
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