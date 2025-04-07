<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,th,td{
            border: 1px, solid black;
        }
    </style>
</head>

<body>
    <!-- tr é linha e td/th é coluna -->
     
    <table>
    
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>email</th>
        </tr>
        <!-- Aqui começa o laco -->
        <?php
            for ($i=1; $i < 5 ; $i++) { 
                echo"
                    <tr>
                        <td>Linha $i coluna 1</td>
                        <td>Linha $i coluna 2</td>
                        <td>Linha $i coluna 3</td>
                    </tr>
                ";
            }
     ?>
        <tr>
            <td>Linha 1 coluna 1</td>
            <td>Linha 1 coluna 2</td>
            <td>Linha 1 coluna 3</td>
        </tr>
        <tr>
            <td>Linha 2 coluna 1</td>
            <td>Linha 2 coluna 2</td>
            <td>Linha 2 coluna 3</td>
        </tr>
        <tr>
            <td>Linha 3 coluna 1</td>
            <td>Linha 3 coluna 2</td>
            <td>Linha 3 coluna 3</td>
        </tr>
        <!-- Aqui termina o laço -->
    </table>
</body>
</html>