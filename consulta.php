<?php
    include 'includes/header_cliente.php';
?>
<body>
<div class="container_consulta">
    <h1>Cadastre a Consulta do seu Pet</h1>
    <form action="inserir.php" method="POST">
        <!-- Nome do Pet -->
        <div class="mb-3">
            <input type="text" class="form-control" name="pet" placeholder="Digite o nome do pet" required>
        </div>

        <!-- Espécie -->
        <div class="mb-3">
            <select class="form-control" name="especie" required>
                <option value="" disabled selected>Selecione a espécie do pet</option>
                <option value="Cachorro">Cachorro</option>
                <option value="Gato">Gato</option>
                <option value="Passaro">Pássaro/Ave</option>
                <option value="Coelho">Coelho</option>
                <option value="Rato">Hamster/Rato</option>
                <option value="Outro">Outro</option>
            </select>
        </div>

        <!-- Raça -->
        <div class="mb-3">
            <input type="text" class="form-control" name="raca" placeholder="Digite a raça do pet" required>
        </div>

        <!-- Sexo -->
        <div class="mb-3">
            <select class="form-control" name="sexo" required>
                <option value="" disabled selected>Selecione o sexo do pet</option>
                <option value="Macho">Macho</option>
                <option value="Fêmea">Fêmea</option>
            </select>
        </div>

        <!-- Procedimento -->
        <div class="mb-3">
            <select class="form-control" name="procedimento" required>
                <option value="" disabled selected>Selecione o procedimento</option>
                <option value="Vacinação">Vacinação</option>
                <option value="Consulta geral">Consulta geral</option>
                <option value="Tosse ou resfriado">Tosse ou resfriado</option>
                <option value="Retorno">Retorno</option>
                <option value="Banho">Banho e Tosa</option>
                <option value="Exame">Exame</option>
                <option value="Outro">Outro</option>
            </select>
        </div>

        <!-- Data -->
        <div class="mb-3">
            <input type="date" class="form-control" name="data" required>
        </div>

        <!-- Horário -->
        <div class="mb-3">
            <input type="time" class="form-control" name="horario" required>
        </div>

        <!-- Campo Opcional -->
        <div class="mb-3">
            <input type="text" class="form-control" name="observacao" placeholder="Observação (campo não obrigatório)">
        </div>

        <!-- Botões -->
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="index.php" type="button" class="btn btn-warning">Voltar</a>
    </form>
</div>

<?php
    include 'includes/footer.php';
?>