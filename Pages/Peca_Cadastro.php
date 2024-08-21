<!DOCTYPE html>
<html>

<head>
  <title>Administracao de Pecas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..\CSS\Modelo.css">
  <link rel="stylesheet" href="..\CSS\Modelo2.css">
  <link rel="stylesheet" href="..\CSS\Home.css">
  <link rel="stylesheet" href="..\CSS\peca_Cadastro.css">
  <link rel="stylesheet" href="..\CSS\cards.css">
  <script src="..\scripts\card.js"></script>
  <?php
  session_start();
            if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
              header('location:visitante.php');
            }

            $logado = $_SESSION['login']; 

  if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
  }
  include('..\Conn\BDConn.php');
  ?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <?php
  $sql = "SELECT pecas.id, pecas.nome, pecas.preco, pecas.estoque, pecas.lote, fornecedores.nome as fornecedor FROM pecas
          INNER JOIN fornecedores ON pecas.Fk_Fornecedor = fornecedores.id
          ORDER BY pecas.id";

  $result = $conn->query($sql);

  $sql_fornecedores = "SELECT id, nome FROM fornecedores";
  $result_fornecedores = $conn->query($sql_fornecedores);
  ?>

  <div class="msb" id="msb">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <div class="brand-wrapper">
          <div class="brand-name-wrapper">
            <h1 class="Marca">
              <i class="bx bxl-codepen"></i>
              <span>Nexus Motors</span>
            </h1>
          </div>
        </div>
      </div>

      <div class="side-menu-container">
        <ul class="nav navbar-nav">
          <div class="topo"></div>

          <ul>
            <li>
              <a href="Home.php">
                <i class="bx bxs-home"></i>
                <span class="nav-item">Home</span>
              </a>
              <span class="tooltip">Home</span>
            </li>
            <li>
              <a href="fornecedor.php">
                <i class="fa-solid fa-truck-fast"></i>
                <span class="nav-item">Fornecedor</span>
              </a>
              <span class="tooltip">Fornecedor</span>
            </li>
              <li>
              <a href="logout.php" onclick="logout()">
                <i class="bx bxs-log-out"></i>
                <span class="nav-item">logout</span>
              </a>
              <span class="tooltip">logout</span>
            </li>
          </ul>
        </ul>
      </div>
    </nav>
  </div>
  <main>
    <div class="main-content">
      <div class="container">
        <table>
          <tr>
            <td>
              <div class="card" id="meuCard1">
                <h3>Lista de Peças Existentes <button class="botao-card" onclick="abrefecha('conteudo1', 'meuCard1')">↓</button></h3>
                <div class="conteudo-card" id="conteudo1">
                  <?php
                  if ($result->num_rows > 0) {
                    echo "<table border='1' width='100%'>";
                    echo "<tr><th>Codigo da Peca</th><th>Nome da Peca</th><th>Quantidade em Estoque</th><th>Custo</th><th>Fornecedor</th><th>Lote</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["estoque"] . "</td><td>" . $row["preco"] . "</td><td>" . $row["fornecedor"] . "</td><td>" . $row["lote"] . "</td></tr>";
                    }
                    echo "</table>";
                  } else {
                    echo "Nenhuma peça registrada.";
                  }
                  ?>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="card" id="meuCard2">
                <h3>Cadastro de Pecas<button class="botao-card" onclick="abrefecha('conteudo2', 'meuCard2')">↓</button></h3>
                <div class="conteudo-card" id="conteudo2">
                  <div class="cadastro-container">
                    <form action="Peca_Cadastro.php" method="post">
                      <div class="form-group">
                        <label for="nome">Nome da peça:</label>
                        <input type="text" id="nome" name="nome" required>
                      </div>
                      <div class="form-group">
                        <label for="preco">Preço da peça:</label>
                        <input type="number" id="preco" name="preco" required>
                      </div>
                      <div class="form-group">
                        <label for="estoque">Quantidade para estoque:</label>
                        <input type="number" id="estoque" name="estoque" required>
                      </div>
                      <div class="form-group">
                        <label for="fornecedor_id">Id do fornecedor:</label>
                        <input type="number" id="fornecedor_id" name="fornecedor_id" required>
                      </div>
                      <div class="form-group">
                        <label for="lote">Número do Lote:</label>
                        <input type="number" id="lote" name="lote" required>
                      </div>
                      <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                      <button type="submit" class="btn">Cadastrar Peça</button>
                    </form>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome']) && isset($_POST['token'])) {
                      if (!hash_equals($_SESSION['token'], $_POST['token'])) {
                        die('');
                      }

                      $nome = $_POST['nome'];
                      $preco = $_POST['preco'];
                      $estoque = $_POST['estoque'];
                      $fornecedor_id = $_POST['fornecedor_id'];
                      $lote = $_POST['lote'];

                      $insere = "INSERT INTO pecas (nome, preco, estoque, Fk_Fornecedor, lote) VALUES ('$nome', '$preco', '$estoque', '$fornecedor_id', '$lote')";
                      if (mysqli_query($conn, $insere)) {
                        unset($_SESSION['token']); 
                        header('Location:Peca_Cadastro.php' . $_SERVER['PHP_SELF'] . '?status=success');
                        exit();
                      } else {
                        echo "Erro ao cadastrar peça: " . mysqli_error($conn);
                      }
                    }

                    if (isset($_GET['status']) && $_GET['status'] === 'success') {
                      echo "<p>Peça cadastrada com sucesso.</p>";
                      $_SESSION['token'] = bin2hex(random_bytes(32));
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="card" id="meuCard3">
                <h3>Exclusão de Pecas<button class="botao-card" onclick="abrefecha('conteudo3', 'meuCard3')">↓</button></h3>
                <div class="conteudo-card" id="conteudo3">
                  <form action="Peca_Cadastro.php" method="post">
                    <div class="form-group">
                      <label for="peca_id">Id da Peça:</label>
                      <input type="number" id="peca_id" name="peca_id" required>
                    </div>
                    <button type="submit" class="btn" name="DL_peca" value="DL_peca1">Deletar peça</button>
                  </form>
                  <?php
                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['DL_peca'])) {
                    if (isset($_POST['peca_id'])) {
                      $peca_id = $_POST['peca_id'];

                      $deleta = "DELETE FROM pecas WHERE id = '$peca_id'";
                      if (mysqli_query($conn, $deleta)) {
                        echo "<p>Peça deletada com sucesso.</p>";
                      } else {
                        echo "Erro ao deletar peça: " . mysqli_error($conn);
                      }
                    }
                  }
                  ?>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </main>
</body>

</html>
