<?php
    include 'includes/header_cliente.php';
?>
<body>
<div class="container">
    <h1>Bem-vindo ao 1º Sistema Web com CRUD</h1>
    <h2>Evellyn Furtado</h2>

    <form action="inserir.php" method="POST">
        <!-- Nome do Pet -->
        <div class="mb-3">
            <input type="text" class="form-control" name="pet" placeholder="Digite o nome do pet" required>
        </div>

        <!-- Raça -->
        <div class="mb-3">
            <input type="text" class="form-control" name="raca" placeholder="Digite a raça do pet" required>
        </div>

        <!-- Procedimento -->
        <div class="mb-3">
            <input type="text" class="form-control" name="procedimento" placeholder="Digite o procedimento" required>
        </div>

        <!-- Data -->
        <div class="mb-3">
            <input type="date" class="form-control" name="data" required>
        </div>

        <!-- Horário -->
        <div class="mb-3">
            <input type="time" class="form-control" name="horario" required>
        </div>

        <!-- Botões -->
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="index.php" type="button" class="btn btn-warning">Voltar</a>
    </form>
</div>

<?php
    include 'includes/footer.php';
?>