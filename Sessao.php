<?php 
session_start();

    $Acesso = '';

    // Verifica o nível de acesso do usuário com base na variável de sessão
    switch ($_SESSION['acesso']) {
        case '0':
            $Acesso = 'Usuario';
            break;
        case '1':
            $Acesso = 'Editor';
            break;
        case '2':
            $Acesso = 'Administrador';
            break;
    }
    
    // Verifica o status de autenticação do usuário com base na variável de sessão
    switch ($_SESSION['StatusAutenticacao']) {
        case '0':
            $Autenticado = 'Sem Autenticado';
            break;
        case '1':
            $Autenticado = 'Autenticado';
            break;
    }



    echo '<H1><b>Informação da Sessão </b></H1>';
    echo '<b>id: </b>' . $_SESSION['IdUser'];
    echo '<BR><b>Usuario: </b>' . $_SESSION['usuario'];
    echo '<BR><b>Nome: </b>' .$_SESSION['nome'];
    echo '<BR><b>Acesso: </b>' . $Acesso;
    echo '<BR><b>Autenticado: </b>' . $Autenticado;
