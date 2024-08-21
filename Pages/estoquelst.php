<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estoque2.css">
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
            <th>Quantidade</th>
            <th>Lote</th>
        </tr>
        <?php
        // Conecta com o BD V.
        $conexao = new PDO("mysql:host=localhost;dbname=fabrica2", "root", "");

        // Consulta bd V.
        $query_pecas = $conexao->query("SELECT * FROM pecas");

        // Percorre e mostra a tabela V.
        while ($peca = $query_pecas->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$peca['id']}</td>"; 
            echo "<td>{$peca['nome']}</td>"; 
            echo "<td>{$peca['estoque']}</td>"; 
            echo "<td>{$peca['lote']}</td>"; 
            echo "</tr>";
        }
        ?>
    </table>
    <br><br>
    
    <h2>Carros Produzidos</h2>
    <table id="table3">
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Ano de Fabricação</th>
            <th>Número do Chassi</th>
            <th>Quantidade</th>
            <th>Lote</th>
        </tr>
        <?php
        // Consulta a tabela 'carro' no bd V.
        $query_carros = $conexao->query("SELECT * FROM carros");

        // Percorre sobre os resultados da consulta e exibe em tabela V.
        while ($carro = $query_carros->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$carro['id']}</td>"; 
            echo "<td>{$carro['modelo']}</td>"; 
            echo "<td>{$carro['ano']}</td>";
            echo "<td>{$carro['numero_Chassi']}</td>";
            echo "<td>{$carro['estoque_carros']}</td>";
            echo "<td>{$carro['lote']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br><br>
    <div class="btn-container">
        <a href="visitante.php" class="btn">Home</a>
    </div>
    <br><br>
</body>
</html>
