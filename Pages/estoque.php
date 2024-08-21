<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estoque.css">
    <link rel="icon" href="../imgs/logo.png" type="image/x-icon">
    <title>Estoque</title>
</head>
<body>
    <h1>Estoque Geral da Fábrica</h1>
    <br>
    <h2>Peças</h2>
    <table id="table1">
        <tr>
            <th>ID</th>
            <th>Nome da Peça</th>
            <th>Lote</th>
        </tr>
        <?php
        // Conecta ao BD com PDO V.
        $conexao = new PDO("mysql:host=localhost;dbname=fabrica", "root", "");
        // Executa a consulta das peças V.
        $query_pecas = $conexao->query("SELECT * FROM pecas");
        // Percorre sobre os resultados V.
        while ($peca = $query_pecas->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$peca['id']}</td>";
            echo "<td>{$peca['nome']}</td>";
            echo "<td>{$peca['lote']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br><br>

    <br><br>
    <h2>Veículos</h2>
    <table id="table3">
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Valor</th>
            <th>Ano</th>
            <th>Número do Chassi</th>
            <th>Quantidade</th>
        </tr>
        <?php
        // Executa a consulta e seleciona os carros 
        $query_carros = $conexao->query("SELECT * FROM carros");
        // Percorre sobre os resultados
        while ($carro = $query_carros->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$carro['id']}</td>";
            echo "<td>{$carro['modelo']}</td>";
            echo "<td>{$carro['valor']}</td>";
            echo "<td>{$carro['ano']}</td>";
            echo "<td>{$carro['numero_Chassi']}</td>";
            echo "<td>{$carro['estoque_carros']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br><br>

    <br>

    <div class="btn-container">
        <a href="Home.php" class="btn">Home</a>
    </div>      

    <br><br>
</body>
</html>
