<?php
session_start();
include('../php/verificaUser.php');
include('../php/skil/validaNivelPerms.php');
include('../php/skil/avisoAlerta.php');

$nome = $_SESSION['VOLTACADASTRO']['nome'] ?? '';
$usuario = $_SESSION['VOLTACADASTRO']['usuario'] ?? '';
$nivelAcesso = $_SESSION['VOLTACADASTRO']['nivelAcesso'] ?? '';
unset($_SESSION['VOLTACADASTRO']);

?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Cadastro de Usuario</h3>
                    
                    <?php
                    exibirAviso('selec_NivelAcesso', 'Selecione o nivel do <b>Usuário</b>');
                    exibirAviso('registro_finalizado', 'Cadastro efetuado!<br>Faça login informando o seu usuário e senha <a href=\"../index.php\">aqui</a>', 'is-success');
                    exibirAviso('usuario_utilizado', 'O usuário escolhido já existe. Informe outro e tente novamente.');
                    exibirAviso('senha_errada', 'As senhas não conferem, digite novamente!', 'is-danger');
                    ?>

                    <div class="box">
                        <form action="../php/cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus value="<?= htmlspecialchars($nome) ?>" required>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário" value="<?= htmlspecialchars($usuario) ?>" required>
                                </div>
                            </div>

                        <div class="field">
                            <div class="control">
                                <div class="select is-large is-fullwidth">
                                    <select name="nivelAcesso">
                                        <option value="" disabled selected>Nivel de Usuário</option>
                                        <option value="Administrador" <?= ($nivelAcesso == 'Administrador') ? 'selected' : '' ?>>Administrador</option>
                                        <option value="Editor" <?= ($nivelAcesso == 'Editor') ? 'selected' : '' ?>>Editor</option>
                                        <option value="Usuário" <?= ($nivelAcesso == 'Usuário') ? 'selected' : '' ?>>Usuário</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="ConfirmaSenha" class="input is-large" type="password" placeholder="Confirme sua Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>