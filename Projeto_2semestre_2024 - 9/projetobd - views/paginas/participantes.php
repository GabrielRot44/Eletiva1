<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php'; 
?>

<div class="container mt-5">
    <h2>Gerenciamento de Participantes</h2>
    <a href="novo_participante.php" class="btn btn-success mb-3">Novo Participante</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Palestra</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($participantes as $participante): ?>
            <tr>
                <td>1</td>
                <td>Participante</td>
                <td>Participante@gmail.com</td>
                <td>(18)99123-9876</td>
                <td>Palestra 1</td>
                <td>
                    <a href="excluir_participante.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
