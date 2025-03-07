<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == 'login' && $senha == 'senha'){
        echo 'Logado com sucesso';

    }else{
        echo 'Login negado';
    }

?>