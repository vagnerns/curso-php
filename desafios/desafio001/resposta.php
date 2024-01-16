<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu <em>antecessor</em> é <strong>$a</strong>";
                echo "<br>O seu <em>sucessor</em> é <strong>$s</strong>";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>
    </main>
</body>
</html>