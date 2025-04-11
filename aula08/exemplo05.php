<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px red solid;
        }
    </style>
</head>
<body>
<?php
    $linha= 4;
    $coluna = 5;
        echo"<table>";
        for ($i=1; $i <= $linha ; $i++) { 
            echo"<tr>";
            for ($i_c=1; $i_c <= $coluna ; $i_c++) { 
                echo"<td>xxxx</td>";
            }
            echo"</tr>";
        }
        echo"</table>";
?>
</body>
</html>