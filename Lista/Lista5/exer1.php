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

    <form action="" method="POST">
      <div class="row p-1 m-2 border border-dark border-3">
      <?php for($i = 1; $i <= 5; $i++) : ?>  
    <div class="col border border-danger border-2 p-1 margin">
        <label for="auxNome<?php echo $i; ?>">Nome: </label>
        <input type="text" class="form-control" name="matriz[<?php echo $i; ?>][nome]" placeholder="Nome {<?= $i ?>}" required/>

        <label for="auxTelefone<?php echo $i; ?>">Telefone: </label>
        <input type="text" class="form-control" name="matriz[<?php echo $i; ?>][telefone]" placeholder="(18)XXXXX-xxxx" required>
       
    </div>
      <?php endfor; ?>

      <button type="submit" class="btn btn-outline-dark mt-3">Enviar</button>
      </div>
  </form>
  
  <div class="row border border-dark border-2 p-2 m-2 mt-5">
  
    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST"){
      try{
        $matriz = $_POST['matriz'];
        $matrizFinal = [];
        $auxNome = [];
        $auxTelefone = [];
        $x = [];

        foreach ($matriz as $valoresMatriz) {
            $nome = trim($valoresMatriz['nome']);
            $telefone = trim($valoresMatriz['telefone']);
            if (in_array($nome, $auxNome)){
                $x = "Nome: {$nome} já existente!";
            }
            if (in_array($telefone, $auxTelefone)){
                $x = "Telefone: $telefone já existente!";
            }
            if ($x == null){
                $matrizFinal[$nome] = $telefone; 
            }
            else{
                echo"Insira todos os valore! ";
            }
        }
        ksort($matrizFinal);
        if ($x == null){
            echo"<h3 class='margin p-2'>Lista de Contatos:</h3>";
            foreach ($matrizFinal as $nome => $telefone){
                
                echo"<p class='border border-dark margin p-2'>Nome: $nome - Telefone: $telefone</p>";
                
            }
        }
      }
      catch(Exception $e){
        echo "ERRO".$e->getMessage();
      }
    }
  ?>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>