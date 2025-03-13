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
    <title>Palavra contida - Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Verificar data válida</h1>

    <?php
    
    function verificaData(int $mes, int $dia, int $ano) : void {
        if (checkdate($mes,$dia,$ano)){
            echo "Data válida: " . $dia . "/" . $mes . "/" . $ano;
        }
        else
            echo "Data inválida. Favor redigitar!\n";
        }
        
       
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try {
                $dia = intval($_POST['dia']);
                $mes = intval($_POST['mes']);
                $ano = intval($_POST['ano']);
                verificaData($mes, $dia, $ano);
               
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
        ?>
        <div class="mb-3">
            <button type="subm it" class="btn btn-primary"><a href="4_datavalida.php" style="color: white; text-decoration: none;">Voltar</a></button>
        </div>
        <?php
            //    echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
            ?>
            

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  </body>
</html>