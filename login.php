<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php

        include_once 'menu_connected.php'

    ?>

    <main class="container">
        <div class="card-login">

            <form method="POST" action="valida_login.php" class="form-cad">
                <h2>Efetuar Login</h2>

                <div class="input">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input">
                    <input type="password" name="password" required>
                    <label>Senha</label>
                </div>


                <?php if(isset($_GET['login']) && $_GET['login'] == 'error') {

                ?>

                    <div class="error">
                        Usúario ou senha inválido(s)
                    </div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'error2') {

                ?>

                    <div class="error">
                        Login necessário para acessar está página
                    </div>

                <?php } ?>

                <div class="button">
                    <button type="submit">Send</button>
                </div>

            </form>
        </div>

    </main>

</body>

</html>