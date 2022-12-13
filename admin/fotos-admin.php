<?php
include('../html/db/conexao.php');

$pasta = "../img/imgArquivos/";
$sql = $pdo->prepare("SELECT * FROM tblfotos");
$sql->execute();
$dados = $sql->fetchAll();

if (isset($_POST['deletar'])) {
  $sql = $pdo->prepare("DELETE FROM tblfotos");
  $sql->execute();
  if (count($dados) > 0) {
    foreach ($dados as $chaves => $valor) {
      unlink("../img/imgArquivos/" . $valor['arquivo']);
    }
  }
}

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

  form {
    display: inline-block;
  }

  dialog {
    height: 30vh;
    min-width: 30vw;
    border: 1px 1px 1px black;
  }

  dialog>h2 {
    text-align: center;
    font-size: 20pt;
    margin-top: 4vh;
  }

  dialog>form>button {
    margin: 10px;
  }

  dialog::backdrop {
    background-color: rgba(54, 54, 54, 0.699);
  }

  button {
    color: white;
  }

  form#form_img_deleta{
    text-align: center;
    align-items: center;
    justify-content: center;
    width: 50vw;
    padding: 10px;
    margin-top: 2vw;
    margin-left: 20vw;
  }

  form#form_img_deleta > button {
    background-color: rgb(206, 42, 42);
    padding: 10px;
    border-radius: 6px;
    border: none;
    margin-left: 1vw;
  }

  form#form_img_deleta > button:hover {
    background-color: rgb(179, 29, 29);
  }

  button > a.ancora {
    color: white;
    text-decoration: none;
  }

  button.btn-deletar {
    display: block;
    margin: auto;
    background-color: rgb(206, 42, 42);
    padding: 10px;
    border-radius: 6px;
    border: none;
  }

  button.btn-deletar:hover {
    background-color: rgb(179, 29, 29);
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

  .oculto{
    display: none;
  }
</style>

<body id="body">

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
                <a href="historicoPartidas-admin.php">HISTÓRICO DE PARTIDAS</a>
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
                <a href="../html/home.php">Sair</a>
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

      <div id="botoes">
        <form action="envia.php" method="POST" enctype="multipart/form-data">
          <button type="button" class="btn btn-primary" onclick="escolher()">Escolher Foto</button>
          <input class="hidden" type="file" id="arquivo" name="arquivo[]" multiple="multiple" value="">
          <button type="submit" value="Enviar" id="postar" class="btn btn-primary" onclick="postar()" disabled>Postar foto</button>
        </form>
        <button onclick="DeleteALL()" class="btn btn-danger">Deletar Tudo</button>

        <!-- DIALOG -->
        <dialog>
          <h2>Deletar todas as Imagens?</h2>
          <form action="" method="POST">
            <button id="nao" onclick="nao()" class="btn btn-danger mt-4">Não</button>
            <button id="sim" type="submit" id="deletar" name="deletar" class="btn btn-danger mt-4">Sim</button>
          </form>
        </dialog>

      </div>
      <div id="fotos">
        <?php include('lista-admin.php'); ?>
      </div>
  </main>
  </div>
  <footer>
    <p>Escolinha de Futebol LYON SLZ</p>
  </footer>
  <script>
    var modal = document.querySelector('dialog')
    var arquivo = document.getElementById('arquivo');

    function escolher() {
      arquivo.click()
      document.getElementById('postar').disabled = false;
    }

    function postar() {
      document.getElementById('postar').disabled = true;
    }

    function DeleteALL() {
      modal.showModal();
    }

    function nao() {
      modal.close();
    }
  </script>
</body>

</html>