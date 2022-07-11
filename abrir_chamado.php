<?php

    require_once 'validador_acesso.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abrir chamado</title>
    <link rel="stylesheet" href="css/abrir_chamado.css">
</head>

<body>

    <header>
        <img width="150px" src="img/euax-anywhere-logo.png" alt="">
        <div class="nav-links">
            <li><a href="log-out.php">Log-out</a></li>
        </div>
    </header>

    <div class="card-abrir-chamado">
        <div class="card-header">
            <h2>Abertura de chamado</h2>
        </div>
        <form>
            <div class="form-group">
                <label>Título</label>
                <input name="titulo" type="text">
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select name="categoria">
                    <option>Impressora</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Rede</option>
                </select>
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea name="descricao"></textarea>
            </div>

            <div class="links-form">
                    <div class="links">
                        <ul>
                            <li><a href="home.php">Voltar</a></li>
                            <li><a href="#">Abrir</a></li>
                        </ul>
                    </div>
            </div>
        </form>


    </div>
    </div>

    </main>

</body>

</html>