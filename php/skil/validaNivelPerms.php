<?php   

include('exibir_erro.php');

if ($_SESSION['acesso'] == '0') {

    $_SESSION['AlertErro'] = 'O seu nível de usuário não permite acessar esta página. Por favor, entre em contato com o administrador do sistema.';
    header('Location: painel.php');
    exit(); 
}
