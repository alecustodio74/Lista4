<?php //obrigada que as funções e variáveis tenham suas tipagens definiddas
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Maiúsculas e minúsculas - Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Maiúsculas e minúsculas</h1>

    <?php
    
    function manipularString(string $palavra) : void {
        echo "<p>Em maiúsculas " . strtoupper($palavra) . "</p>";
        echo "<p>Em minúsculas " . strtolower($palavra) . "</p>";
    }
       

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try {
                $palavra = $_POST['palavra'];
                manipularString($palavra);
                
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
        ?>

        <button type="submit" class="btn btn-primary">
        <?php
            echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
            ?>
        </button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  </body>
</html>