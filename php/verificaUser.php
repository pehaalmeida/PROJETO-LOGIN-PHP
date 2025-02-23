<?php

include('sql/connect.php');

if(!$_SESSION['usuario']) {
    header('Location: ../index.php');
    exit;
}else {

    $usuario = mysqli_real_escape_string($connect, $_SESSION['usuario']);
    $ID = mysqli_real_escape_string($connect, $_SESSION['IdUser']);

    $query = "SELECT usuario FROM usuario WHERE usuario = '{$usuario}' and id_usuario = {$ID}";

    
    $result = mysqli_query($connect, $query);

    $row = mysqli_num_rows($result);

    if($row == 0) {
        header('Location: ../index.php');
        exit();
        
    }else if ($row == 1) {
        $_SESSION['StatusAutenticacao'] = 1;
    }

}