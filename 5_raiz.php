<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Raiz quadrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Raiz quadrada</h1>

    <form method="post" action="">
      <div class="col-3">
              <div class="mb-3">
                  <label for="numero" class="form-label">Informe um número</label>
                  <input type="number" id="numero" name="numero" class="form-control" required="">
              </div>
      </div>
          
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <?php
    
        function raizQuadrada(int $num) : void {
            echo "A raiz quadrada de " . $num . " é = " . number_format(sqrt($num),2, '.',',');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            try {
                $num = $_POST['numero'];
                    raizQuadrada($num);
                
            } catch (Exception $e) {
                echo "Erro: ".$e->getMessage();
            }
        }
        ?>
            

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>