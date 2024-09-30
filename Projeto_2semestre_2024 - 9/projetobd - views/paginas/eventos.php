<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Eventos</h2>
    <a href="novo_evento.php" class="btn btn-success mb-3">Novo Evento</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Palestras</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventos as $evento): ?>
            <tr>
                <td>1</td>
                <td>Inovação Tecnologica</td>
                <td>Palestras e exibição de novas tecnologias</td>
                <?php foreach ($palestras as $palestra): ?>
                    <td>1</td>
                    <td>Implementação de novas tecnologias</td>
                    <td>Carlos Araujo</td>
                <?php endforeach; ?>
                <td>
                    <a href="editar_evento.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_evento.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
