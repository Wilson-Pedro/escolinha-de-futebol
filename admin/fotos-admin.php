<?php
require('../html/db/conexao.php');

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
    <link rel="stylesheet" href="../css/noticiais.css">
    <link rel="stylesheet" href="../css/imgFile.css">

    <link rel="stylesheet" href="../css/navegacao.css">
    <title>Fotos</title>
</head>
<style>
    body {
        margin: 0;
    }

    img {
        margin: auto;
        display: block;
    }

    h1,
    h2,
    p {
        margin: 0px;
        text-align: center;
    }

    .cointainer {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
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

    <div class="container-fluid mt-3">

        <img src="../img/favicon/favicon.png" width="200">

        <h2>UPLOAD DE ARQUIVOS</h2>
        <div class="card">
            <div class="card-bordy">

                <form action="envia.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="arquivo[]" multiple="multiple">
                    <button type="submit" value="Enviar" class="btn btn-primary">Postar foto</button>
                </form>
                <form action="" method="POST">
                    <button type="submit" id="deletar" name="deletar" class="btn btn-danger">Deletar Imagens</button>
                </form>

            </div>
        </div>

        <h6 class="mt-3">ARQUIVOS ENVIADOS</h6>
        <?php include('lista.php'); ?>
        

    </div>
</body>

</html>