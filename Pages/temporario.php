<html>

<head>
    <title>Vendas</title>
    <link rel="stylesheet" href="..\CSS\Modelo.css">
    <link rel="stylesheet" href="..\CSS\cards.css">
    <script src="..\scripts\card.js"></script>
    <?php include ('..\Conn\BDConn.php'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <header>

        <h1 class="bx bxl-codepen" id="Fabrica">Nexus Motors</h1>
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
                <a href="Perfil.php">
                    <p class="bold">Thiago P. Silva</p>
                </a>
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
                <a href="Relatorio_De_Vendas.php">
                    <i class="bx bxs-report"></i>
                    <span class="nav-item">Relatorio</span>
                </a>
                <span class="tooltip">Relatorio</span>
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
    </div>
    <main>
        <div class="container">
            <table>
                <tr>
                    <td>
                        <div class="card" id="meuCard1">
                            <h3>Lista de vendas<button class="botao-card"
                                    onclick="abrefecha('conteudo1', 'meuCard1')">↓</button>
                            </h3>
                            <div class="conteudo-card" id="conteudo1">
                                <?php
                               
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="card" id="meuCard2">
                            <h3>Registro de venda<button class="botao-card"
                                    onclick="abrefecha('conteudo2', 'meuCard2')">↓</button>
                            </h3>
                            <div class="conteudo-card" id="conteudo2">
                                <form>
                                    <div class="form-group">
                                        <label for="nome">Codigo de identificacao:</label>
                                        <input type="number" id="id" name="id" required>
                                    </div>
                                    <button type="submit" class="btn-cadastro">Cadastrar</button>
                                </form>
                            </div>
                        </div>
        </div>
        </td>
        </table>

        </div>
        </div>
    </main>
    <footer>
        <p>Nexus Motors &copy; 2024</p>
    </footer>
</body>

</html>