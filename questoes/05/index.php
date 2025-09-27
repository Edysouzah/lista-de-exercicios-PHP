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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>

    <main>
    <!-- implementação da solução -->

        $n1 = 10;
        $n2 = 25;
        $n3 = 15;

        $maior = $n1;

        if ($n2 > $maior) {
            $maior = $n2;
        }

        if ($n3 > $maior) {
            $maior = $n3;
        }

        echo "<p>O maior número é: $maior</p>";
    
        
     
    </main>
</body>


</html>
