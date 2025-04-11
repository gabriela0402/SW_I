<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando</title>
    <style>
        table,tr,td{
            border: 1px red solid;
            color: white;
            width: 600px;
            height: 50px;
            text-align: center;
        }
        .impar{
            background-color: blue;
        }
        .par{
            background-color: red;
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
                    if ($i_c % 2 == 0){
                        echo'<td class="par">xxxx</td>';
                    }else{
                        echo'<td class="impar">xxxx</td>';
                    }
                }
                echo"</tr>";
            }
            echo"</table>";
    ?>
</body>
</html>