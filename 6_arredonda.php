<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Arrendondar números</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Arrendondar números de ponto flutuante</h1>

    <form method="post" action="">
      <div class="col-3">
              <div class="mb-3">
                  <label for="numero" class="form-label">Informe um número decimal</label>
                  <input type="double" id="numero" name="numero" class="form-control" required="">
              </div>
      </div>
          
        <button type="submit" class="btn btn-primary">Arredondar</button>
    </form>

    <?php
    
        function arredondarNumero(float $num) : void {
            echo "<p>O número " . $num . " arredondado para cima é = " . ceil($num) . "</p>";
            echo "<p>O número " . $num . " arredondado para baixo é = " . floor($num)  . "</p>";
            echo "<p>O número " . $num . " arredondado para o mais próximo é = " . round($num)  . "</p>";
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try {
                $num = $_POST['numero'];
                    arredondarNumero($num);
                
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
        ?>
            

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>