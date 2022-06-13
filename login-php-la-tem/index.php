<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - Lá Tem</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <!-- JS -->
    <link rel="stylesheet" href="/script.js" />
</head>

<body>


    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                        <div class="notification is-danger">
                            <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

                    <div class='fundo'>
                        <div class='wave -one'></div>
                        <div class='wave -two'></div>
                        <div class='wave -three'></div>
                    </div>

                    <div class="box login-box">
                        <form action="login.php" method="POST">
                            <div class="form-control">
                                <div class="control">
                                    <input name="usuario" name="text" placeholder="Seu Usuario" class="input is-large" autofocus="">
                                </div>
                            </div>
                            <br>

                            <div class="form-control">
                                <div class="control">
                                    <input name="senha" class="input is-large" placeholder="Senha" type="password">
                                </div>
                            </div>
                            <br>

                            <button type="submit" class="button is-block is-large is-fullwidth">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <b>Entrar</b>
                            </button>
                            <br>

                            <div class="field">
                                <h4>Não Tem Cadastro? <a href="cadastro.php" style="color: red;">Cadastre-Se</a></h4>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>