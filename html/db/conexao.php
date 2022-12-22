<?php
// CONFIGURAÇÕES GERAIS
$servidor="localhost";
$usuario="root";
$senha="ti1234";
$banco="escolinha_de_futebol";


// CONEXÃO
try{
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
    echo "Falha ao se conectar comm o banco ".$erro->getMessage();
}

date_default_timezone_set ("America/Sao_Paulo");

?>
<!-- $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); -->