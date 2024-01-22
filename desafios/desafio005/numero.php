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
    <h1>Analisador de Número Real</h1>
    <p></p>
       <?php
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".")." </strong>informado pelo usuário:</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li> A parte inteira do número é <strong>". number_format($int, 0, ",", ".")." </strong>informado pelo usuário:</strong></li>";
            echo "<li> A parte fracionaria do número é <strong>". number_format($fra, 3, ",", ".")." </strong>informado pelo usuário:</strong></li></ul>";
       ?>
       <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
   </main>
</body>
</html>