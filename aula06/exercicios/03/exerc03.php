<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio03</title>
    <style>
        table {
            border:black 1px;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>categoria</th>
        </tr>    
        <?php
        $produtos = [
            ["nome" => "Celular", "preco" => "3500","categoria" =>"eletronicios"],
            ["nome" => "Bolo", "preco" => "50", "categoria" => "Doce"],
            ["nome" => "Colar", "preco" => "250", "categoria" => "Acessorio"],
            ["nome" => "Coxinha", "preco" => "7", "categoria" => "Salgado"],
            ["nome" => "Microondas", "preco" => "1000", "categoria" => "Eletrodomesticos"],

        ];

        foreach ($produtos as $produto) {
            $categoria = $produto["categoria"];
            echo "<tr class='$categoria'>";
            echo "<td>{$produto['nome']}</td>";
            echo "<td>R$ {$produto['preco']}</td>";
            echo "<td>{$produto['categoria']}</td>";
            echo "</tr>";
        }
?>
</table>
</body>
</html>