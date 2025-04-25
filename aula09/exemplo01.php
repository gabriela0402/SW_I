<?php
    include_once 'Pessoa.class.php';

    //Instancia de um objeto (uma pessoa)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    //var_dump($pessoa1);

    //Atribuição de valores para o objeto
    $pessoa1->Nome = 'Fulano';
    $pessoa1->Altura = 1.85;
    $pessoa1->Peso = 85;

    $pessoa2->Nome = 'Maria';
    $pessoa2->Altura = 1.55;
    $pessoa2->Peso = 50;

    //Chamando um método
    $pessoa1->MostrarDados();
    $pessoa2->MostrarDados();
?>