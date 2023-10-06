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
//AREA DE DECLARAÇÕES
              $num =$_REQUEST['num'];
              $seg = 1;
              $min =  60;
              $hor = 3600  ; 
              $dia = 86400;
              $semana = 604800;

    ?>
 
<main>
    
                   <h2>Calculadora de Tempo</h2>
            <form action="<?=@$_SERVER ['PHP_SELF']?> " method="request">
                <label for="num">Qual o total de segundos?</label>
                <input type="number" name="num" id="num" min="1" step="1" value="<?=$num?>">

                <input type="submit"  value="Calcular">
            </form>
    </main>

    <section>
        <h1>Totalizando tudo</h1>

    <?php

    $seg = 1;
    $min = $seg * 60; 
    $hor = $min * 60; 
    $dia = $hor * 24;
    $sem = $dia *7;
   

    echo "<p>Analisando o valor que você digiotu $num segundos</strong> equivalem a um total de:";
   
    echo "<ul><li> $sem semanas </li>";
    echo "<li> $dia dias </li>";
    echo "<li> $hor horas </li>";
    echo "<li> $min minutos </li>";
    echo "<li> $seg segundos </li>";
      ?>
    
    </section>
    </body>
</html>