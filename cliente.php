<?php
    include 'includes/header_adm.php'
?>
<link rel="stylesheet" href="cliente.css">

<body>
    <h1>Consultas Agendadas</h1>    
    <div class="container_cliente">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME CLIENTE</th>
                    <th scope="col">NOME ANIMAL</th>
                    <th scope="col">ESPÉCIE</th>
                    <th scope="col">RAÇA</th>
                    <th scope="col">SEXO</th>
                    <th scope="col">PROCEDIMENTO</th>
                    <th scope="col">DATA</th>
                    <th scope="col">HORÁRIO</th>
                    <th scope="col">OBSERVAÇÃO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Zé Felipe</td>
                    <td>Rex</td>
                    <td>Cachorro</td>
                    <td>Labrador Retriever</td>
                    <td>Macho</td>
                    <td>Consulta de Rotina</td>
                    <td>15/03/2024</td>
                    <td>14:30</td>
                    <td>Cão Bravo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria Luiza</td>
                    <td>Luna</td>
                    <td>Cachorro</td>
                    <td>Shih Tzu</td>
                    <td>Fêmea</td>
                    <td>Vacinação Anual</td>
                    <td>20/03/2024</td>
                    <td>10:00</td>
                    <td>Muito Agitado</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Fábio Santos</td>
                    <td>Thor</td>
                    <td>Cachorro</td>
                    <td>Bulldog Francês</td>
                    <td>Macho</td>
                    <td>Banho e Tosa</td>
                    <td>25/03/2024</td>
                    <td>16:15</td>
                    <td>Sensível ao calor extremo</td>
                </tr>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-warning">Voltar</a>
    </div>
<?php
    include 'includes/footer.php'
?>
