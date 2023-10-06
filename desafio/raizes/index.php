<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
//AREA DE DECLARAÇÕES
      
            $numero =$_GET['num'];
        ?>
    <main>
                   <h1>Informe um numero</h1>
            <form action="<?=@$_SERVER ['PHP_SELF']?> " method="get">
                <label for="num">Número</label>
                <input type="number" name="num" id="num" value="<?=$numero?>">
                <input type="submit"  value="Calcular Raizes">
            </form>
    </main>

        <section>
<h1>Resultado Final</h1>
    <?php
      $rq = $numero ** (1/2);
      $rc = $numero ** (1/3);

      echo "<p>Analisando o <strong> número $numero</strong>, temos:";
      echo "<ul><li>A sua raiz quadrada <strong>é ". number_format($rq, 2, ", ",  "."). "</li></strong>";
        echo "<li>A sua raiz cúbica <strong>é ". number_format ($rc, 2 ,",", ".") ."</li><strong></ul>";
        ?>
                </section>
</body>
</html>

