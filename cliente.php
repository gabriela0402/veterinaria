<?php
    include 'includes/header_adm.php'
?>
<link rel="stylesheet" href="cliente.css">

<body>
    <h1>Consultas Agendadas</h1>    
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME DO CLIENTE</th>
                    <th scope="col">RAÇA</th>
                    <th scope="col">PROCEDIMENTO</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">HORÁRIO</th>
                    <th scope="col">DATA</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require 'conexao.php';
                $sql = "SELECT * FROM produtos";
                $stmt = $pdo->query($sql);
                while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$produto['id']."</td>";
                    echo "<td>".$produto['nome']."</td>";
                    echo "<td>".$produto['preco']."</td>";
                    echo "<td>".$produto['quantidade']."</td>";
                    echo "
                        <td>
                            <div class='btn-group' role='group'>
                                <a href='form_atualizar.php?id=".$produto['id']."' class='btn btn-danger'>Atualizar</a>
                                <a href='deletar.php?id=".$produto['id']."' class='btn btn-warning' onclick=\"return confirm('Tem certeza que deseja excluir este produto?');\">Apagar</a>
                            </div>
                        </td>
                    ";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-warning">Voltar</a>
    </div>
<?php
    include 'includes/footer.php'
?>
