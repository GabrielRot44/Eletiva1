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
                    switch($valor1){
                        case 1:
                            echo"<p>$valor1- Janeiro</p>";
                            break;
                        case 2:
                            echo"<p>$valor1- Fevereiro</p>";
                            break;
                        
                        case 3:
                            echo"<p>$valor1- Março</p>";
                            break;
                        
                        case 4:
                            echo"<p>$valor1- Abril</p>";
                            break;

                        case 5:
                            echo"<p>$valor1- Maio</p>";
                            break;
                        
                        case 6:  
                            echo"<p>$valor1- Junho</p>";
                            break;

                        case 7:
                            echo"<p>$valor1- Julho</p>";
                            break;
                        
                        case 8:
                            echo"<p>$valor1- Agosto</p>";
                            break;
                        
                        case 9:
                            echo"<p>$valor1- Setembro</p>";
                            break;
                        
                        case 10:
                            echo"<p>$valor1- Outubro</p>";
                            break;

                        case 11:
                            echo"<p>$valor1- Novembro</p>";
                            break;
                        
                        case 12:  
                            echo"<p>$valor1- Dezembro</p>";
                            break;  
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