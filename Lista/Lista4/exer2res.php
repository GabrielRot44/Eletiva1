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

          function maiusculoMinusculo($palavra) {
            if (empty($palavra)) {
              return "Por favor, insira uma palavra.";
            }
            $maiusculo = strtoupper($palavra);
            $minusculo = strtolower($palavra);
            $a = "<p>Maiusculo: $maiusculo</p><p>Minusculo: $minusculo.</p>";
            return $a;
          }
          if($_SERVER["REQUEST_METHOD"] == "POST"){
              try{
                  $palavra = $_POST['valor1'];
                  echo maiusculoMinusculo($palavra);
                }
              catch(Exception $e){
                    echo "ERRO".$e->getMessage();
                }
            }
        ?>
    </div>
  </body>
</html>