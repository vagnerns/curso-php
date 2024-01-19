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
        <h1>Conversor de moedas</h1>
    <?php 
        // Cotação copiada do google
        $cotacao = 4.93;

        // Quanto você tem?
        $real = $_REQUEST["din"] ?? 0;

        // Equivalência em dolar
        $dolar = $real / $cotacao;

        // Mostrar o resultado
        // echo "Seu R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$" . number_format($dolar, 2, ",", ".");

        // Formatação de moedas com internacionalização!
        // Biblioteca intl (Internalization PHP)

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo "<p>Seus" . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
    ?>
    <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
