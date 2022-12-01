<?php
require('../html/db/conexao.php');

$nome = $_POST['nameLog'];
$senha = $_POST['senhaLog'];

$sql = $pdo->prepare("SELECT * FROM tbllogin ORDER BY id LIMIT 0,100");
$sql->execute();
$dados = $sql->fetchAll();

if ($nome == null || $senha == null) {
    echo "<script type='text/javascript'> window.location = '../html/login.php' </script>";
}

if (isset($_POST['nameLog']) && $_POST['senhaLog']) {
    $nome = $_POST['nameLog'];
    $senha = $_POST['senhaLog'];
    $num = 0;
    $adm = 0;
    foreach ($dados as $chaves => $valor) {
        if ($nome == $valor['nome'] && $senha == $valor['senha']) {
            $num = 1;
            $adm = $valor['adm'];
        }

        if ($num == 1) {

            session_start();

            if ($adm == 1) {
                $_SESSION['adm'] = $nome;
                echo "<script type='text/javascript'> window.location = 'index-admin.php' </script>";
            } else {
                $_SESSION['nor'] = $nome;
                echo "<script type='text/javascript'> window.location = '../html/login.php' </script>";
            }

        } else {
            echo "<script> alert('Nome ou senha estão errados') </script>";
            echo "<script type='text/javascript'> window.location = '../html/login.php' </script>";
        }
    }
}
/*
if (empty($_POST['nameLog']) || empty($_POST['senhaLog'])) {
    header('location: ../html/login.php');
} else if (isset($_POST['nameLog']) && $_POST['senhaLog']) {
    if (count($dados) > 0) {
        $nome = $_POST['nameLog'];
        $senha = $_POST['senhaLog'];
        $adm = 1;
        foreach ($dados as $chaves => $valor) {
            if (isset($_POST['entrar']) && isset($_POST['nameLog']) && isset($_POST['senhaLog'])) {
                if ($nome == $valor['nome'] && $senha == $valor['senha'] && $adm == $valor['adm']) {
                    session_start();
                    header("location: index-admin.php");
                }
            }
        }
    }
}*/
?>

