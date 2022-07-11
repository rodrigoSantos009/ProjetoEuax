<?php

require_once 'validador_acesso.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php

        include_once 'menu_connected.php';

    ?>
    <main class="container-home">
        <div class="titulo-home">
            <h2>Home</h2>
        </div>
        <div class="itens-home">
            <div class="abrir-chamado">
                <a href="abrir_chamado.php"><img width="50px" src="img/report.png" alt=""></a>
                <p>Abrir chamado</p>
            </div>

            <div class="consultar-chamado">
                <a href="#"><img width="50px" src="img/task.png" alt=""></a>
                <p>Consultar chamados</p>
            </div>
        </div>
    </main>
</body>