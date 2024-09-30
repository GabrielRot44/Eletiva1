<?php
    declare(strict_types = 1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eletiva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lista 5</h1>

    <form action="process.php" method="post">
    <div class="row p-1 m-2 border border-dark border-3">
    <?php for ($i = 0; $i < 5; $i++) : ?>
      <div class="col border border-danger border-2 p-1 margin">
        <label for="nome<?=$i?>">Item <?=$i+1?> - Nome:</label>
        <input type="text" class="form-control" id="nome<?=$i?>" name="nome[]" placeholder="Ciclano" required>
        <label for="preco<?=$i?>">Preço:</label>
        <input type="number" class="form-control" id="preco<?=$i?>" name="preco[]" placeholder="R$ 00,00" required>
    
      </div>
    <?php endfor; ?>
    <button type="submit" class="btn btn-outline-dark mt-3">Enviar</button>
    </div>
</form>

    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        try{
   
            $items = array();
            $nomes = $_POST['nome'];
            $precos = $_POST['preco'];

            foreach ($nomes as $i => $nome) {
                $preco = $precos[$i];
                $preco *= 1.15;
                $items[$nome] = $preco;
            }

            asort($items);

            echo "<h2 class='margin p-2'> Itens com Imposto </h2>";
        
            foreach ($items as $nome => $preco){
                echo "<p class='border border-dark margin p-2'>$nome: R$ $preco </p>";
            }
    }
        catch(Exception $e){
        echo "ERRO".$e->getMessage();
        }
    }
    ?>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>