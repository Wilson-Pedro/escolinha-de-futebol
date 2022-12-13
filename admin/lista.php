<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php
/*

$pasta = "../img/imgArquivos/";
$diretorio = dir($pasta);


while($arquivo = $diretorio->read()) {
    if($arquivo != '.' && $arquivo != '..'){
        echo "<img src='".$pasta.$arquivo."' class='img-fluid'><br>";
    }
}*/
require('../html/db/conexao.php');

$pasta = "../img/imgArquivos/";
$sql = $pdo->prepare("SELECT * FROM tblfotos");
$sql->execute();
$dados = $sql->fetchAll();

if (count($dados) > 0) {
    foreach ($dados as $chaves => $valor) { 
        echo "<img src='" . $pasta . $valor['arquivo'] . "' class='img-fluid img-thumbnail mt-3'><br>";
    }
} else {
    echo "<br><br><br><p class='mt-4' style='text-align:center'>Nenhuma foto foi postada.</p>";
}

?>