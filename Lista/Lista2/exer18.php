<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eletivas-1 FatecPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 5</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <form action="/Lista2/exer18resp.php" method="POST">
    <div class="border p-3 m-3">
        <div class="row">
            <div class="col">
                <label for="valor1" class="form-label">Informe o Capital: </label>
                <input type="number" name="valor1" id="valor1" class="form-control">
            </div>
            <div class="col">
                <label for="valor2" class="form-label">Informe a taxa: </label>
                <input type="number" name="valor2" id="valor2" class="form-control">
            </div>
            <div class="col">
                <label for="valor3" class="form-label">Informe o período: </label>
                <input type="number" name="valor3" id="valor3" class="form-control">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col">
                <button type="submit" class="bnt">Enviar</button>
            </div>
        </div>
    </div>
    </form>

  </body>
</html>