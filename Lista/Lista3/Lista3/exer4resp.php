<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eletivas-1 FatecPP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Respostas</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="row border m-5">
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                try{
                    $valor1 = (int)$_POST["valor1"];
                    if ($valor1 > 100) {
                        $result = $valor1 - ($valor1 * 0.15);
                        echo"<p>O novo valor do produto é $result</p>";
                    } 
                    else{
                        echo"<p>Valor do produto é $valor1</p>";
                    }
                    }
                catch(Exception $e){
                    echo "ERRO".$e->getMessage();
                }
            }
        ?>
    </div>
  </body>
</html>