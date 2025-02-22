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

$query = "SELECT id_usuario, nome, usuario, nivel_acesso FROM usuario WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";

$dados = mysqli_query($connect, $query);

$resultRow = mysqli_fetch_assoc($dados);

$row = mysqli_num_rows($dados);



if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['IdUser'] = $resultRow['id_usuario'];
    $_SESSION['nome'] = $resultRow['nome'];
    $_SESSION['acesso'] = $resultRow['nivel_acesso'];
    header('Location: ../views/painel.php');
    exit();


}else if($row == 0) {
    $_SESSION['nao_valido'] = true;
    header('Location: ../index.php');
    exit();
    
}

mysqli_free_result($dados);