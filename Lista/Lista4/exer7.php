<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lista 4</h1>

    <form action="/exer7res.php" method="POST">
        <div class="border p-3 m-3">
            <div class="row border">
                <div class="col">
                    <label for="data1" class="form-label">Informe o data1</label>
                    <input type="text" placeholder="dd/mm/YYYY" name="data1" id="data1" class="form-control" required>
                </div> 
                <div class="col">
                    <label for="data2" class="form-label">Informe o Mês</label>
                    <input type="text" placeholder="dd/mm/YYYY" name="data2" id="data2" class="form-control" required>
                </div> 
            </div>
                <div class="row p-3 m-3">
                        <button type="submit" class="btn btn-outline-secondary sticky-sm-bottom">Submit</button>
                </div>
        </div>


    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>