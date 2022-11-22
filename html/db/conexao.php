<?php
// CONFIGURAÇÕES GERAIS
$servidor="localhost";
$usuario="root";
$senha="wamk23";
$banco="cadastroescolinha";


// CONEXÃO
try{
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
    echo "Falha ao se conectar comm o banco ".$erro->getMessage();
}

?>
<!-- $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); -->