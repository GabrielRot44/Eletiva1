<?php
    declare(strict_types = 1);
?>
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

            function calcularDiferencaDatas($data1, $data2) 
            {
                if (!$data1 || !$data2) {
                    return "Formato de data inválido. Por favor, use o formato dd/mm/YYYY.";
                }

                $diferenca = $data1->diff($data2);

                return "A diferença entre as datas é de " . $diferenca->days . " dias.";
            }
          if($_SERVER["REQUEST_METHOD"] == "POST"){
              try{

                $valor1 = $_POST['data1'];
                $valor2 = $_POST['data2'];
                $data1 = DateTime::createFromFormat('d/m/Y', $valor1);
                $data2 = DateTime::createFromFormat('d/m/Y', $valor2);
                echo calcularDiferencaDatas($data1, $data2) ;

                }
              catch(Exception $e){
                    echo "ERRO".$e->getMessage();
                }
            }
        ?>
    </div>
  </body>
</html>