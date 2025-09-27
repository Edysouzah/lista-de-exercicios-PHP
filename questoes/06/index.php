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
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>

     <!-- implementação da solução -->
    
        $n1 = 15;
        $n2 = 8;
        $n3 = 20;

        // Coloca os números em um array
        $numeros = [$n1, $n2, $n3];

        // Ordena em ordem decrescente
        rsort($numeros);

        echo "<p>Ordem decrescente: " . implode(" - ", $numeros) . "</p>";

     
    </main>
</body>


</html>
