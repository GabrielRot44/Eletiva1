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
        <label for="titulo<?=$i?>">Livro <?=$i+1?> - Título:</label>
        <input type="text" id="titulo<?=$i?>" name="titulo[]"m placeholder="Percy Jackson e o Ladrão de Raois" required>
        <label for="quantidade<?=$i?>">Quantidade em Estoque:</label>
        <input type="number" id="quantidade<?=$i?>" name="quantidade[]" required>
    
      </div>
    <?php endfor; ?>
    <button type="submit" class="btn btn-outline-dark mt-3">Enviar</button>
    </div>
</form>

    <?php
 if ($_SERVER['REQUEST_METHOD']=="POST"){
    try{
        $livros = array();
        $titulos = $_POST['titulo'];
        $quantidades = $_POST['quantidade'];

        foreach ($titulos as $i => $titulo) {
            $quantidade = $quantidades[$i];
            $livros[$titulo] = $quantidade;
        }
        
        ksort($livros);
        
        echo "<h2 class='margin p-2'> Livros em Estoque </h2>";
      
        foreach ($livros as $titulo => $quantidade) {
            if ($quantidade < 5) {
                echo "<p class='border border-dark margin p-2'><b>ALERTA:</b> $titulo - Quantidade em Estoque: $quantidade (Baixa quantidade)</p>";
            } else {
                echo "<p class='border border-dark margin p-2'>$titulo - Quantidade em Estoque: $quantidade</p>";
            }
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