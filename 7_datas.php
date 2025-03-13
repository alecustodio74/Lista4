<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Compara duas datas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Compara duas datas</h1>

    <form method="post" action="7_resposta.php">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="data1" class="form-label">Digite a primeira data</label>
                        <input type="date" id="data1" name="data1" class="form-control" required="">
                    </div>
                
                    <div class="mb-3">
                        <label for="data2" class="form-label">Digite a segunda data</label>
                        <input type="date" id="data2" name="data2" class="form-control" required="">
                    </div>
                </div>
                    
                                
                    <button type="submit" class="btn btn-primary">Verificar</button>
                </form>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>