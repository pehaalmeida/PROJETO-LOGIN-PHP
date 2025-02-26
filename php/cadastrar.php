<?php
session_start();
include('sql/connect.php');

// Coletando as Informação do Forms
$nome = mysqli_real_escape_string($connect, $_POST['nome']);
$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);
$ConfirmaSenha = mysqli_real_escape_string($connect, $_POST['ConfirmaSenha']);

$_SESSION['VOLTACADASTRO'] = [
    'nome' => $nome,
    'usuario' => $usuario,
    'nivelAcesso' => $_POST['nivelAcesso']
];

// Valida o nivel de acesso do Usuario
switch (mysqli_real_escape_string($connect, $_POST['nivelAcesso'])) {
    case 'Administrador':
        $nivelAcesso = 2;
        break;
    case 'Editor':
        $nivelAcesso = 1;
        break;
    case 'Usuário':
        $nivelAcesso = 0;
        break;
    default:
        $nivelAcesso = 0;
        $_SESSION['selec_NivelAcesso'] = true;
        header('Location: ../views/cadastroViews.php');
        break;

}

// Validação do Usuario no banco de dados
$DadosSQL = SelectBD($connect, "SELECT usuario FROM usuario WHERE usuario = '{$usuario}'");

if($DadosSQL['row'] == 1) {
    $_SESSION['usuario_utilizado'] = true;
    header('Location: ../views/cadastroViews.php');
    exit();
}

if($senha != $ConfirmaSenha || $senha == "") {
    $_SESSION['senha_errada'] = true;
    header('Location: ../views/cadastroViews.php');
    exit();
}else {
    $hash = password_hash($senha, PASSWORD_BCRYPT);
}

$DadosCadastro = InsertBD($connect, "INSERT INTO `usuario`(`nome`, `usuario`, `senha`, `nivel_acesso`) VALUES ('$nome','$usuario','$hash','$nivelAcesso')");

if($DadosCadastro['success'] == true) {
    $_SESSION['registro_finalizado'] = true;
    unset($_SESSION['VOLTACADASTRO']);
    header('Location: ../views/cadastroViews.php');
    exit();
}