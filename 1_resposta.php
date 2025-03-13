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
    <title>Conta letras - Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Contando os caracteres</h1>

    <?php
    
        function contarCaracteres(string $palavra) : void {
            echo "A palavra possui " .strlen($palavra). " caracteres ";
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try {
                $palavra = $_POST['palavra'];
                contarCaracteres($palavra);
                
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
        ?>

    <button type="submit" class="btn btn-primary"><a href="1_contaletras.php" style="color: white; text-decoration: none;">Voltar</a></button>
    <?php
        // echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


  </body>
</html>