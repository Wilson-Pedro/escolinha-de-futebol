<?php
require('db/conexao.php');

if (isset($_POST['salvar'])) {
    $nome = $_POST['jogadorNome'];
    $idade = $_POST['jogadorIdade'];
    $posicao = $_POST['jogadorPosicao'];
    $gols = $_POST['jogadorGols'];

    $sql = $pdo->prepare("INSERT INTO tbljogadores VALUES (null,?,?,?,?)");
    $sql->execute(array($nome, $idade, $posicao, $gols));
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
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/timeAND escudo.css">
    <link rel="stylesheet" href="../fonts/fontawesome/css/all.min.css">

    <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">
    <title>Cadastro de jogador</title>
    <style>
        body {
            background: white;
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

        .form-jogador {
            padding: 5%;

        }

        .cad-jogadorMsgSucesso {
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

        .cad-jogadorMsgErro {
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
                                <a href="cadastro-de-jogador.php" id="marcado">Cadastrar Jogador</a>
                                <a href="cadastro-de-partidas.php">Cadastrar partida</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    </div>

    <section class="form-jogador">
        <h1 class="display-5">Cadastrar de jogador</h1>
        <hr>
        <br>
        <form method="post" action="">
            <div class="row">

                <!-- NOME -->
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="jogadorNome" name="jogadorNome" placeholder="Ex.: José F. Marques">
                    <label for="floatingInput text-center">Nome completo</label>
                </div>
                <button type="button" class="btn btn-warning col " id="limpaNome" onclick="limpaCampos0()">Limpar</button>
            </div><br>

            <!-- CATEGORIA -->
            <div class="row">
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="jogadorIdade" name="jogadorIdade" placeholder="Ex.: Sub-14" maxlength="6">
                    <label for="floatingInput text-center">Idade</label>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaIdade" onclick="limpaCampos1()">Limpar</button>
            </div><br>
            <dialog id="cad-jogadorConfirmMsg" class="MsgSucesso">
                <p class="cad-jogadorMsgSucesso">Cadastro feito com Sucesso!</p>
                <a href="cadastro-de-jogador.php"><input type="submit" name="salvar" value="Ok" class="btn-MsgSucesso"></a>
            </dialog>
            <dialog id="cad-jogadorConfirmMsgErro" class="MsgErro">
                <p class="cad-jogadorMsgErro">Erro ao realizar o cadastro!</p>
                <a href="cadastro.php"><input type="button" value="Ok" class="btn-MsgErro"></a>
            </dialog>
            <div class="row">

                <!-- POSIÇÃO -->
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="jogadorPosicao" name="jogadorPosicao" placeholder="Ex.: Atacante">
                    <label for="floatingInput text-center">Posição</label>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaPosicao" onclick="limpaCampos2()">Limpar</button>
            </div><br>
            <div class="row">

                <!-- GOLS -->
                <div class="form-floating col-md-8">
                    <input type="text" class="form-control" id="jogadorGols" name="jogadorGols" placeholder="Ex.: 27">
                    <label for="floatingInput text-center">Gols</label>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaGols" onclick="limpaCampos3()">Limpar</button>
            </div><br>
            <div class="row">
                <div class="col-md-8">
                    <label for="formFile" class="form-label">Foto</label>
                    <div class="input-group input-group-lg">
                        <input class="form-control lg" type="file" id="jogadorFoto" name="jogadorFoto">
                    </div>
                </div>
                <button type="button" class="btn btn-warning col btn-lg" id="limpaGols" onclick="limpaCampos4()">Limpar</button>
            </div><br>

            <!-- CADASTRAR JOGADOR -->
            <input type="submit" id="btn-cadastrar" value="Cadastrar jogador" class="btn btn-success btn-lg" onclick="validaCampos(event)">
            <input type="reset" value="Limpar campos" name="btn-cadastrar" id="btn-cadastrar" class="btn btn-danger btn-lg">
        </form>
    </section>
    <script src="../js/cadastro-jogador.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>