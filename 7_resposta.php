<?php
    //obriga que as funções e variáveis tenham suas tipagens definiddas
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Compara duas datas - Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Compara duas datas</h1>

    <?php
    
    function verificaDatas(DateTime $data1, DateTime $data2) : void {
        $diferenca = $data1->diff($data2);
        echo "Diferença de dias entre as datas: ";
        if ($diferenca->d > 0)
            echo $diferenca->d . " dia(s), ";
        if ($diferenca->m > 0)
            echo $diferenca->m . " mes(es) e ";
        if ($diferenca->y > 0)
            echo $diferenca->y . "ano(s).";
        }
        
       
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try {
                #input type="date" name="data1"/>
                $data1 = new DateTime($_POST['data1']);
                $data2 = new DateTime($_POST['data2']);
                verificaDatas($data1, $data2);
               
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
        ?>
        <div class="mb-3">
            <button type="subm it" class="btn btn-primary"><a href="7_datas.php" style="color: white; text-decoration: none;">Voltar</a></button>
        </div>
        <?php
            //    echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
            ?>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>