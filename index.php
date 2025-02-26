<?php
session_start();
include('php/skil/avisoAlerta.php');

// Verificação para validar se o usuário já está logado no sistema. Caso esteja, será direcionado ao painel.
if (isset($_SESSION['StatusAutenticacao']) && $_SESSION['StatusAutenticacao'] == 1) {
    header('Location: views/painel.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>


    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">

                    <img src="midia/logoImg.png" width="250" height="250" alt="">
                    
                    <h3 class="title has-text-grey"><a target="_blank">login PHP</a></h3>
                    <?php
                    exibirAviso('nao_valido', 'ERRO: Usuário ou senha inválidos.</b>', 'is-danger is-light');
                    ?>

                    <div class="box">
                        <form action="php/login.php" method="POST">
                            <div class="field">
                                <div clasws="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>