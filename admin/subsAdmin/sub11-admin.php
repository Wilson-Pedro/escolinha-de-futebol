<?php
require('../../html/db/conexao.php');

$sql = $pdo->prepare("SELECT * FROM tbljogadores ORDER BY id LIMIT 1,10000");
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
  <link rel="stylesheet" href="../../css/layout.css">
  <link rel="stylesheet" href="../../css/timeAND escudo.css">
  <link rel="stylesheet" href="lyon.jpg">
  <link rel="shortcut icon" href="../../img/favicon/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../../css/ranking.css">
  <title>Sub11</title>
  <style>
    header>nav>ul>li>a {
      font-size: 86%;
    }

    .dp-menu ul li a {
      font-weight: bold;
    }

    body {
      font-family: 'Arial';
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      padding: 10px;
      text-align: center;
      border: solid 1px black;
    }

    .oculto {
      display: none;
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
      <a href="index.php"><img src="../../img/favicon/favicon.png" alt=""></a>
    </div>
    <header class="navbar mb-2">
      <nav class="dp-menu">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="../index-admin.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="marcado" href="#">JOGADORES</a>
            <ul class="sub-menu" id="sobrepor">
              <li>
                <a href="sub09-admin.php">sub09</a>
                <a href="sub11-admin.php" id="marcado">sub11</a>
                <a href="sub13-admin.php">sub13</a>
                <a href="sub15-admin.php">sub15</a>
                <a href="sub17-admin.php">sub17</a>
              </li>
              <li>
                <a href="../ranking-admin.php">RANKING</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">PARTIDAS</a>
            <ul class="sub-menu">
              <li>
                <a href="../calendario-admin.php">CALENDÁRIO DE JOGOS</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../noticiais-admin.php">NOTÍCIAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MAIS</a>
            <ul class="sub-menu" id="sobrepor">
              <li>
                <a href="login.php">Área privada</a>
                <a href="../cadastro-de-jogador.php">Cadastrar Jogador</a>
                <a href="../cadastro-de-partidas.php">Cadastrar partida</a>
                <a href="../../html/index.php">Sair</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>
  </div>


  <main>
    <h1 class="categoria">Categoria Sub-11</h1>
    <br><br><br>
    <!-- ATUALIZAR -->

    <form class="oculto" id="form_atualiza" method="post">
      <input type="text" id="id_editado" name="id_editado" placeholder="ID" required> <br><br>

      <input type="text" id="nome_editado" name="nome_editado" placeholder="Editar nome" required> <br><br>

      <input type="number" id="idade_editado" name="idade_editado" placeholder="Editar idade" required><br><br>

      <input type="text" id="posicao_editado" name="posicao_editado" placeholder="Editar posicao" required><br><br>

      <input type="number" id="gols_editado" name="gols_editado" placeholder="Editar gols" required><br><br>

      <button type="submit" name="atualizar">Atualizar</button>

      <button type="button" id="cancelar" name="cancelar">Cancelar</button>
      <hr>
    </form>

    <!-- DELETAR -->

    <form class="oculto" id="form_deleta" method="post">
      <input type="hidden " id="id_deleta" name="id_deleta" placeholder="ID" required> <br><br>

      <input type="hidden" id="nome_deleta" name="nome_deleta" placeholder="Editar nome" required> <br><br>

      <input type="hidden" id="idade_deleta" name="idade_deleta" placeholder="Editar idade" required><br><br>

      <input type="hidden" id="posicao_deleta" name="posicao_deleta" placeholder="Editar posicao" required><br><br>

      <input type="hidden" id="gols_deleta" name="gols_deleta" placeholder="Editar gols" required>
      <b>Tem certeza que quer deletar Jogador <span id="cliente"></span></b>

      <button type="submit" name="deletar">Confirmar</button>

      <button type="button" id="cancelar_delete" name="cancelar_delete">Cancelar</button>
      <hr>
    </form>
    <br><br>
    <?php
    //PROCESSO DE ATUALIZAÇÃO
    if (isset($_POST['atualizar']) && isset($_POST['id_editado']) && isset($_POST['nome_editado']) && isset($_POST['idade_editado']) && isset($_POST['posicao_editado']) && isset($_POST['gols_editado'])) {

      $id = $_POST['id_editado'];
      $nome = $_POST['nome_editado'];
      $idade = $_POST['idade_editado'];
      $posicao = $_POST['posicao_editado'];
      $gols = $_POST['gols_editado'];


      $sql = $pdo->prepare("UPDATE tbljogadores SET nome = :nome ,idade = :idade, posicao = :posicao, gols = :gols WHERE id= :id");
      $sql->bindValue(':nome', $nome);
      $sql->bindValue(':idade', $idade);
      $sql->bindValue(':posicao', $posicao);
      $sql->bindValue(':gols', $gols);
      $sql->bindValue(':id', $id);
      $sql->execute();
      /*
        $sql = $pdo->prepare("UPDATE tbljogadores SET nome=?,idade=?, posicao=?, gols=? WHERE id=?");
        $sql->execute(array($nome, $idade, $posicao, $gols, $id));

        echo "Atualizado " . $sql->rowCount() . "registros!";*/
    }
    ?>

    <?php
    //DELETAR DADOS
    if (isset($_POST['deletar']) && isset($_POST['id_deleta']) && isset($_POST['nome_deleta']) && isset($_POST['idade_deleta']) && isset($_POST['posicao_deleta']) && isset($_POST['gols_deleta'])) {

      $id = $_POST['id_deleta'];
      $nome = $_POST['nome_deleta'];
      $idade = $_POST['idade_deleta'];
      $posicao = $_POST['posicao_deleta'];
      $gols = $_POST['gols_deleta'];

      //COMANDO PARA DELETAR
      $sql = $pdo->prepare("DELETE FROM tbljogadores WHERE id=? AND nome=? AND idade=? AND posicao=? AND gols=?");
      $sql->execute(array($id, $nome, $idade, $posicao, $gols));

      echo "Deletado com sucesso!";
    }
    ?>
    <?php
    if (count($dados) > 0) {
      echo "<table class=table table-striped>
        <thead class=table-dark>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Posição</th>
            <th>Gols</th>
            <th>Atuaizar | Deletar</th>
        </tr>
        </thead>";

      foreach ($dados as $chaves => $valor) {
        if ($valor['idade'] > 9 && $valor['idade'] <= 11) {
          echo "<tr>
                        <td>" . $valor['nome'] . "</td>
                        <td>" . $valor['idade'] . "</td>
                        <td>" . $valor['posicao'] . "</td>
                        <td>" . $valor['gols'] . "</td>
                        <td><a href='#' class='btn-atualizar' data-id='" . $valor['id'] . "' data-nome='" . $valor['nome'] . "' data-idade='" . $valor['idade'] . "'data-posicao='" . $valor['posicao'] . "'data-gols='" . $valor['gols'] . "'>Atualizar</a> | <a href='#' class='btn-deletar' data-id='" . $valor['id'] . "' data-nome='" . $valor['nome'] . "' data-idade='" . $valor['idade'] . "'data-posicao='" . $valor['posicao'] . "'data-gols='" . $valor['gols'] . "'>Deletar</a></td>
                    </tr>";
        }
      }


      echo "</table>";
    } else {
      echo "<p>Nenhum Jogador cadastrado</p>";
    }

    ?>
  </main>
  <footer>
    <p class="mb-0">Desenvolvimento estacio</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    //      ATUALIZAR

    $(".btn-atualizar").click(function() {
      var id = $(this).attr('data-id');
      var nome = $(this).attr('data-nome');
      var idade = $(this).attr('data-idade');
      var posicao = $(this).attr('data-posicao');
      var gols = $(this).attr('data-gols');

      $('#form_salva').addClass('oculto');
      $('#form_deleta').addClass('oculto');
      $('#form_atualiza').removeClass('oculto');


      $("#id_editado").val(id);
      $("#nome_editado").val(nome);
      $("#idade_editado").val(idade);
      $("#posicao_editado").val(posicao);
      $("#gols_editado").val(gols);

    });

    //      DELETAR

    $(".btn-deletar").click(function() {
      var id = $(this).attr('data-id');
      var nome = $(this).attr('data-nome');
      var idade = $(this).attr('data-idade');
      var posicao = $(this).attr('data-posicao');
      var gols = $(this).attr('data-gols');

      $("#id_deleta").val(id);
      $("#nome_deleta").val(nome);
      $("#idade_deleta").val(idade);
      $("#posicao_deleta").val(posicao);
      $("#gols_deleta").val(gols);

      $('#form_atualiza').addClass('oculto');
      $('#form_deleta').removeClass('oculto');


    });

    $('#cancelar').click(function() {
      $('#form_atualiza').addClass('oculto');
      $('#form_deleta').addClass('oculto');
    });

    $('#cancelar_delete').click(function() {
      $('#form_atualiza').addClass('oculto');
      $('#form_deleta').addClass('oculto');
    });
  </script>
</body>

</html>