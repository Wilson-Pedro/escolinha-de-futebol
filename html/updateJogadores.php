<?php
require('db/conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT</title>
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

        .oculto {
            display: none;
        }
    </style>
</head>
<body>
    <h1>JOGADORES: </h1>

                    <!-- ATUALIZAR -->

    <form class="oculto" id="form_atualiza" method="post">
    <input type="text" id="id_editado" name="id_editado" placeholder="ID" required> <br><br>
        <input type="text" id="nome_editado" name="nome_editado" placeholder="Editar nome" required> <br><br>

        <input type="number" id="idade_editado" name="idade_editado" placeholder="Editar idade" required><br><br>

        <input type="text" id="posicao_editado" name="posicao_editado" placeholder="Editar posicao" required><br><br>

        <input type="number" id="gols_editado" name="gols_editado" placeholder="Editar gols" required><br><br>

        <button type="submit" name="atualizar">Atualizar</button>
        
        <button type="button" id="cancelar" name="cancelar">Cancelar</button>
        <hr>
    </form>

                    <!-- DELETAR -->

    <form class="oculto" id="form_deleta" method="post">
    <input type="hidden " id="id_deleta" name="id_deleta" placeholder="ID" required> <br><br>

        <input type="hidden" id="nome_deleta" name="nome_deleta" placeholder="Editar nome" required> <br><br>

        <input type="hidden" id="idade_deleta" name="idade_deleta" placeholder="Editar idade" required><br><br>

        <input type="hidden" id="posicao_deleta" name="posicao_deleta" placeholder="Editar posicao" required><br><br>

        <input type="hidden" id="gols_deleta" name="gols_deleta" placeholder="Editar gols" required>
        <b>Tem certeza que quer deletar Jogador <span id="cliente"></span></b>
    
        <button type="submit" name="deletar">Confirmar</button>
        
        <button type="button" id="cancelar_delete" name="cancelar_delete">Cancelar</button>
        <hr>
    </form>
    <?php
    //PROCESSO DE ATUALIZAÇÃO
     if(isset($_POST['atualizar']) && isset($_POST['id_editado']) && isset($_POST['nome_editado']) && isset($_POST['idade_editado']) && isset($_POST['posicao_deleta']) && isset($_POST['gols_editado'])){

        $id=$_POST['id_editado'];
        $nome=$_POST['nome_editado'];
        $idade=$_POST['idade_editado'];
        $posicao=$_POST['posicao_editado'];
        $gols=$_POST['gols_editado'];

        $sql = $pdo->prepare("UPDATE tbljogadores SET nome=?,idade=?, posicao=?, gols=? WHERE id=?");
        $sql->execute(array($nome,$idade,$posicao,$gols,$id));

        echo "Atualizado ".$sql->rowCount()."registros!";
     }
    ?>

<?php
        // SELECIONAR DADOS DA TABELA
        $sql = $pdo->prepare("SELECT * FROM tbljogadores ORDER BY id LIMIT 1,5");
        $sql->execute();
        $dados = $sql->fetchAll();

        // EXEMPLO COM FILTRAGEM
        /*
        $sql = $pdo->prepare("SELECT * FROM cliente WHERE email = ?");
        $email = 'teste@teste.com';
        $sql->execute(array($email));
        $dados = $sql->fetchAll();*/

        // echo "<pre>";
        // print_r($dados);
        // echo "</pre>"
    ?>

    <?php
    if (count($dados) > 0){
        echo "<table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Posição</th>
            <th>Gols</th>

        </tr>";

        foreach($dados as $chaves => $valor){
            echo "<tr>
                    <td>".$valor['id']."</td>
                    <td>".$valor['nome']."</td>
                    <td>".$valor['idade']."</td>
                    <td>".$valor['posicao']."</td>
                    <td>".$valor['gols']."</td>
                    <td><a href='#' class='btn-atualizar' data-id='".$valor['id']."' data-nome='".$valor['nome']."' data-idade='".$valor['idade']."'data-posicao='".$valor['posicao']."'data-gols='".$valor['gols']."'>Atualizar</a> | <a href='#' class='btn-deletar' data-id='".$valor['id']."' data-nome='".$valor['nome']."' data-idade='".$valor['idade']."'data-posicao='".$valor['posicao']."'data-gols='".$valor['gols']."'>Deletar</a></td>
                    
                </tr>";
        }
        

        echo "</table>";
    } else {
        echo "<p>Nenhum Jogador cadastrado</p>";
    }

    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        //      ATUALIZAR

        $(".btn-atualizar").click(function(){
            var id = $(this).attr('data-id');
            var nome = $(this).attr('data-nome');
            var idade = $(this). attr('data-idade');
            var posicao = $(this). attr('data-posicao');
            var gols = $(this). attr('data-gols');

            $('#form_salva').addClass('oculto');
            $('#form_deleta').addClass('oculto');
            $('#form_atualiza').removeClass('oculto');


            $("#id_editado").val(id);
            $("#nome_editado").val(nome);
            $("#idade_editado").val(idade);
            $("#posicao_editado").val(posicao);
            $("#gols_editado").val(gols);

        });

        //      DELETAR

        $(".btn-deletar").click(function(){
            var id = $(this).attr('data-id');
            var nome = $(this).attr('data-nome');
            var idade = $(this). attr('data-idade');
            var posicao = $(this). attr('data-posicao');
            var gols = $(this). attr('data-gols');

            $("#id_deleta").val(id);
            $("#nome_deleta").val(nome);
            $("#idade_deleta").val(idade);
            $("#posicao_deleta").val(posicao);
            $("#gols_deleta").val(gols);

            $('#form_atualiza').addClass('oculto');
            $('#form_deleta').removeClass('oculto');


        });

        $('#cancelar').click(function(){
            $('#form_atualiza').addClass('oculto');
            $('#form_deleta').addClass('oculto');
        });

        $('#cancelar_delete').click(function(){
            $('#form_atualiza').addClass('oculto');
            $('#form_deleta').addClass('oculto');
        });

    </script>


</body>
</html>