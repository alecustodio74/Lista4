<?php //obrigada que as funções e variáveis tenham suas tipagens definiddas
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Aula 06032025 - Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Contando os caracteres</h1>

    <?php
    
        function manipularString(string $palavra) : void {
            echo "A palavra possui " .strlen($palavra). " caracteres ";
            echo "Letra A substituida por 4: ".str_replace("a","4", $palavra);
        }

        function gerarValorAleatorio(int $inicial, int $final): int{
            return rand($inicial, $final); //rand gera numeros aleatorios
        }


        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try{
                $palavra = $_POST['palavra'];
                manipularString(strtolower($palavra));
                //strtolower ou strtouper ja força a lera digitada para o caracter esperado
                $valor = gerarValorAleatorio(1,20);
                echo "<p>O número gerado foi: $valor</p>";
                $numero = 3.55554;
                echo "<p>Mostrando com duas casas decimais: " . number_format($numero,2,",",".")."</p>";
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>