<?php
define('HOST', '127.0.0.1');
define('USER', 'ConsultaDB');
define('PASSWORD', 'System@32');
define('DB', 'bd_php');

try {
    $connect = mysqli_connect(HOST, USER, PASSWORD, DB) or dir("Erro");
} catch (Exception $e) {
    
    echo '<b>Erro ao sé conectar com o servidor!</b> <br> <b> Erro Sql: </b> ',  $e->getMessage(), "\n";
    print('Erro');
    exit;
}
