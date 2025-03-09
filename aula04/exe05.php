<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $cor=$_POST['cor'];
    ?>
</head>
<body style="background-color: <?php echo $cor ?>">
    <form action="" method="post">
        <p>Selecione uma cor: <input type="color" name="cor" id="" required></p>
        <input type="submit" value="Enviar">
    </form>

    
</body>
</html>