<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Lá Tem</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" href="css/css.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered" style="margin-bottom: 10vh;">
                <div class="column is-4 is-offset-4">
                    <img src="img/logo.png" height="250" width="250">
                    <br><br><br><br>
                    <div class="login-box">
                        <form action="login.php" method="POST">
                            <div class="field user-box">
                                <div class="control">
                                    <input placeholder="  Email" name="usuario" name="text" class="input is-large" autofocus="">
                                </div>
                            </div>

                            <div class="field user-box">
                                <div class="control">
                                    <input placeholder="  Senha" name="senha" class="input is-large" type="password">
                                </div>
                            </div>
                            
                            <button type="submit" class="button botao is-block is-large is-fullwidth">
                                <b>Login</b>
                            </button>

                            <br>

                            <div class="field">
                               <a href="cadastro.php"><h4>Esqueci a Senha</h4></a>
                            </div>

                            <br><br>

                            <div class="field" style="font-size: 18px; font-weight: 1000;">
                               <a href="cadastro.php"><b>Cadastre-se</b></a>
                            </div>

                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>