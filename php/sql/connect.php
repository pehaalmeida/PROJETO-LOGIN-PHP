<?php
define('HOST', '127.0.0.1');
define('USER', 'ConsultaDB');
define('PASSWORD', 'System@32');
define('DB', 'bd_php');

try {
    $connect = mysqli_connect(HOST, USER, PASSWORD, DB) or dir("Erro");
} catch (Exception $e) {

    
// REDIRECIONAMENTO PARA A PÁGINA 404 E EXIBIÇÃO DO ERRO DE CONEXÃO NO CONSOLE DO ARQUIVO 404.PHP

    $_SESSION['AlertErro'] = 'Foi verificado um erro na comunicação com o <b>BANCO DE DADOS</b>. Entre em contato com o suporte/administrador para verificar. <br> <br>' . '<b>ERRO AO CONECTAR COM O SERVIDOR:</b>  CODERRO-503';    

     // Salva o erro no sessionStorage via JavaScript
     echo "<script>
     sessionStorage.setItem('db_error', 'Erro ao conectar com o servidor: " . addslashes($e->getMessage()) . "');
     window.location.href = '../views/404.php';
 </script>";

 // Registra o erro no log do servidor
 error_log("Erro ao conectar ao banco: " . $e->getMessage());
    exit;
}
