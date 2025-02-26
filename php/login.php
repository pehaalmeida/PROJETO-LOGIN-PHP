<?php
session_start();
include('sql/connect.php');


if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../index.php');
    $_SESSION['nao_valido'] = true;
    exit();
}

$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$DadosSQL = SelectBD($connect, "SELECT * FROM usuario WHERE usuario = '{$usuario}'");
$resultRow = $DadosSQL['resultRow'];
$row = $DadosSQL['row'];

if(password_verify($senha, $resultRow['senha'])){
    $_SESSION['usuario'] = $resultRow['usuario'];
    $_SESSION['IdUser'] = $resultRow['id_usuario'];
    $_SESSION['nome'] = $resultRow['nome'];
    $_SESSION['acesso'] = $resultRow['nivel_acesso'];
    header('Location: ../views/painel.php');
    exit();

}else {
    $_SESSION['nao_valido'] = true;
    header('Location: ../index.php');
    echo 'erro'. $hash . 'e' . $resultRow['senha'];
    exit();
}

mysqli_free_result($dados);