<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Editar Evento</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        
        <div class="mb-3">
            <label for="palestra_id" class="form-label">Palestras</label>
            <select name="palestra_id" id="palestra_id" class="form-control" required>
                    <option value="1">Palestra 1</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Evento</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
