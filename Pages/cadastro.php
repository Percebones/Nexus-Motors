<html>

<head>
  <title>Cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..\CSS\Cadastro.css">
  <link rel="stylesheet" href="..\CSS\Modelo.css">
  <?php include ('..\Conn\BDConn.php'); ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <header>

    <h1 class="bx bxl-codepen"> Nexus Motors</h1>
    <nav>

    </nav>
  </header>
 
    <div class="cadastro-container">
    <h2>Cadastro</h2>
    <form id="cadastroForm">
      <div class="form-group">
        <label for="nome">Apelido:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="email">Confirmacao de E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <label for="senha">Confirmacao de Senha:</label>
        <input type="password" id="senha" name="senha" required>
      </div>
      <button type="submit" class="btn-cadastro">Cadastrar</button>
      <a href="login.php">Ja tem uma conta?</a>
    </form>
  </div>
     
    </div>
  </div>
  





  <?php
  $conn->close();
  ?>


  <footer>
    <p>Nexus Motors &copy; 2024</p>
  </footer>
</body>

</html>