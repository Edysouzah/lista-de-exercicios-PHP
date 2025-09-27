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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

    <!-- implementação da solução -->
    <?php
        $num = 5; // número que você quer calcular o fatorial
        $fatorial = 1;

        for ($i = $num; $i >= 1; $i--) {
            $fatorial *= $i;
        }

        echo "<p>O fatorial de $num é: $fatorial</p>";
    ?>
     
     
    </main>
</body>


</html>
