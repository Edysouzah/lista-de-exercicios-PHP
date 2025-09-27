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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

     <?php
        $idade = 20; // idade em anos
        $diasDeVida = $idade * 365;

        echo "<p>Uma pessoa com $idade anos viveu aproximadamente $diasDeVida dias.</p>";
    ?>
     
    </main>
</body>


</html>
