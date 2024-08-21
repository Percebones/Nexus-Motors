<!DOCTYPE html>
<html>

<head>
  <title>Administracao de Veiculos</title>
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
    }

    $logado = $_SESSION['login']; 
  $sql = "SELECT carros.id, carros.modelo, carros.valor, carros.ano, carros.estoque_carros,lote, carros.numero_Chassi FROM carros ORDER BY carros.id";
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
                <h3>Lista de Veiculos <button class="botao-card" onclick="abrefecha('conteudo1', 'meuCard1')">↓</button></h3>
                <div class="conteudo-card" id="conteudo1">
                  <?php
                  if ($result->num_rows > 0) {
                    echo "<table border='1' width='100%'>";
                    echo "<tr><th>Codigo do veiculo</th><th>Nome do veiculo</th><th>ano</th><th>Quantidade em Estoque</th><th>Custo</th></th><th>Numero Chassi</th><th>Lote das Pecas</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["id"] . "</td><td>" . $row["modelo"] . "</td><td>" . $row["ano"] . "</td><td>" . $row["estoque_carros"] . "</td><td>" . $row["valor"] . "</td><td>". $row["numero_Chassi"] . "</td><td>". $row["lote"] . "</td></tr>";
                    }
                    echo "</table>";
                  } else {
                    echo "Nenhum veículo registrado.";
                  }
                  ?>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="card" id="meuCard2">
                <h3>Cadastro de Veiculos<button class="botao-card" onclick="abrefecha('conteudo2', 'meuCard2')">↓</button></h3>
                <div class="conteudo-card" id="conteudo2">
                  <form action="Veiculos.php" method="post">
                    <div class="form-group">
                      <label for="preco">Preço:</label>
                      <input type="number" id="preco" name="preco" required min="10000">
                    </div>
                    <div class="form-group">
                      <label for="modelo">Modelo:</label>
                      <input type="text" id="modelo" name="modelo" required>
                    </div>
                    <div class="form-group">
                      <label for="numero_Chassi">Numero do Chassi:</label>
                      <input type="text" id="numero_Chassi" name="numero_Chassi" required pattern="[0-9]{12}" minlength="12" maxlength="12">
                    </div>
                    <div class="form-group">
                      <label for="ano">Ano de Fabricação:</label>
                      <input type="text" id="ano" name="ano" required>
                    </div>
                    <div class="form-group">
                      <label for="estoque_carros">Quantide de estoque:</label>
                      <input type="number" id="estoque_carros" name="estoque_carros" required>
                    </div>
                    <div class="form-group">
                      <label for="estoque_carros">Lote das Pecas:</label>
                      <input type="number" id="estoque_carros" name="lote" required>
                    </div>
                    <button type="submit" class="btn">Cadastrar Veículo</button>
                  </form>
                  <?php
                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modelo']) && !isset($_POST['DL_veiculo'])) {
                    $preco = $_POST['preco'];
                    $modelo = $_POST['modelo'];
                    $numero_Chassi = $_POST['numero_Chassi'];
                    $ano = $_POST['ano'];
                    $estoque_carros = $_POST['estoque_carros'];
                    $lote = $_POST['lote'];
                    $insere = "INSERT INTO carros (valor, modelo, numero_Chassi, ano, estoque_carros,lote) VALUES ('$preco', '$modelo', '$numero_Chassi', '$ano', '$estoque_carros','$lote')";
                    if (mysqli_query($conn, $insere)) {
                      echo "Veículo cadastrado com sucesso.";
               
                     
                    } else {
                      echo "Erro ao cadastrar veículo: " . mysqli_error($conn);
                      header("Location: veiculos.php?success=1");
                    }
                  }
                  
                  ?>
                </div>
              </div>
              <div class="card" id="meuCard3">
                <h3>Exclusão de Veiculo<button class="botao-card" onclick="abrefecha('conteudo3', 'meuCard3')">↓</button></h3>
                <div class="conteudo-card" id="conteudo3">
                  <form action="Veiculos.php" method="post">
                    <div class="form-group">
                      <label for="veiculo_id">ID do Veículo:</label>
                      <input type="number" id="veiculo_id" name="veiculo_id" required>
                    </div>
                    <button type="submit" class="btn" name="DL_veiculo" value="DL_veiculo1">Deletar Veículo</button>
                  </form>
                  <?php
                  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['DL_veiculo'])) {
                    if (isset($_POST['veiculo_id'])) {
                      $veiculo_id = $_POST['veiculo_id'];

                      $deleta = "DELETE FROM carros WHERE id='$veiculo_id'";
                      if (mysqli_query($conn, $deleta)) {
                        echo "Veículo deletado com sucesso.";
                        header("Location: compra.php?success=1");
                            exit();
                      } else {
                        echo "Erro ao deletar veículo: " . mysqli_error($conn);
                        header("Location: compra.php?success=1");
                            exit();
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

  <?php $conn->close(); ?>

  <footer>
    <div id="footer_content" class="footer-content">
      <div id="footer_contacts" class="footer-contacts">
        <div id="footer_social_media" class="footer-social-media">
          <a href="#" class="footer-link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="#" class="footer-link" id="x">
            <i class="fa-brands fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/" class="footer-link" id="facebook">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <h1>Midias Sociais</h1>
        </div>
      </div>
      <div id="footer_contacts" class="footer-contacts">
        <div id="footer_social_media" class="footer-social-media">
          <a href="#" class="footer-link" id="amazon">
            <i class="fa-brands fa-amazon"></i>
          </a>
          <a href="#" class="footer-link" id="git">
            <i class="fa-brands fa-github"></i>
          </a>
          <a href="https://www.facebook.com/" class="footer-link" id="google">
            <i class="fa-brands fa-google"></i>
          </a>
          <h1>Parceiros</h1>
        </div>
      </div>
      <div id="footer_contacts" class="footer-contacts"></div>
      <div id="footer_contacts" class="footer-contacts">
        <div id="footer_social_media" class="footer-social-media">
          <a href="#" class="footer-link" id="instagram">
            <i class="fa-solid fa-envelope"></i>
          </a>
          <a href="#" class="footer-link" id="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
          <a href="https://www.facebook.com/" class="footer-link" id="facebook">
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <h1>Contatos</h1>
        </div>
      </div>
    </div>
    <div id="footer_copyright">
      &#169; 2024 Nexus Motors all rights reserved
    </div>
  </footer>

</body>

</html>
