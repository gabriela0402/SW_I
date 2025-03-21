<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'gabi@email.com' && $senha == '1234'){
        $nome = "Gabi";
        header('Location: privada.php?nome='.$nome);
    }else{
        header('Location: erro.php');
    }
?>