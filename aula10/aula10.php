<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1 ->Nome = "FULANO DE TAL";
    $conta1 ->Cpf = "123.456.789-00";
    //$conta1 ->Saldo = 500; //Não funciona porque o saldo é privado

    $conta1 ->ConsultarSaldo();
    echo"<hr>";
    echo $conta1 ->Depositar(250);
    echo"<hr>";
    $conta1 ->ConsultarSaldo();
    echo"<hr>";
    echo $conta1->Sacar(800);
    echo"<hr>";
    $conta1 ->ConsultarSaldo();

    
?>