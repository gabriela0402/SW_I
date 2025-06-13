<?php
    include_once 'Livro.class.php';

    $livro = new Livro('Iracema', 'José de Alencar', true);

    //var_dump($livro);(mostrar codigo)
    //print_r($livro);(mostrar codigo)
    //<pre> para exibir codigo

    echo "STATUS DO LIVRO: ";
    echo $livro->exibirStatus();
    echo "<hr>";

    echo"Foi feito um empréstimo";
    $livro->Emprestar();
    echo "<hr>";

    echo "STATUS DO LIVRO: ";
    echo $livro->exibirStatus();
    echo "<hr>";

    echo "Foi feito um empréstimo.";
    $livro->Emprestar();
    echo "<hr>";

    echo "Efetuando uma devolução";
    $livro->Devolver();
    echo"<hr>";

    echo "STATUS DO LIVRO: ";
    echo $livro->exibirStatus();
    echo "<hr>";

?>