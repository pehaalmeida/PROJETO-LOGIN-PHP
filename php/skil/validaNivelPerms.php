<?php   

include('exibir_erro.php');

if ($_SESSION['acesso'] == '0') {
    // Exibir o alerta JavaScript

    $_SESSION['AlertErro'] = 'O seu nível de usuário não permite acessar esta página. Por favor, entre em contato com o administrador do sistema.';

    header('Location: painel.php');

    exit(); // Encerra o script para garantir que nada mais seja executado
}





    //echo "<script type='text/javascript'>
    //alert('Você não tem acesso. Entre em contato com o administrador do sistema.');
    //window.location.href = '../views/painel.php'; // Redireciona após o alerta
    //</script>";