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
                    $valores = array($_POST["valor1"],$_POST["valor2"],$_POST["valor3"],$_POST["valor4"],$_POST["valor5"],$_POST["valor6"],$_POST["valor7"],);
                    $posit = array(0);
                    for($i = 0; $i < 7; $i ++){
                        
                        if ($i != 0){
                            if ($min > $valores[$i]){
                                $min = $valores[$i];
                                $posit[0] = $i + 1;
                            }
                            elseif ($min == $valores[$i] ){
                                array_push($posit,$i +1);
                            }
                        
                        }
                        else{
                           $min = $valores[$i]; 
                        }

                    }
                    echo "<p>O menor valor é $min</p>";
                    echo "<p>Na posição |";
                    foreach($posit as $obj){    
                        echo $obj . "|";

                    }
                    
                }catch(Exception $e){
                    echo "ERRO".$e->getMessage();
                }
            }
        ?>
    </div>
  </body>
</html>