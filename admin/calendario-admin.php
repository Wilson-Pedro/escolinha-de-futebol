<?php
include('../html/db/conexao.php');

$sql = $pdo->prepare("SELECT * FROM tblpartidas ORDER BY id LIMIT 0, 1000");
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
  <link rel="stylesheet" href="../css/layout.css">
  <link rel="stylesheet" href="lyon.jpg">
  <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="../css/calendario.css">
  <link rel="stylesheet" href="../css/timeAND escudo.css">
  <title>Calendario</title>
</head>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  #calendarioDeJogos {
    text-align: center;
    padding-top: 5vh;
    font-weight: bold;
  }

  table {
    width: 80vw;
    height: 56vh;
    border-collapse: collapse;
    background-color: rgb(243, 231, 231);
    color: black;
    margin: auto;
    margin-top: 6vh;
  }

  td,
  th {
    text-align: center;
    border: 1px solid rgb(0, 0, 0);
  }

  header>nav>ul>li>a {
    font-size: 86%;
  }

  .dp-menu ul li a {
    font-weight: bold;
  }

  .oculto {
    display: none;
  }
</style>

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
            <a class="nav-link" href="#">JOGADORES</a>
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
            <a class="nav-link" href="#" id="marcado">PARTIDAS</a>
            <ul class="sub-menu">
              <li>
                <a href="calendario-admin.php" id="marcado">CALENDÁRIO DE JOGOS</a>
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
                <a href="../html/index.php">Sair</a>
              </li>
          </li>
        </ul>
        </li>
        </ul>
      </nav>
    </header>
  </div>

  <main>
    <h1 id="calendarioDeJogos">CALENDÁRIO DE JOGOS</h1>
    <!-- ATUALIZAR -->

    <form class="oculto" id="form_atualiza" method="post">
      <div id="div-update" class="oculto">
        <h5 class="inputTitulo">ID:</h5>
        <input type="text" id="id_editado" name="id_editado" placeholder="ID" required> <br><br>

        <h5 class="inputTitulo">Local:</h5>
        <input type="text" id="localidade_editado" name="localidade_editado" placeholder="Editar local" required> <br><br>

        <h5 class="inputTitulo">Time A:</h5>
        <input type="text" id="timea_editado" name="timea_editado" placeholder="Editar time A" required><br><br>

        <h5 class="inputTitulo">Time B:</h5>
        <input type="text" id="timeb_editado" name="timeb_editado" placeholder="Editar time B" required><br><br>

        <h5 class="inputTitulo">Data:</h5>
        <input type="date" id="data_partida_editado" name="data_partida_editado" placeholder="Editar Data" required><br><br>

        <h5 class="inputTitulo">Horário:</h5>
        <input type="time" id="horario_editado" name="horario_editado" placeholder="Editar horário" required><br><br>

        <button type="submit" name="atualizar" id="btn-atualizar">Atualizar</button>

        <button type="button" id="cancelar" name="cancelar">Cancelar</button>
        <hr>
      </div>
    </form>

    <!-- DELETAR -->

    <form class="oculto" id="form_deleta" method="post">
      <input type="hidden " id="id_deleta" name="id_deleta" placeholder="ID" required> <br><br>

      <input type="hidden" id="localidade_deleta" name="localidade_deleta" placeholder="Editar local" required> <br><br>

      <input type="hidden" id="timea_deleta" name="timea_deleta" placeholder="Editar Time A" required><br><br>

      <input type="hidden" id="timeb_deleta" name="timeb_deleta" placeholder="Editar Time B" required><br><br>

      <input type="hidden" id="data_partida_deleta" name="data_partida_deleta" placeholder="Editar Data" required> <br><br>

      <b>Tem certeza que quer deletar partida? <span id="cliente"></span></b>

      <button type="submit" name="deletar">Confirmar</button>

      <button type="button" id="cancelar_delete" name="cancelar_delete">Cancelar</button>
      <hr>
    </form>
    <br><br>
    <?php
    //PROCESSO DE ATUALIZAÇÃO
    if (isset($_POST['atualizar']) && isset($_POST['id_editado']) && isset($_POST['localidade_editado']) && isset($_POST['timea_editado']) && isset($_POST['timeb_editado']) && isset($_POST['data_partida_editado']) && isset($_POST['horario_editado'])) {

      $id = $_POST['id_editado'];
      $localidade = $_POST['localidade_editado'];
      $timea = $_POST['timea_editado'];
      $timeb = $_POST['timeb_editado'];
      $data_partida = $_POST['data_partida_editado'];
      $horario = $_POST['horario_editado'];


      $sql = $pdo->prepare("UPDATE tblpartidas SET localidade = :localidade ,timea = :timea, timeb = :timeb, data_partida = :data_partida, horario = :horario WHERE id= :id");
      $sql->bindValue(':localidade', $localidade);
      $sql->bindValue(':timea', $timea);
      $sql->bindValue(':timeb', $timeb);
      $sql->bindValue(':data_partida', $data_partida);
      $sql->bindValue(':horario', $horario);
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
    if (isset($_POST['deletar']) && isset($_POST['id_deleta']) && isset($_POST['localidade_deleta']) && isset($_POST['timea_deleta']) && isset($_POST['timeb_deleta']) && isset($_POST['data_partida_deleta'])) {

      $id = $_POST['id_deleta'];
      $localidade = $_POST['localidade_deleta'];
      $timea = $_POST['timea_deleta'];
      $timeb = $_POST['timeb_deleta'];
      $data_partida = $_POST['data_partida_deleta'];

      //COMANDO PARA DELETAR
      $sql = $pdo->prepare("DELETE FROM tblpartidas WHERE id=? AND localidade=? AND timea=? AND timeb=? AND data_partida=?");
      $sql->execute(array($id, $localidade, $timea, $timeb, $data_partida));
    }
    ?>
    <?php
    if (count($dados) > 0) {
      echo "<table class=table table-striped>
      <thead class=table-dark>
      <tr>
          <th>LOCAL</th>
          <th>JOGOS</th>
          <th>DATA</th>
          <th>HORARIO</th>
          <th>Atuaizar | Deletar</th>
      </tr>
      </thead>";

      foreach ($dados as $chaves => $valor) {
        echo "<tr>
              <td>" . $valor['localidade'] . "</td>
              <td>" . $valor['timea'] . " X " . $valor['timeb'] . "</td>
              <td>" . date("d/m/y", strtotime($valor['data_partida'])) . "</td>
              <td>" . date("H:i", strtotime($valor['horario'])) . "</td>
              <td><a href='#' class='btn-atualizar' data-id='" . $valor['id'] . "' data-localidade='" . $valor['localidade'] . "' data-timea='" . $valor['timea'] . "'data-timeb='" . $valor['timeb'] . "'data-data_partida='" . $valor['data_partida'] . "'data-horario='" . $valor['horario'] . "'>Atualizar</a> | <a href='#' class='btn-deletar' data-id='" . $valor['id'] . "' data-localidade='" . $valor['localidade'] . "' data-timea='" . $valor['timea'] . "'data-timeb='" . $valor['timeb'] . "'data-data_partida='" . $valor['data_partida'] . "'>Deletar</a></td>

        </tr>";
      }

      echo "</table>";
    } else {
      echo "<p>Nenhum jogador cadastrado</p>";
    }

    ?>
  </main>
  <footer>
    <p class="mb-0">Desenvolvimento estacio</p>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  //      ATUALIZAR

  $(".btn-atualizar").click(function() {
    var id = $(this).attr('data-id');
    var localidade = $(this).attr('data-localidade');
    var timea = $(this).attr('data-timea');
    var timeb = $(this).attr('data-timeb');
    var data_partida = $(this).attr('data-data_partida');
    var horario = $(this).attr('data-horario');

    $('#form_salva').addClass('oculto');
    $('#form_deleta').addClass('oculto');
    $('#form_atualiza').removeClass('oculto');
    $('#div-update').removeClass('oculto');


    $("#id_editado").val(id);
    $("#localidade_editado").val(localidade);
    $("#timea_editado").val(timea);
    $("#timeb_editado").val(timeb);
    $("#data_partida_editado").val(data_partida);
    $("horario_editado").val(horario)

  });

  //      DELETAR

  $(".btn-deletar").click(function() {
    var id = $(this).attr('data-id');
    var localidade = $(this).attr('data-localidade');
    var timea = $(this).attr('data-timea');
    var timeb = $(this).attr('data-timeb');
    var data_partida = $(this).attr('data-data_partida');
    var horario = $(this).attr('data-horario');

    $("#id_deleta").val(id);
    $("#localidade_deleta").val(localidade);
    $("#timea_deleta").val(timea);
    $("#timeb_deleta").val(timeb);
    $("#data_partida_deleta").val(data_partida);

    $('#form_atualiza').addClass('oculto');
    $('#form_deleta').removeClass('oculto');


  });

  //      OCULTAR

  $('#cancelar').click(function() {
    $('#form_atualiza').addClass('oculto');
    $('#form_deleta').addClass('oculto');
    $('#div-update').addClass('oculto');
  });

  $('#cancelar_delete').click(function() {
    $('#form_atualiza').addClass('oculto');
    $('#form_deleta').addClass('oculto');
  });
</script>

</html>
<!--table>
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
    </table>-->