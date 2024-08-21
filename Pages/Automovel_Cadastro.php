<html>

<head>
  <title>Relatorio de Vendas Semanal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..\CSS\Relatorio.css">
  <link rel="stylesheet" href="..\CSS\Modelo.css">
  <?php include('..\Conn\BDConn.php'); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
$sql = "SELECT carros.modelo, vendas.quantidade, vendas.data, vendas.quantidade * carros.valor as valor
        FROM vendas
        INNER JOIN carros ON vendas.carro_id = carros.id
        WHERE WEEK(vendas.data) = WEEK(NOW())
        ORDER BY vendas.data DESC";

$result = $conn->query($sql);
?>

<body>
  <header>

    <h1 class="bx bxl-codepen"> Nexus Motors</h1>
    <nav>

    </nav>
  </header>
  <div class="barra_lateral">
    <div class="topo">
      <div class="logo">
        <i class="bx bxl-codepen"></i>
        <span>Nexus Motors</span>
      </div>
      <i class="bx bx-menu" id='btn'></i>
    </div>
    <div class="usuario">
      <a href="Perfil.php">
        <img src='..\imgs\usuario.png' alt='eu' class="imagem-usuario">
      </a>
      <div>
        <p class="bold">Thiago P. Silva</p>
        <p>Admin</p>
      </div>
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
        <a href="fornecedor.php">
          <i class="fa-solid fa-truck-fast"></i>
          <span class="nav-item">Fornecedor</span>
        </a>
        <span class="tooltip">Fornecedor</span>
      </li>
      <li>
        <a href="Veiculos.php">
          <i class="bx bxs-car"></i>
          <span class="nav-item">Automovel</span>
        </a>
        <span class="tooltip">Automoveis</span>
      </li>
      <li>
        <a href="peca_Cadastro.php">
          <i class="bx bxs-wrench"></i>
          <span class="nav-item">Peca</span>
        </a>
        <span class="tooltip">Peca</span>
      </li>
      <li>
        <a href="Automovel_Cadastro.php">
        <i class="fa-solid fa-comments-dollar"></i>
          <span class="nav-item">Venda</span>
        </a>
        <span class="tooltip">Venda</span>
      </li>
      
      <li>
        <a href="">
          <i class="bx bxs-log-out"></i>
          <span class="nav-item">logout</span>
        </a>
        <span class="tooltip">logout</span>
      </li>
    </ul>
  </div>
  </div>
  <main>


    <div class="container">











    </div>

    <?php
    $conn->close();
    ?>

  </main>
  <footer>
    <p>Nexus Motors &copy; 2024</p>
  </footer>
</body>

</html>