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

            function verificarPalavraContida($palavra1, $palavra2) {
                if (empty($palavra1) || empty($palavra2)) {
                    return "Por favor, preencha as duas palavras.";
                }
                $posicao = strpos($palavra1, $palavra2);
                if ($posicao !== false) {
                    return "A palavra '$palavra2' está contida na palavra '$palavra1' na posição $posicao.";
                } 
                else {
                    return "A palavra '$palavra2' NÃO está contida na palavra '$palavra1'.";
                }
            }

          if($_SERVER["REQUEST_METHOD"] == "POST"){
              try{

                $palavra1 = $_POST['valor1'];
                $palavra2 = $_POST['valor2'];
                echo verificarPalavraContida($palavra1, $palavra2);


                }
              catch(Exception $e){
                    echo "ERRO".$e->getMessage();
                }
            }
        ?>
    </div>
  </body>
</html>