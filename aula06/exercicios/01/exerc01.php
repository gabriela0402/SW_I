<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
<style>
        th, td {
            border: 1px solid black;
        }
        .par {
            background-color:rgb(255, 0, 179);
        }
        .impar {
            background-color:rgb(72, 14, 148);
        }
    </style>
</head>
<body>

<table>
        <tr>
            <th>Coluna 1</th>
            <th>Coluna 2</th>
            <th>Coluna 3</th>
            <th>Coluna 4</th>
        </tr>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            $classe = ($i % 2 == 0) ? 'par' : 'impar';
            echo "<tr class='$classe'>";
            for ($j = 1; $j <= 4; $j++) {
                echo "<td>Linha $i, Coluna $j</td>";
            }
            echo "</tr>";
        }
        ?>
</table>

</body>
</html>