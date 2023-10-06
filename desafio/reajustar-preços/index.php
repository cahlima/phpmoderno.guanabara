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
      
            $preco =$_GET['preco'] ?? '0';
            $porc = $_GET['porc'] ?? '0';
                 

    ?>
    <main>
                   <h2>Reajustador de Preço:</h2>
            <form action="<?=@$_SERVER ['PHP_SELF']?> " method="get">
                <label for="preco">Preço do Produto (R$)</label>
                <input type="number" name="preco" id="preco" min="0,10" step="0,01" value="<?=$preco?>">

                <label for="porc">Qual será a porcentagem de reajuste?(<strong><span id="p">?</span>%</strong>) </label>
                <input type="range" name="porc" id="porc" min="0" max="100" step="1" oninput= "mudaValor()">


                <input type="submit"  value="Reajustar">
            </form>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>

    <?php
      $aumento = $preco * $porc / 100;
      $novo = $preco + $aumento;
       

    echo "<p>O  produto que custava <strong>R$ $preco </strong> com  <strong>$porc % </strong> de aumento vai passar a custar <strong>R$ $novo</strong>"
    ?>
    </section>
    <script>

        //declarações automaticas

        mudaValor()
                function mudaValor () {
                            p.innerText = porc.value



                }


    </script>
    
    </body>
</html>