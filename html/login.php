<?php
require('db/conexao.php');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="../img/favicon/favicon.png" type="image/x-icon">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <div id="aviso">
        </div>
        <form method="post" action="">
            <p class="logar">Nome:</p>
            <div>
                <input type="text" name="nameLog" id="emailLog" class="email">
            </div><br>
            <p class="logar">Senha:</p>
            <div>
                <span class="senha"><input type="password" name="senhaLog" id="senhaLog" class="senha"></span><span class="olho" id="olho"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                    </svg></span>
            </div><br>
            <div class="aviso">
                <span class="dados"><input type="checkbox" name="lembrarLog" id="lembrarLog" class="lembrar"></span><span class="dados">Lembrar-se dos meus dados</span>
            </div><br>
            <div>
                <button type="submit" name="entrar" class="btn-entrar" onclick="validaCampos()">Entrar</button>
                <input type="button" value="Limpar" class="btn-entrar" onclick="limpaCampos()">
            </div><br>
            <a href="../admin/index.php"></a>
        </form>

        <?php

        $sql = $pdo->prepare("SELECT * FROM tbllogin ORDER BY id LIMIT 0, 100");
        $sql->execute();
        $dados = $sql->fetchAll();

        if (count($dados) > 0) {

            foreach ($dados as $chaves => $valor) {
                if (isset($_POST['entrar']) && isset($_POST['nameLog']) && isset($_POST['senhaLog'])) {
                    $nome = $_POST['nameLog'];
                    $senha = $_POST['senhaLog'];
                    if($nome == $valor['nome'] && $senha == $valor['senha']){
                        header("location: ../admin/index.php");
                        
                    }
                }
            }
        }

        ?>

        <div>
            <a href="cadastro.php"><input type="button" value="Cadastrar uma conta" class="btn-cadastrar"></a>
        </div>
    </div>
    <script src="../js/login.js"></script>
</body>

</html>