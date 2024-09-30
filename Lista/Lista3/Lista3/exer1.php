<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lista 3</h1>

    <form action="/exer1resp.php" method="POST">
        <div class="border p-3 m-3">
            <div class="row border">
                <div class="col">
                    <label for="valor1" class="form-label">Informe o valor 1</label>
                    <input type="number" name="valor1" id="valor1" class="form-control">
                </div>
                <div class="col">
                    <label for="valor2" class="form-label">Informe o valor 2</label>
                    <input type="number" name="valor2" id="valor2" class="form-control">
                </div>
                <div class="col">
                    <label for="valor3" class="form-label">Informe o valor 3</label>
                    <input type="number" name="valor3" id="valor3" class="form-control">
                </div>
                <div class="col">
                    <label for="valor4" class="form-label">Informe o valor 4</label>
                    <input type="number" name="valor4" id="valor4" class="form-control">
                </div>
            </div>
            <div class="row border">
                <div class="col-3">
                    <label for="valor5" class="form-label">Informe o valor 5</label>
                    <input type="number" name="valor5" id="valor5" class="form-control">
                </div>
                <div class="col-3">
                    <label for="valor6" class="form-label">Informe o valor 6</label>
                    <input type="number" name="valor6" id="valor6" class="form-control">
                </div>
                <div class="col-3">
                    <label for="valor7" class="form-label">Informe o valor 7</label>
                    <input type="number" name="valor7" id="valor7" class="form-control">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <button type="submit" class="bnt">Enviar</button>
                </div>
            </div>
        </div>


    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>