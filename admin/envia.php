<?php
session_start();
session_destroy();

require('../html/db/conexao.php');

$data_atual = date('Y-m-d');
/*
if(isset($_FILES) && count($FILES) > 0){
    var_dump($_FILES);
    die();
}*/

$nomeDoArquivo = $_FILES['arquivo']['name'];
$caminhoAtualArquivo = $_FILES['arquivo']['tmp_name'];
$caminhoSalvar = '../img/imgArquivos/'.$nomeDoArquivo;

if(move_uploaded_file($caminhoAtualArquivo, $caminhoSalvar)){
    $sql = $pdo->prepare("INSERT INTO tblfotos VALUES (null,?,?)");
    $sql->execute(array($nomeDoArquivo, $data_atual));
    header('Location: upload.php');
}else {
    header('Location: upload.php');
}

?>