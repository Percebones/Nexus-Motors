<!DOCTYPE html>
<html>

<head>
    <title>Nexus Motors</title>
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
    <header>
        <h1 class="bx bxl-codepen"> Nexus Motors</h1>
    </header>

    <style>

    </style>



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
                                <a href="Relatorio_De_Vendas.php">
                                    <i class="fa-solid fa-list-check"></i>
                                    <span class="nav-item">Relatorio</span>
                                </a>
                                <span class="tooltip">Relatorio</span>
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
                                <a href="">
                                    <i class="bx bxs-cog"></i>
                                    <span class="nav-item">Configuracao</span>
                                </a>
                                <span class="tooltip">Configuracao</span>
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
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="..\imgs\linham.png" alt="Fabrica1" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>82 Anos de Comprometimento!</h3>
                                <p>Familia Nexus Motors</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="..\imgs\linham2.jpg" alt="Fabrica2" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Tecnologias Inovadoras!</h3>
                                <p>Familia Nexus Motors</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="..\imgs\linham3.jpg" alt="Fabrica3" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Comprometimento Com a qualidade!</h3>
                                <p>Familia Nexus Motors</p>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img src="..\imgs\1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Peças</h5>
                                <p class="card-text"></p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                                    Saber mais
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Melhores peças</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>

                                            </div>
                                            <div class="modal-body">
                                                <img src="..\imgs\1.jpeg" class="card-img-top" alt="...">
                                                <p>Utilizamos materiais da mais alta qualidade e tecnologia de ponta para garantir que cada componente atenda aos mais rigorosos padrões de desempenho e durabilidade. Desde motores até sistemas de suspensão, cada peça é cuidadosamente projetada para oferecer máximo desempenho e confiabilidade em todas as condições de direção. </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..\imgs\2.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Veiculos</h5>
                                <p class="card-text"></p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                                    Saber mais
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Marcas</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="..\imgs\2.jpeg" class="card-img-top" alt="...">
                                                <p>Cada modelo é meticulosamente projetado e construído para oferecer uma experiência de condução excepcional, combinando estilo e tecnologia de ponta. Dos compactos ágeis aos robustos utilitários, nossa variedade de veículos atende a todas as necessidades e preferências. Com características inovadoras e sistemas avançados de segurança, nossos veículos proporcionam não apenas uma viagem, mas uma jornada memorável e confiável a cada destino.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../imgs/3.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">Marcas</h5>
                                <p class="card-text"></p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                                    Saber mais
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Tecnologia avançada</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="../imgs/3.jpeg" class="card-img-top" alt="...">
                                                <p>Na vanguarda da inovação automotiva, nossa fábrica de carros investe continuamente em tecnologia avançada para impulsionar o futuro da mobilidade. Desde sistemas de propulsão elétrica até inteligência artificial integrada, cada veículo que sai de nossas linhas de produção incorpora os mais recentes avanços tecnológicos. Nossa abordagem centrada no cliente garante que cada inovação não apenas aprimore a experiência de condução, mas também promova a sustentabilidade e a segurança nas estradas.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <h2 class="text-center">Sobre nos</h2>
            <div class="container mt-5">
                <p class="text-center">
                <div class="text-justify">
                    <h1 text-center>Sobre nos</h1>
                    Bem-vindo à Nexus Motors, uma fábrica de automóveis onde a inovação e a qualidade se encontram para
                    criar veículos excepcionais. Desde nossa fundação, nos dedicamos a produzir carros que não apenas
                    atendam, mas superem as expectativas dos nossos clientes.

                    Na Nexus Motors, cada veículo é fruto de um processo meticuloso, onde cada detalhe é cuidadosamente
                    planejado e executado. Nossa equipe de engenheiros e especialistas em automóveis trabalha
                    incansavelmente para garantir que cada carro que sai de nossa fábrica atenda aos mais altos padrões
                    de qualidade e desempenho

                    Estamos comprometidos em oferecer não apenas produtos, mas também uma experiência excepcional aos
                    nossos clientes. Valorizamos a confiança e a satisfação de quem escolhe um veículo Nexus Motors, e
                    estamos sempre prontos para ir além para garantir sua plena satisfação.

                    Estamos ansiosos para recebê-lo em nossa loja e esperamos que você se sinta à vontade em nos visitar.

                    </p>
                </div>
            </div>
            <h2>ㅤ</h2>
            <h2>ㅤ</h2>
            <h2>ㅤ</h2>
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