<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=search" />
    <link rel="stylesheet" href="tela-projeto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Página da ONG</title>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <div class="container">
            <div class="logo">
                <h1>LOGO</h1>
            </div>
            <nav id="nav-bar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Ongs</a></li>
                    <li><a href="#">Projetos</a></li>
                    <li><a href="#">Notícias</a></li>
                </ul>
            </nav>
            <div class="btn-login">
                <button class="btn" id="btn-login">LOGIN</button>
            </div>
        </div>
    </header>

    <!-- Conteúdo Principal -->
    <div id="principal">
        <div class="principal-esq">
            <!-- Carrossel -->
            <div class="carousel">
                <div class="carousel-imgs">
                    <img src="imgs/ambiental.png" alt="" class="carousel-item">
                    <img src="imgs/ong.png" alt="" class="carousel-item">
                    <img src="imgs/projeto.png" alt="" class="carousel-item">
                </div>
            </div>

            <!-- Informações da ONG -->
            <div class="info-ong">
                <div class="conteiner-info">
                    <div class="header-nome-ong">
                        <h3>NOME DA ONG</h3>
                        <p>TIPO DA ONG</p>
                    </div>
                    <p class="arrecadacao">Arrecadado: R$ 50.000</p>
                    <p>87 Doações Recebidas</p>
                    <div class="btn-favoritos-compartilhar">
                        <button class="icon-coracao"><img src="imgs/love.png" alt="Icon de coração"></button>
                        <button class="icon-compartilhar"><img src="imgs/share.png" alt="Icon de compartilhar"></button>
                    </div>
                    <div class="btn-info-ong">
                        <button class="doacao">Fazer uma doação</button>
                        <button class="voluntario">Tornar-se Voluntário</button>
                    </div>
                </div>
            </div>

            <!-- Doadores -->
            <div class="doadores">
                <div class="header-conteiner">
                    <img src="imgs/money.png" alt="Icon de cédulas de dinheiro">
                    <h3>Doadores</h3>
                </div>
                <div class="doador">
                    <div class="icon-name">
                        <h4>J</h4>
                    </div>
                    <p>João</p>
                    <p>R$ 102</p>
                </div>
                <div class="doador">
                    <div class="icon-name">
                        <h4>Z</h4>
                    </div>
                    <p>Zoio</p>
                    <p>R$ 102</p>
                </div>
                <div class="doador">
                    <div class="icon-name">
                        <h4>M</h4>
                    </div>
                    <p>Maria</p>
                    <p>R$ 102</p>
                </div>
                <div class="doador">
                    <div class="icon-name">
                        <h4>A</h4>
                    </div>
                    <p>Antonia</p>
                    <p>R$ 102</p>
                </div>
                <div class="doador">
                    <div class="icon-name">
                        <h4>P</h4>
                    </div>
                    <p>Pedro</p>
                    <p>R$ 102</p>
                </div>
                <button class="ver-todos">VER TODOS</button>
            </div>

            <!-- Sobre a ONG -->
            <div class="sobre">
                <div class="header-conteiner">
                    <img src="imgs/interrogaction.png" alt="Icon de ponto de interrogação">
                    <h3>Sobre</h3>
                </div>
                <p class="info-sobre">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium officiis
                    incidunt magni et recusandae ipsam, pariatur hic illo in nesciunt consectetur, vel obcaecati maiores
                    a dolorum nam, odio tempora ipsa!</p>
                <p class="data-criacao"><strong>ONG criada em:</strong> 12/04/2023</p>
            </div>

            <!-- Voluntários -->
            <div class="voluntarios">
                <div class="header-conteiner">
                    <img src="imgs/hug.png" alt="Icon de abraço">
                    <h3>Voluntários</h3>
                </div>
                <div class="voluntario">
                    <div class="icon-name">
                        <h4>M</h4>
                    </div>
                    <div class="info-voluntario">
                        <h3>Marcos</h3>
                        <p>Apoiando o <strong>Projeto tal</strong></p>
                    </div>
                </div>
                <div class="voluntario">
                    <div class="icon-name">
                        <h4>J</h4>
                    </div>
                    <div class="info-voluntario">
                        <h3>João</h3>
                        <p>Apoiando o <strong>Projeto tal</strong></p>
                    </div>
                </div>
                <div class="voluntario">
                    <div class="icon-name">
                        <h4>C</h4>
                    </div>
                    <div class="info-voluntario">
                        <h3>Célia</h3>
                        <p>Apoiando o <strong>Projeto tal</strong></p>
                    </div>
                </div>
                <div class="voluntario">
                    <div class="icon-name">
                        <h4>E</h4>
                    </div>
                    <div class="info-voluntario">
                        <h3>Eren</h3>
                        <p>Apoiando o <strong>Projeto tal</strong></p>
                    </div>
                </div>
                <div class="voluntario">
                    <div class="icon-name">
                        <h4>L</h4>
                    </div>
                    <div class="info-voluntario">
                        <h3>Levi</h3>
                        <p>Apoiando o <strong>Projeto tal</strong></p>
                    </div>
                </div>
                <button class="ver-todos">VER TODOS</button>
            </div>

            <!-- Projetos -->
            <div class="projetos">
                <div class="header-conteiner">
                    <img src="imgs/lamp.png" alt="Icon de Lampada">
                    <h3>Projetos</h3>
                </div>
                <div class="projeto">
                    <img src="" alt="Imagem do projeto da ong">
                    <div class="info-projeto">
                        <h4 class="nome-projeto">Nome do Projeto</h4>
                        <div class="progress">
                            <p>76% <progress value="76" max="100"></progress></p>
                        </div>
                        <p>24 Doações Recebidas</p>
                    </div>
                </div>
                <div class="projeto">
                    <img src="" alt="Imagem do projeto da ong">
                    <div class="info-projeto">
                        <h4 class="nome-projeto">Nome do Projeto</h4>
                        <div class="progress">
                            <p>40% <progress value="40" max="100"></progress></p>
                        </div>
                        <p>24 Doações Recebidas</p>
                    </div>
                </div>
                <div class="projeto">
                    <img src="" alt="Imagem do projeto da ong">
                    <div class="info-projeto">
                        <h4 class="nome-projeto">Nome do Projeto</h4>
                        <div class="progress">
                            <p>60% <progress value="60" max="100"></progress></p>
                        </div>
                        <p>24 Doações Recebidas</p>
                    </div>
                </div>
                <button class="ver-todos">VER TODOS</button>
            </div>

            <!-- Notícias -->
            <div class="noticias">
                <div class="header-conteiner">
                    <img src="imgs/noise.png" alt="Icon de Autofalante">
                    <h3>Notícias</h3>
                </div>
                <div class="conteiner-noticia">
                    <div class="info-noticia">
                        <h4>Titulo da Matéria</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum accusamus eum mollitia
                            recusandae sed repellat exercitationem quasi? Libero eius impedit excepturi adipisci autem
                            mollitia totam, reiciendis laudantium. At, neque obcaecati.</p>
                        <div>
                            <p>Por: ONG Tal</p>
                            <button>Leia Mais</button>
                        </div>
                    </div>
                    <img class="img-noticia" src="" alt="Imagem da noticias">
                </div>
                <div class="conteiner-noticia">
                    <div class="info-noticia">
                        <h4>Titulo da Matéria</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum accusamus eum mollitia
                            recusandae sed repellat exercitationem quasi? Libero eius impedit excepturi adipisci autem
                            mollitia totam, reiciendis laudantium. At, neque obcaecati.</p>
                        <div>
                            <p>Por: ONG Tal</p>
                            <button>Leia Mais</button>
                        </div>
                    </div>
                    <img class="img-noticia" src="" alt="Imagem da noticias">
                </div>
            </div>

            <!-- Contato -->
            <div class="contato">
                <div class="header-conteiner">
                    <img src="imgs/noise.png" alt="">
                    <h3>Contato</h3>
                </div>
                <p class="conteudo">Entre em contato com os responsáveis dessa ONG para mais informações</p>
                <div class="btns-contato">
                    <button class="btn-telefone">
                        <img class="icon-telephone" src="imgs/telephone.png" alt="Icon de telefone">
                        <p>Telefone: <strong>(00) 00000-0000</strong></p>
                    </button>
                    <div class="btns-email-retorno">
                        <button class="btn-email">
                            <img class="icon-envelope" src="imgs/email.png" alt="Icon de envelope">
                            <p>Email: <strong>ong@projeto.com</strong></p>
                        </button>
                        <button class="btn-seta" onclick="voltarParaTelaInicial()">
                            <img src="imgs/up-arrow.png" alt="Up Arrow">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup de Login -->
    <div id="fundo-popup">
        <div class="popup">
            <div class="msg">
                <p class="linha1">Olá, seja bem-vindo!</p>
                <ul>
                    <li><a href="#">Sou usuário</a></li>
                    <li><a href="#">Sou uma ONG</a></li>
                    <li><a href="#">Sou administrador</a></li>
                </ul>
            </div>
            <img src="imgs/login.png" alt="Ilustração de Login">
        </div>
    </div>

    <script src="popup.js"></script>
</body>

</html>