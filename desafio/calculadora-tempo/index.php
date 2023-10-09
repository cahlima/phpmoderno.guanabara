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
              $total = $_REQUEST['seg']?? 0;
             
    ?>
 
<main>
    
                   <h2>Calculadora de Tempo</h2>
            <form action="<?=@$_SERVER ['PHP_SELF']?> " method="request">
                <label for="num">Qual o total de segundos?</label>
                <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">

                <input type="submit"  value="Calcular">
            </form>
    </main>

  

    <?php


        $sobra =$total;
        //Total de Semanas
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        // Total de Dias
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        // Total de Horas
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        // Total de MInutos
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        // Total de Segundo
               $segundo = $sobra 
      ?>

<section>
        <h1>Totalizando tudo</h1>
        <p>Analisando o valor que você digiotu <strong> <?=$total?> segundos</strong> equivalem a um total de:
   
   <li> <?=$semana?> semanas </li>
   <li> <?=$dia?> dias </li>
   <li> <?=$hora?> horas </li>
   <li> <?=$minuto?> minutos </li>
  <li> <?=$segundo?> segundos </li>

    </section>
    </body>
</html>