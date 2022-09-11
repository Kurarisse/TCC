<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TÍTULO DA PÁGINA -->
    <title>Site de vendas Fernanda ZD Modas - Cadastro de Produtos</title>

    <!-- IMPORTAÇÃO DE FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

    <!-- IMPORTAÇÃO DE CSS E SCRIPTS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <!-- INÍCIO CORPO -->
    <div id="corpo">

        <!-- INÍCIO CABEÇALHO -->
        <header class="cabecalho">

            <!-- LOGO -->
            <a href="index.php"><img  class="logo" src="img/logo_logo.png" alt="Imagem de logo" title="Imagem de logo"></a>
            <!-- FIM LOGO -->

            <!-- INÍCIO MENU -->
            <nav id="nav">
                <button id="btnCelular" aria-label="Abrir menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false"><img src="img/menu.png" alt="Imagem menu hambúrguer" title="Menu de links das páginas"><span>Menu</span></button>

                    <ul class="menu" role="menu">
                        <li class="hover"><a href="index.php" title="Link para a página de início">Home</a></li>
                        <li class="hover"><a href="lingeries.php" title="Link para a página de produtos de lingerie">Lingeries</a></li>
                        <li class="hover"><a href="sexShop.php" title="Link para a página de produtos de sex shop">Sex shop</a></li>
                        <li class="hover"><a href="cosmeticos.php" title="Link para a página de produtos de cosméticos">Cosméticos</a></li>
                        <li class="hover"><a href="sobre.php" title="Link para a página com informações sobre a empresa">Sobre nós</a></li>                    
                        <li class="hover"><a href="cadastro.php" title="Link para a página de cadastro">Cadastro</a></li>
                        <li class="hover"><a href="insereProduto.php" title="Link para a página de cadastro de produtos">Cadastro de produtos</a></li>
                        <li class="menu_hamburguer">
                        <li class="hover"><a href="carrinho.php"><img src="img/carrinho.png" alt="Imagem de um carrinho de compras" title="Carrinho de compras"><span>Carrinho</span></a></li>
                        <li class="hover"><a href="perfil.php"><img src="img/perfil.png" alt="Imagem de um boneco de perfil" title="Boneco de perfil"><span>Perfil</span></a></li>                          
                        <!-- ADICIONAR FUNÇÃO ONCLICK -->
                        <li class="hover"><a href=""><img src="img/sair.png" alt="Imagem de símbolo para sair da página" title="Símbolo para sair da página"><span>Sair</span></a></li>
                        </li> 
                    </ul>
            </nav>
            <!-- FIM MENU -->

        </header>
        <!-- FIM CABEÇALHO -->

    <!-- BOTÃO DE ACESSIBILIDADE -->
    <!-- ver com a Giu o que colocar no mapa de acessibilidade -->
    <ul id="acessibilidade">
        <img src="img/acessibilidade.png" alt="Imagem de símbolo de acessibilidade" title="Menu de itens para acessibilidade">
        <ul class="acessibilidade">
            <li>
                <label class="switch" title="Adaptação para daltonismo">
                    <input type="checkbox" name="daltonico" id="daltonico">
                        <span class="slider round"></span>
                </label><span class="daltonico">Adaptação para daltônicos</span>
            </li>
            <li>
                <label class="switch" title="Adaptação para letras maiores">
                <input type="checkbox" name="tamanho_fonte" id="tamanho_fonte">
                    <span class="slider round"></span>
            </label><span class="tamanho_fonte">Aumento de fonte</span>
        </li>
        </ul>
    </ul>
    <!-- FIM BOTÃO ACESSIBILIDADE -->

            <!-- INÍCIO DISPONIBILIZAÇÃO DE PRODUTOS PRINCIPAIS -->
            <div class="add_produto">

                <h2 class="titulo">Cadastro de produtos</h2>
                <div class="centro">
                
                    <div class="produto_insere">

                        <div class="info">
                            <img src="img/product.png" alt="Imagem do produto" width="200px"><br>
                            <input type="file" name="imagem_produto" id="imagem_produto">

                            <div class="info2">
                            <input type="text" name="nome_produto" id="nome_produto" placeholder="Nome do produto"><br>
                            <select name="codigo_produto" id="codigo_produto">
                                <option value="codigo_produto">Código do produto</option>
                                <option value="001">001</option>
                                <option value="002">002</option>
                                <option value="003">003</option>
                                <option value="004">004</option>
                                <option value="005">005</option>
                                <option value="006">006</option>
                                <option value="007">007</option>
                                <option value="008">008</option>
                                <option value="009">009</option>
                                <option value="010">010</option>
                            </select><br>
                            <input type="number" name="quantidade_entrada" id="quantidade_entrada" placeholder="Quantidade de entrada"><br>
                            <select name="fabricante" id="fabricante">
                                <option value="fabricante">Fabricante</option>
                                <option value="cea">C&A</option>
                                <option value="renner">Renner</option>
                                <option value="zara">Zara</option>
                                <option value="hem">H&M</option>
                                <option value="lupo">Lupo</option>
                            </select><br>
                            <textarea id="desc_produto" name="desc_produto" rows="10" cols="30">Descrição do produto</textarea><br>
                            <input type="button" name="cadastrar_produto" id="cadastrar_produto" value="Cadastrar produto">
                        </div>
                        </div>
                    </div><br>

                    <div class="comentarios">
                        
                        <h3>Comentários:</h3>

                        <div class="clientela">
                            <p><img src="img/perfil.png" alt="Imagem de perfil do cliente" style="margin-right:10px;">Identificação do cliente<br>
                            Ótima qualidade! Adorei!!!<br>
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação"></p>
                        </div>

                        <div class="clientela">
                            <p><img src="img/perfil.png" alt="Imagem de perfil do cliente" style="margin-right:10px;">Identificação do cliente<br>
                            Ótima qualidade! Adorei!!!<br>
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação"></p>
                        </div>

                        <div class="clientela">
                            <p><img src="img/perfil.png" alt="Imagem de perfil do cliente" style="margin-right:10px;">Identificação do cliente<br>
                            Ótima qualidade! Adorei!!!<br>
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação"></p>
                        </div>

                        <div class="clientela">
                            <p><img src="img/perfil.png" alt="Imagem de perfil do cliente" style="margin-right:10px;">Identificação do cliente<br>
                            Ótima qualidade! Adorei!!!<br>
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação">
                            <img src="img/estrelinha.png" width="25px" alt="Estrelas de avaliação"></p>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- FIM DISPONIBILIZAÇÃO DE PRODUTOS PRINCIPAIS -->

        </div>
        <!-- FIM CORPO -->

        <!-- RODAPÉ -->
        <div id="footer">
            <p>
                <a href="index.html">Home</a>
                <a href="lingeries.html">Lingeries</a>
                <a href="sexShop.html">Sex shop</a>
                <a href="cosmeticos.html">Cosméticos</a>
                <a href="sobre.html">Sobre nós</a>
            </p>
            <p id="reserva">&copy;Todos os direitos reservados</p>
        </div>
        <!-- FIM RODAPÉ -->

        <!-- IMPORTAÇÃO DE SCRIPTS -->
        <script src="js/script.js"></script>
</body>
</html>