<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 08: Números Ímpares</h2>
    </header>

    <main>

 <?php
        $inicio = 1;
        $fim = 50;

        echo "<p>Números ímpares entre $inicio e $fim:</p>";
        for ($i = $inicio; $i <= $fim; $i++) {
            if ($i % 2 != 0) {
                echo $i . " ";
            }
        }
    ?>
     
     
    </main>
</body>


</html>
