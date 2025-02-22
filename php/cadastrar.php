<?php
session_start();
include('connect.php');

$nome = mysqli_real_escape_string($connect, $_POST['nome']);
$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);
$ConfirmaSenha = mysqli_real_escape_string($connect, $_POST['ConfirmaSenha']);


?>