<?php
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == 'etec' && $senha == 'informatica'){
        echo 'Logado com sucesso';

    }else{
        echo 'Login negado';
    }

?>