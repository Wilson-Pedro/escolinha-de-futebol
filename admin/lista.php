<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php

$pasta = "../img/imgArquivos/";
$diretorio = dir($pasta);


while($arquivo = $diretorio->read()) {
    if($arquivo != '.' && $arquivo != '..'){
        echo "<img src='".$pasta.$arquivo."' class='img-fluid'><br>";
    }
}
?>