<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\CSS\login.css">
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
   
        <div class="login-container">
    <h2>Login</h2>
    <form id="loginForm">
      <div class="form-group">
        <label for="username">Username/Email:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="senha" required>
      </div>
      <button type="submit" class="btn-login">Login</button>
      <a href="cadastro.php">Nao tem conta?</a>
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