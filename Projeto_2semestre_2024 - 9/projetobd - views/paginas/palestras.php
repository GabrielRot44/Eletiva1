<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Palestras</h2>
    <a href="nova_palestra.php" class="btn btn-success mb-3">Nova Palestra</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Evento</th>
                <th>Palestrante</th>
            </tr>
        </thead>
        <tbody>
        <h2 class="mt-5">Palestras Cadastradas</h2>
            <?php if (!empty($palestras)): ?>
                <table class="table table-bordered mt-3">
                    
                    <tbody>
                        <?php foreach($palestras as $palestra): ?>
                            <tr>
                                <td><?php echo $palestra['id'];?></td>
                                <td><?php echo $palestra['nome']; ?></td>
                                <td><?php echo $palestra['evento']; ?></td>
                                <td><?php echo $palestra['palestrante']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Nenhuma palestra cadastrada até o momento.</p>
            <?php endif; ?>
                        <a href="editar_palestra.php" class="btn btn-warning">Editar</a>
                        <a href="excluir_palestra.php" class="btn btn-danger">Excluir</a>
                    
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
