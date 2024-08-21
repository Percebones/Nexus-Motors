<!DOCTYPE html>
<html>

<head>
    <title>Vendas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\CSS\Modelo.css">
    <link rel="stylesheet" href="..\CSS\Modelo2.css">
    <link rel="stylesheet" href="..\CSS\Home.css">
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
  // Very simple query SQL, pois seleciona informações sobre vendas, incluindo o cálculo do valor total da venda e bla bla bla.
  // considerando a quantidade vendida e o valor do carro, através de uma junção interna com a tabela de carros.
  $sql = "SELECT vendas.id, vendas.quantidade, vendas.data, vendas.quantidade * carros.valor as valor,vendas.carro_id
          FROM vendas
          INNER JOIN carros ON vendas.carro_id = carros.id
          ORDER BY vendas.id";

  // Executa a consulta SQL no banco de dados e armazena o resultado na variável ali V << 
  $result = $conn->query($sql); // aqui ó
?>

    </nav>
    <div class="msb" id="msb">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <div class="brand-wrapper">
                    <div class="brand-name-wrapper">

                        <h1 class="Marca" href="#">
                            <i class="bx bxl-codepen"></i>
                            <span>Nexus Motors</span>
                        </h1>
                        </a>
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
                                <h3>Lista de vendas<button class="botao-card" onclick="abrefecha('conteudo1', 'meuCard1')">↓</button>
                                </h3>
                                <div class="conteudo-card" id="conteudo1">
                                <?php
    while ($coluna = mysqli_fetch_array($result)) {//você pode acessar os valores dessas colunas tanto pelo seu índice numérico e tbm se n tiver mais linha é null então.
      if ($result->num_rows > 0) {
                                    echo "<table border = 1 width = 100%>"; // CSS improvisado< V V V.
                                    echo "<h2></h2>";
                                    echo "</tr><th>id vendas</th><th>id carro</th><th>Quantidade de vendas</th></th><th>Data</th><th>Valor</th></tr>";
    while ($row = $result->fetch_assoc()) { // Só percorre sobre as linhas de um conjunto de resultados de uma consulta ao banco de dados usando mysqli
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["carro_id"] . "</td><td>" . $row["quantidade"] . "</td><td>" . $row["data"] . "</td><td>" . $row["valor"] . "</td></tr>";
                                    }
                                    } else {
                                    echo "Nenhuma venda registrada esta semana.";
                                    }
                                }
                                echo '</table>';
                                ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
            </div>
        </div>

        </table>

        </div>
        </div>
    </main>

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
            <div id="footer_contacts" class="footer-contacts">

                <div id="footer_social_media" class="footer-social-media">

                </div>

            </div>
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
            &#169
            2024 Nexus Motors all rights reseved
        </div>
    </footer>

</body>

</html>