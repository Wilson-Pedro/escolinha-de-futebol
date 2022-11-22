<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="shortcut icon" href="../img/favicon/favicon.png">
    <link rel="stylesheet" href="../css/cadastro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>
<body>
    <div class="cadastro">
        <h1>Cadastro</h1>
        <div id="aviso">
        </div>
        <form method="post" action="">
        <p class="logar">Email</p>
        <div>
            <input type="email" name="emailCad" id="emailCad" class="emailCad">
        </div>
        <p class="logar">Confirme o seu Email</p>
        <dialog id="cadConfirmMsg" class="MsgSucesso">
            <p class="cadMsgSucesso">Cadastro feito com Sucesso!</p>
            <a href="login.html"><input type="button" value="Ok" class="btn-MsgSucesso"></a>
        </dialog>
        <dialog id="cadConfirmMsgErro" class="MsgErro">
            <p class="cadMsgErro">Erro ao realizar o cadastro!</p>
            <input type="button" value="Ok" class="btn-MsgErro">
        </dialog>
        <div>
            <input type="email" name="emailCadConfirm" id="emailCadConfirm" class="emailCadConfirm">
        </div><br>
        <p class="logar">Senha</p>
        <div>
            <span class="senha"><input type="password" name="senhaCad" id="senhaCad" class="senhaCad"></span><span class="olho" id="olho"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                </svg></span>
        </div>
        <p class="logar">Confirme a sua senha</p>
        <div>
            <span class="senha"><input type="password" name="senhaCadConfirm" id="senhaCadConfirm" class="senhaCadConfirm"></span><span class="olho" id="olhoConfirm"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path>
                </svg></span>
        </div><br>
        <div>
            <input type="button" value="Cadastrar" class="btn-entrar" onclick="validaCampos()" id="cadCadastro">
            <input type="button" value="Limpar" class="btn-entrar" onclick="limpaCampos()">
        </div><br>
    </form>
        <div>
            <a href="login.html"><input type="button" value="Entrar em uma conta já cadastrada" class="btn-cadastrar"></a>
        </div>
    </div>
    <script src="../js/cadastro.js"></script>
</body>
</html>