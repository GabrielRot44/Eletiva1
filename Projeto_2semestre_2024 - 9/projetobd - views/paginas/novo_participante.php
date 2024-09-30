<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Adicionar Participante</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(01)9999-9999" required>
        </div>
        <div class="mb-3">
            <label for="palestra_id" class="form-label">Palestras</label>
            <select name="palestra_id" id="palestra_id" class="form-select" required>
                    <option value="1">palestra 1</option>
            </select>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
