<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <?php
            $minimo = 1_380.60;
            $salario =$_GET['sal'] ?? 0;
        ?>
    <main>
                   <h1>Informe seu salário</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="sal">Salário (R$)</label>
                <input type="number" name="sal" id="sal" value=""
                step="0.01">
                <p>Considerando o salário mínimo de <strong>R$<?=NUMBER_FORMAT($minimo, 2,",",".")?></p>
                <input type ="submit" value="Calcular">
        
            </form>
    </main>

        <section>
<h1>Resultado Final</h1>
    <?php
       $tot =intdiv($salario, $minimo);
        $dif = $salario % $minimo;

        echo "<p>Ganha $tot salários mínimos + R</p>";

        ?>
                </section>
</body>
</html>