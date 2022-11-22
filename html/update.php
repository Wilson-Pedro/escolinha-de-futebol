<?php
require('db/conexao.php');

$sql = $pdo->prepare("SELECT * FROM cadastroescolinha");
$sql->execute();
$dados = $sql->fetchALL();
/*
$nome="Edu";
$email="Dudu@teste.com";
$confirmarEmail = "Dudu@teste.com";
$senha="du";
$confirmarSenha = "du";
$id = 1;
$sql = $pdo->prepare("UPDATE usuarios SET nome=?, email=?,confirmarEmail=?, senha=?, confirmarSenha=?, WHERE id=?");
$sql->execute(array($nome, $email,$confirmarEmail, $senha, $confirmarSenha,$id));*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE E SELECT</title>
    <style>
        body {
            font-family: 'Arial';
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <h1>SELECT AND UPDATE </h1>
    <?php
    if (count($dados) > 0){
        echo "<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>

        </tr>";

        foreach($dados as $chaves => $valor){
            echo "<tr>
                    <td>".$valor['id']."</td>
                    <td>".$valor['nome']."</td>
                    <td>".$valor['email']."</td>
                    <td>".$valor['confirmarEmail']."</td>
                    <td>".$valor['senha']."</td>
                    <td>".$valor['confirmarSenha']."</td>
                    
                </tr>";
        }
        

        echo "</table>";
    } else {
        echo "<p>Nenhum usuário cadastrado</p>";
    }

    ?>
</body>
</html>

