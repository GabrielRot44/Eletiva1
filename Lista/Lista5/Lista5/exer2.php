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
        <label for="nome<?=$i?>">Aluno <?=$i+1?> - Nome:</label>
        <input type="text" class="form-control" id="nome<?=$i?>" name="nome[]" placeholder="Fulano" required>
        <label for="nota1<?=$i?>">Nota 1:</label>
        <input type="number" class="form-control" id="nota1<?=$i?>" name="nota1[]" placeholder="0" required>
        <label for="nota2<?=$i?>">Nota 2:</label>
        <input type="number" class="form-control" id="nota2<?=$i?>" name="nota2[]" placeholder="0" required>
        <label for="nota3<?=$i?>">Nota 3:</label>
        <input type="number" class="form-control" id="nota3<?=$i?>" name="nota3[]" placeholder="0" required>
      </div>
    <?php endfor; ?>
    <button type="submit" class="btn btn-outline-dark mt-3">Enviar</button>
    </div>
  
</form>
    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST"){
      try{
  
        $estudantes = array();
        $nomes = $_POST['nome'];
        $nota1s = $_POST['nota1'];
        $nota2s = $_POST['nota2'];
        $nota3s = $_POST['nota3'];

        foreach ($nomes as $i => $nome) {
            $nota1 = $nota1s[$i];
            $nota2 = $nota2s[$i];
            $nota3 = $nota3s[$i];
            $media = ($nota1 + $nota2 + $nota3) / 3;
            $estudantes[$nome] = $media;
        }

        ksort($estudantes);

        echo "<h2 class='margin p-2'> Médias dos Alunos </h2>";
        
        foreach ($estudantes as $nome => $media) {
            echo "<p class='border border-dark margin p-2'>$nome: $media</p>";
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