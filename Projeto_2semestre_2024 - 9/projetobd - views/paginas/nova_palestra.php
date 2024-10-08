<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Criar Nova Palestra</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="evento_id" class="form-label">Evento</label>
            <select name="evento_id" id="evento_id" class="form-select" required>
                    <option value="1">Evento 1</option>
            </select>
            <div class="mb-3">
            <label for="palestrante" class="form-label">Palestrante</label>
            <input type="text" name="palestrante" id="palestrante" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Palestra</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>

<?php 
    
    $palestras = [];
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        try{
           
            $nome = $_POST["nome"];
            $evento = $_POST["evento_id"];
            $palestrante = $_POST["palestrante"];
            $id = $palestras($max)["id"];
            
            $nova_palestra = [
                'id' => $id,
                'nome' => $nome,
                'evento' => $evento,
                'palestrante' => $palestrante
            ];

            $palestras[] = $nova_palestra;

        }catch(Exception $e){
            echo "ERRO: ".$e->getMessage();
        }
    }
?>
