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
    <h1>Verificar palavra contida</h1>

    <?php
    
    function palavraContida(string $palavra1, string $palavra2) : void {
        if (strpos($palavra1, $palavra2) !== false) {
            echo "A palavra '$palavra2' está contida em '$palavra1'.\n";
        } else {
            echo "A palavra '$palavra2' não está contida em '$palavra1'.\n";
        }
    }
       

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try {
                $palavra1 = $_POST['palavra1'];
                $palavra2 = $_POST['palavra2'];
                palavraContida($palavra1,$palavra2);
                
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
        ?>
        <div class="mb-3">
            <button type="subm it" class="btn btn-primary"><a href="3_contida.php" style="color: white; text-decoration: none;">Voltar</a></button>
        </div>
        <?php
            //    echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
            ?>
            

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  </body>
</html>