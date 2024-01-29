<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_REQUEST['seg'] ?? 0;
    ?>
    <main>
        <h1>Cálculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o tempo de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Cálcular">
        </form>
    </main>
    <?php 
        $sobra = $total;
        // Total de Semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        // Total Dias
        $dia = (int)($sobra / 84_400);
        $sobra = $sobra % 84_400;
        // Total Horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        // Total Minutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        // Total Segundos
        $segundo = $sobra;
    ?>
    <section>
        <h2>Totalizando Tudo</h2>
        <p>Analizando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?></strong> segundos equivalem a um total de:</p>
        <ul>
            <li><strong><?=$semana?></strong> Semanas</li>
            <li><strong><?=$dia?></strong> Dias</li>
            <li><strong><?=$hora?></strong> Horas</li>
            <li><strong><?=$minuto?></strong> Minutos</li>
            <li><strong><?=$segundo?></strong> Segundos</li>
        </ul>
    </section>
</body>
</html>