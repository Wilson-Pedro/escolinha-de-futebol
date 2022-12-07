<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Upload</title>
</head>
<style>
    body{
        margin: 0;
    }

    img {
        margin: auto;
        display: block;
    }

    h1, h2, p {
        margin: 0px;
        text-align: center;
    }

    .cointainer{
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
    }
</style>

<body>
    <div class="container-fluid mt-3">

        <img src="../img/favicon/favicon.png" width="200">

        <h2>UPLOAD DE ARQUIVOS</h2>
        <div class="card">
            <div class="card-bordy">

                <form action="envia.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="arquivo">
                    <input type="submit" value="Enviar">
                </form>

            </div>
        </div>

        <h6 class="mt-3">ARQUIVOS ENVIADOS</h6>
        <?php require 'lista.php'; ?>

    </div>
</body>

</html>