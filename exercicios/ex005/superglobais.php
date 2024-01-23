<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superglogal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superglogal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superglogal ENV</h1>";
                var_dump($_ENV);
                //foreach (getenv() as $c => $v) {
                //    echo "<br> $c -> $v";
                //}
                
                echo "<h1>Superglogal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superglogal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
        <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>