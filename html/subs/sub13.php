<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/sub13.css">
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .infoJogador,
        span {
            font-size: 14pt;
        }

        span {
            font-weight: normal;
        }

        .column {
            display: inline-block;
            margin-left: 3vw;
        }
    </style>
    <title>SUB-13</title>
</head>

<body>
    <header class="navbar navbar-light bg-gradient">
        <nav class="dp-menu">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" id="marcado" href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">JOGADORES</a>
                    <ul class="sub-menu" id="sobrepor">
                        <li>
                            <a href="subs/sub13.html">sub13</a>
                        </li>
                        <li>
                            <a href="ranking.html">RANKING</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PARTIDAS</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">CALENDARIO DE JOGOS</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="noticiais.html">NOTÍCIAS</a>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        <h1 class="joga">JOGADORES</h1>
        <div>
            <!--Lista de Jogadores-->
            <p><label for="modal-1">João Pé de Feijão</label></p>
            <p><label for="modal-2">Chapeuzinha vermelho</label></p>
        </div>
        <!--Informação do perfil-->
        <input class="modal-state" id="modal-1" type="checkbox" />
        <div class="modal">
            <label class="modal__bg" for="modal-1"></label>
            <div class="modal__inner">
                <label class="modal__close" for="modal-1"></label>
                <h1>João Pé de Feijão</h1>
                <p><img src="../../img/imgSubs/1perfil.jpg" />
                <div class="column">
                    <h5 class="infoJogador">
                        Posição: <span>Atacante</span>
                    </h5>
                    <h5 class="infoJogador">
                        Jogos: <span>17</span>
                    </h5>
                    <h5 class="infoJogador">
                        Gols: <span>14</span>
                    </h5>
                </div>
                <div class="column">
                    <h5 class="infoJogador">
                        Posição: <span>Atacante</span>
                    </h5>
                    <h5 class="infoJogador">
                        Jogos: <span>17</span>
                    </h5>
                    <h5 class="infoJogador">
                        Gols: <span>14</span>
                    </h5>
                </div>
            </div>
        </div>
        <!--Informação do perfil-->
        <input class="modal-state" id="modal-2" type="checkbox" />
        <div class="modal">
            <label class="modal__bg" for="modal-2"></label>
            <div class="modal__inner">
                <label class="modal__close" for="modal-2"></label>
                <h2>Chapeuzinha vermelho</h2>
                <p><img src="../../img/imgSubs/2perfil.jpg" />
                <p> Posição: Volante</p>
                <p> Jogos: 11</p>
                <p> Gols: 3</p>
                </p>
            </div>
        </div>
    </section>
</body>
</html>