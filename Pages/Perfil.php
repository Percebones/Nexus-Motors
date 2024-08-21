<!DOCTYPE html>
<html>

<head>
  <title>Perfil</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..\CSS\Modelo.css">
  <link rel="stylesheet" href="..\CSS\Modelo2.css">
  <link rel="stylesheet" href="..\CSS\Home.css">
  <?php include('..\Conn\BDConn.php'); ?>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>




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
            <div class="usuario">
              <a href="Perfil.php">
                <img src='..\imgs\usuario.png' alt='eu' class="imagem-usuario">
              </a>
              <div>
                <p class="bold">Thiago P. Silva</p>
                <p>Cargo: Admin</p>
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
                  <span class="nav-item">Pecas</span>
                </a>
                <span class="tooltip">Pecas</span>
              </li>
              <li>
                <a href="venda.php">
                <i class="fa-solid fa-comments-dollar"></i>
                  <span class="nav-item">Vendas</span>
                </a>
                <span class="tooltip">Vendas</span>
              </li>
              
              <li>
                <a href="" onclick="logout()">
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