<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - PHP</title>
</head>
<body>
    <p>Oi sou a Gabriela</p>
    <?php
        echo "<p>Oi sou a Gabriela</p>";
        $nome = "Gabriela";
        echo "<p>Oi sou a $nome<p>";
        echo "<p>Oi sou a ". $nome."</p>";
    ?>
</body>
</html>