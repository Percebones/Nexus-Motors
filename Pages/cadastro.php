<?php
include('../Conn/BDConn.php'); // Inclui o conexão com BD

$erro = ""; // Da go na variável de erro

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se é POST
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['confirm_senha'])) { // Verifica se nenhum dos campos está vazio
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirm_senha = $_POST['confirm_senha'];

        if ($senha !== $confirm_senha) { // Senha e confirmação devem ser iguais, ou algo assim.
            $erro = "A senha e a confirmação de senha não correspondem."; // Msgm de erro
        } else {
            $nome = mysqli_real_escape_string($conn, $nome); // Meio óbvio
            $email = mysqli_real_escape_string($conn, $email); // Meio óbvio pra email tbm.
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT); // Gera o hash da senha, ou seja segurança por criptografia.

            $stmt = $conn->prepare("INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) VALUES (?, ?, ?)"); // Prepara a query sql.
            $stmt->bind_param("sss", $nome, $email, $senha_hash); // Faz o bind, ou seja  associa esses parâmetros aos valores reais que queremos inserir na consulta.

            if ($stmt->execute()) { // Executa a query 
                header("Location: login.php"); // Meio óbvio
                exit; // Encerra essa bagaça
            } else {
                $erro = "Erro ao cadastrar: " . $stmt->error; // Mais erro
            }

            $stmt->close(); // Fecha a declaração que  foi preparada ali ó < ^.
        }
    } else {
        $erro = "Por favor, preencha todos os campos."; // Mais erro
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="icon" href="../imgs/logo.png" type="image/x-icon">
</head>

<body>
    <div class="cadastro-container">
        <h2>Cadastro</h2>
        <hr><br>
        <form id="cadastroForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="form-group">
                <label for="confirm_senha">Confirmação de Senha:</label>
                <input type="password" id="confirm_senha" name="confirm_senha" required>
            </div>
            <button type="submit" class="btn">Cadastrar</button>
            <a href="login.php" class="conta-link">Já tem uma conta?</a>
        </form>
        <?php if ($erro) { ?>
            <div class="Usuário ou senha incorretos"><?php echo $erro; ?></div>
        <?php } ?>
    </div>
</body>
</html>
