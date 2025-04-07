<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- ul é fora do laço -->
    <ul> 
    <!-- Aqui começa o laço de repetição -->
    <?php
        for ($i=1; $i <= 5; $i++) { 
            echo "<li>Item $i</li>";
        }
    ?>
        <!-- <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li> -->
    <!-- Aqui termina o laço de repetição -->
    </ul>
</body>
</html>