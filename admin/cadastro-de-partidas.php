<?php
require('../html/db/conexao.php');

if(isset($_POST['salvar'])){
    $local = $_POST['partidaLocal'];
    $timeA = $_POST['partidaTimeA'];
    $timeB = $_POST['partidaTimeB'];
    $data = $_POST['data'];
    $horario = $_POST['horario'];

    $sql = $pdo->prepare("INSERT INTO tblpartidas VALUES (null,?,?,?,?,?)");
    $sql->execute(array($local, $timeA, $timeB, $data, $horario));

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/favicon/favicon.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/timeAND escudo.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">

    <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">
    <title>Cadastro de partidas</title>
    <style>
        body{
            background-color: white;
        }

        h1.display-5{
            font-weight: normal;
        }

        .dp-menu ul li a {
            font-weight: bold;
        }

        .dp-menu ul li a:hover {
            color: black;
        }

        .form-partida {
            padding: 5%;
        }

        .cad-partidaMsgSucesso {
            font-size: large;
        }

        .MsgSucesso {
            border-radius: 2vh;
            border: transparent;
        }

        .btn-MsgSucesso {
            border-radius: 2vh;
            border: transparent;
            font-size: large;
            background-color: rgb(0, 205, 0);
            padding: 2vh;
            padding-left: 20vh;
            padding-right: 20vh;
            cursor: pointer;
        }

        .btn-MsgSucesso:hover {
            background: rgb(0, 225, 0);
            box-shadow: 2vh 2vh 5vh rgba(0, 0, 0, 0.5);
        }

        .cad-partidaMsgErro {
            font-size: large;
        }

        .MsgErro {
            border-radius: 2vh;
            border: transparent;
        }

        .btn-MsgErro {
            border-radius: 2vh;
            border: transparent;
            font-size: large;
            background-color: rgb(200, 0, 0);
            padding: 2vh;
            padding-left: 20vh;
            padding-right: 20vh;
            cursor: pointer;
        }

        .btn-MsgErro:hover {
            background: rgb(225, 0, 0);
            box-shadow: 2vh 2vh 5vh rgba(0, 0, 0, 0.5);
        }

        .bg-nav {
            background: linear-gradient(55deg, rgb(250, 165, 6), black);
        }

        .font {
            font-size: 8vh;
            /* margin-left: 20vh; */
        }

        .font:hover {
            color: white;
            border-radius: 2vh;
            transition: 2s;
            box-shadow: 5vh 5vh 10vh rgb(97, 52, 0);
        }

        .escudoTime:hover {
            border-radius: 2vh;
            transition: 2s;
            box-shadow: 5vh 5vh 10vh rgb(97, 52, 0);
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
                                <a href="calendario.php">CALENDARIO DE JOGOS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticiais.php">NOTÍCIAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticiais.php" id="marcado">MAIS</a>
                        <ul class="sub-menu" id="sobrepor">
                            <li>
                                <a href="login.php">Área privada</a>
                                <a href="cadastro-de-jogador.php">Cadastrar Jogador</a>
                                <a href="cadastro-de-partidas.php" id="marcado">Cadastrar partida</a>
                                <a href="../html/index.php">Sair</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    </div>

    <section class="form-partida">
        <h1 class="display-5">Cadastro de partidas</h1>
        <hr>
        <br>
        <form method="post" action="">

            <!-- LOCAL -->
            <div class="row">
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="partidaLocal" name="partidaLocal" placeholder="Ex.: Estádio Lourenço Farias. Centro.">
                    <label for="floatingInput text-center">Local</label>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaLocal" onclick="limpaCampos0()">Limpar</button>
            </div><br>

            <!-- TIME A -->
            <div class="row">
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="partidaTimeA" name="partidaTimeA" placeholder="Ex.: Lion SLZ Club">
                    <label for="floatingInput text-center">Time A</label>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaTimeA" onclick="limpaCampos1()">Limpar</button>
            </div><br>

            <!-- JANELAS DE CONFIRMAÇÃO -->
            <dialog id="cad-partidaConfirmMsg" class="MsgSucesso">
                <p class="cad-partidaMsgSucesso">Cadastro feito com Sucesso!</p>
                <a href="cadastro-de-partidas.php"><input type="submit" name="salvar" value="Ok" class="btn-MsgSucesso"></a>
            </dialog>
            <dialog id="cad-partidaConfirmMsgErro" class="MsgErro">
                <p class="cad-partidaMsgErro">Erro ao realizar o cadastro!</p>
                <input type="button" id="cancel" value="Ok" class="btn-MsgErro">
            </dialog>

            <!-- TIME B -->
            <div class="row">
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="partidaTimeB" name="partidaTimeB" placeholder="Ex.: Manchester United do Maranhão">
                    <label for="floatingInput text-center">Time B</label>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaTimeB" onclick="limpaCampos2()">Limpar</button>
            </div><br>

            <!-- DATA -->
            <div class="row">
                <div class="col-md-8">
                    <label for="text-center" class="form-label">Data</label>
                    <div class="input-group input-group-lg">
                        <input type="date" class="form-control" name="data" id="partidaHorarioData" placeholder="14/10/2023 às 11:30">
                    </div>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaData" onclick="limpaCampos3()">Limpar</button>
            </div><br>

            <!-- HORÁRIO -->
            <div class="row">
                <div class="col-md-8">
                    <label for="text-center" class="form-label">Horário</label>
                    <div class="input-group input-group-lg">
                        <input type="time" class="form-control" name="horario" id="partidaHorarioData" placeholder="14/10/2023 às 11:30">
                    </div>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaData" onclick="limpaCampos3()">Limpar</button>
            </div><br>

            <!-- CADASTRAR PARTIDA -->
            <input type="submit" id="btn-cadastrar-partida" value="Cadastrar partida" class="btn btn-success btn-lg" onclick="validaCampos(event)">
            <input type="reset" value="Limpar todos os campos" name="btn-cadastrar" id="btn-cadastrar-partida" class="btn btn-danger btn-lg">
        </form>
    </section>
    <script src="../js/cadastro-partidas.js"></script>
</body>

</html>
<!--<header>
    <nav class="navbar navbar-expand-lg bg-light bg-nav">
        <div class="container-fluid">
            <div class="escudoTime">
                <a href="index.php"><img src="../img/favicon/favicon.png" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h6 class="display-6">LYON SLZ</h6>
                    </li>
                    <<li class="nav-item">
        <a class="nav-link" href="cadastro-de-jogador.php" ><h6 class="display-6">Cadastro de jogador</h6></a>
        </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="cadastro-de-jogador.php">
                                    <h6>Cadastro de jogador</h6>
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="nav-link disabled" href="cadastro-de-partidas.php">
                                    <h6>Cadastro de partidas</h6>
                                </a></li>
                            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> 
            </div>
        </div>
    </nav>
</header>-->