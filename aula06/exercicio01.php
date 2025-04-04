<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,tr,table{
            border: solid black 5px;
        }
    </style>
</head>
<body>
    <table>
            <?php
                
                
                for ($i=1; $i <= 8; $i++) { 
                    if ($i%2 == 0){
                        echo"<style>
                            td{
                                background-color: red;
                    };
                        </style>";
                    }else{
                        echo"<style>
                            background-color: blue;
                        </style>";
                    }
                    echo"
                    <tr>
                        <td>Linha $i</td>
                        <td>Linha $i</td>
                        <td>Linha $i</td>
                        <td>Linha $i</td>
                        
                    </tr>
                    ";
                }
                
                
            ?>

        
    </table>
</body>
</html>