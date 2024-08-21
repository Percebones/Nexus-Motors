<!DOCTYPE html>
<html>

<head>
  <title>Fornecedores</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..\CSS\Modelo.css">
  <link rel="stylesheet" href="..\CSS\Modelo2.css">
  <link rel="stylesheet" href="..\CSS\Home.css">
  <link rel="stylesheet" href="..\CSS\peca_Cadastro.css">
  <link rel="stylesheet" href="..\CSS\cards.css">
  <script src="..\scripts\card.js"></script>
  <?php include('..\Conn\BDConn.php'); ?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <?php
    session_start();
    if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
      header('location:visitante.php');
    } else {
      
    }

    $logado = $_SESSION['login']; 
  $sql = "SELECT fornecedores.id, fornecedores.nome, fornecedores.CNPJ, fornecedores.endereco, fornecedores.email FROM fornecedores ORDER BY fornecedores.id ";
  $result = $conn->query($sql);
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
                    <ul>
                        <div class="topo">
                        </div>

                        <ul>
                            <li>
                                <a href="Home.php">
                                    <i class="bx bxs-home"></i>
                                    <span class="nav-item">Home</span>
                                </a>
                                <span class="tooltip">Home</span>
                            </li>

            <li>
            <a href="peca_Cadastro.php">
          <i class="bx bxs-wrench"></i>
          <span class="nav-item">Peca</span>
        </a>
              <span class="tooltip">Pecas</span>
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
                <h3>Lista de Fornecedores<button class="botao-card" onclick="abrefecha('conteudo1', 'meuCard1')">↓</button>
                </h3>
                <div class="conteudo-card" id="conteudo1">
                  <?php
                  if ($result->num_rows > 0) {
                    echo "<table border = 1 width = 100%>";
                    echo "<h2></h2>";
                     echo "</tr><th>Codigo do fornecedor</th><th>Nome do fornecedor</th><th>CNPJ</th><th>endereco</th><th>email</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["CNPJ"] . "</td><td>" . $row["endereco"] . "</td><td>" . $row["email"] . "</td></tr>";
                    }
                  } else {
                    echo "Nenhuma venda registrada esta semana.";
                  }
                  echo '</table>';
                  ?>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="card" id="meuCard2">
                <h3>Cadastro de Fornecedores<button class="botao-card" onclick="abrefecha('conteudo2', 'meuCard2')">↓</button>
                </h3>
                <div class="conteudo-card" id="conteudo2">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="cnpj">CNPJ:</label>
                      <input type="text" id="cnpj" name="cnpj" required>
                    </div>
                    <div class="form-group">
                      <label for="nome">Nome Fornecedor:</label>
                      <input type="text" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="text" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="endereco">Endereço:</label>
                      <input type="text" id="endereco" name="endereco" required>
                    </div>
                    <button type="submit" class="btn">Fornecedor</button>
                  </form>
                  <?php
              

                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
                    $cnpj = $_POST['cnpj'];
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $endereco = $_POST['endereco']; 

                    $insere = "INSERT INTO fornecedores (cnpj, nome, email, endereco) VALUES ('$cnpj', '$nome', '$email', '$endereco')"; // Corrigimos aqui para incluir o endereço
                    if (mysqli_query($conn, $insere)) {
                      echo "Fornecedor cadastrado com sucesso."; 

                    } else {
                      echo "Erro ao cadastrar fornecedor: " . mysqli_error($conn); 
                    }
                  }
                 
                  ?>

                  
                </div>
              </div>
              <div class="card" id="meuCard3">
                <h3>Exclusão de Fornecedor<button class="botao-card" onclick="abrefecha('conteudo3', 'meuCard3')">↓</button>
                </h3>
                <div class="conteudo-card" id="conteudo3">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="cnpj">id fornecedor:</label>
                      <input type="text" id="id" name="id_del" required>
                    </div>
                   
                    <button type="submit" class="btn" name="DL_fornecedor" value="DL_fornecedor1">Deletar Fornecedor</button>
                  </form>

                  <?php
                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['DL_fornecedor'])) {
                    $id = $_POST['id_del'];
                  

                    $deleta = "DELETE FROM fornecedores WHERE id='$id'"; 
                    if (mysqli_query($conn, $deleta)) {
                      echo "Fornecedor excluído com sucesso."; 
                      header("Location:Fornecedor.php");
                      exit();
                      
                    } else {
                      echo "Erro ao excluir fornecedor: " . mysqli_error($conn); 
                    }
                  }
                  ?>

                </div>
              </div>
            </td>
          </tr>
          
          </div>
        </td>
      </tr>
    </table>
  </div>
</div>
<main>


  <?php
  $conn->close();
  ?>

  <footer>
  </footer>

</body>

</html>
