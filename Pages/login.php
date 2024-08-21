<?php
include('../Conn/BDConn.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Check if login or senha is empty.
  if (empty($_POST['login']) || empty($_POST['senha'])) {
    // Redirect to login page if any field is empty.
    header('location: login.php');
    exit(); // Terminate the script to ensure nothing else is executed.
  }

  // Sanitize user input.
  $login = mysqli_real_escape_string($conn, $_POST['login']);
  $senha = $_POST['senha'];

  // Fetch the user from the database.
  $query = "SELECT * FROM `usuarios` WHERE `nome_usuario` = '$login'";
  $result = mysqli_query($conn, $query);

  // Verify user and password.
  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($senha, $user['senha_usuario'])) {
      // Start user session.
      $_SESSION['login'] = $login;
      header('location: Home.php');
      exit(); // Terminate after redirection.
    }
  }

  // If login fails, unset session and redirect to login page.
  unset($_SESSION['login']);
  header('location: login.php');
  exit(); // Terminate after redirection.
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="http


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="../imgs/logo.png" type="image/x-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="../scripts/logout_Alert.js"></script>
  <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
  <form method="post" action="login.php" id="formlogin" name="formlogin">
    <fieldset id="fie">
      <legend>LOGIN</legend><br />
      <label>NOME : </label>
      <input type="text" name="login" id="login" /><br />
      <label>SENHA :</label>
      <input type="password" name="senha" id="senha" /><br />
      <input type="submit" value="LOGAR" />
    </fieldset>
  </form>
</body>
</html>


