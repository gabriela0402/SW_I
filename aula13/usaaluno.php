<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Gabriela", 10, 7);

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();

    $media = $fulano->calculaMedia($nota1, $nota2);
    $situ = $fulano->verificarSituacao($media);
    $nome = $fulano->getNome();

    echo"ALUNO: $nome <br>";
    echo "MEDIA: $media<br>";
    echo "SITUAÇÃO: $situ<hr>";

?>