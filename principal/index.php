<?php
    if (isset($_SESSION['email'])) {
        header("Location: indexPrincipal.php");
    }
?>

<html>

<!DOCTYPE html>
<html>

<head>
    <title>Imobiliária DELTΔ | Início</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="C:\Users\Wilson Farias\Downloads\Nova pasta (2)\Elegant White and Black Real Estate Agent Logo (4).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>
        .carousel {
            width: 90%;
            margin-left: 5%;
        }
    </style>
</head>

<body style="background-color:#22394b; font-family: Minion Pro; color:#e2dbdb;">
    <img class="w3-image" src="../img/background-delta.png" alt="Architecture" width="1357px" height="950px">

    <div class="w3-top">
        <div class="w3-bar w3-black w3-wide w3-padding w3-card w3-left">
            <a href="../login/index.php" class="w3-bar-item w3-button w3-padding-large">Logar</a>
            <a href="../cadastro/index.php" class="w3-bar-item w3-button w3-padding-large">Cadastrar</a>
            <a href="#sobre" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sobre</a>
            <a href="#contato" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contato</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">Imóveis<i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#residencias1" class="w3-bar-item w3-button">Compra de Residências</a>
                    <a href="#residencias2" class="w3-bar-item w3-button">Aluguel de Residências</a>
                    <a href="#apartamentos1" class="w3-bar-item w3-button">Compra de Apartamentos</a>
                    <a href="#apartamentos2" class="w3-bar-item w3-button">Aluguel de Apartamentos</a>
                    <a href="#salas1" class="w3-bar-item w3-button">Compra de Salas Comerciais</a>
                    <a href="#salas2" class="w3-bar-item w3-button">Aluguel Salas Comerciais</a>
                    <a href="#terrenos1" class="w3-bar-item w3-button">Compra Terrenos</a>
                    <a href="#terrenos2" class="w3-bar-item w3-button">Aluguel de Terrenos</a>
                </div>
            </div>
            <a class="w3-padding-large w3-hover-gray w3-hide-small w3-right w3-button"><b>DELTΔ Imobiliária</a>
        </div>
    </div>

    <div class="w3-container w3-content w3-center w3-padding-33" style="max-width:1000px" id="band">
        <h2 id="sobre" ;class="w3-wide">SOBRE NÓS</h2>
        <p class="w3-opacity"><i>DELTΔ IMOBILIÁRIA </i></p>
        <p class="w3-justify"> O mercado imobiliário no Brasil cresce a cada dia, pensando em atender de forma eficiente e
            diferenciada as necessidades de quem quer comprar, vender ou alugar um imóvel, a Imobiliária Superação por meio de
            um trabalho focado na ética, responsabilidade e profissionalismo, busca em primeiro lugar, conhecer e entender as
            necessidades de cada um de nossos clientes.
            A realização de um negócio é consequência de um bom trabalho e, para isso, contamos com profissionais altamente
            qualificados onde treinamento, acompanhamento e direcionamento são constantes.
            A excelência na qualidade do atendimento garante o resultado da nossa empresa e a satisfação dos nossos clientes.
            <br>

            Valorizamos a honestidade e a justiça, em qualquer ambiente, respeitando os parceiros internos e externos, os
            direitos e deveres da empresa e dos investidores.
        </p>
    </div>
    <br><br>

    <div class="w3-row" style="margin-left:100px;"><br>
        <h3 text-align="center;">TIME DELTΔ IMOBILIÁRIA</h3>
        <div class="w3-quarter">
            <img src="../img/comp-equipe1.jpg" alt="homem" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>JOHNNY DEPP</h3>
            <p>CORRETOR IMOBILIÁRIO <br>CRECI-CE</p>
        </div>

        <div class="w3-quarter">
            <img src="../img/comp-equipe2.jpg.jpg" alt="Homem" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>ATLAS GREENBIAR</h3>
            <p>CORRETOR IMOBILIÁRIO <br> CRECI-CE 33777</p>
        </div>

        <div class="w3-quarter">
            <img src="../img/comp-equipe4.jpg.jpg" alt="Homem" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>CRISTIAN ANGELO</h3>
            <p>CORRETOR IMOBILIÁRIO <br> CRECI-CE 12777</p>
        </div>

        <div class="w3-quarter">
            <img src="../img/comp-equipe3.jpg.jpg" alt="Mulher" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>ROBERTA PAIVA</h3>
            <p>CORRETORA IMOBILIÁRIA <br>CRECI-CE 36870</p>
        </div>
    </div>

    <p style="text-align:center;">Missão:<br>
        “Atuar no mercado imobiliário prestando serviços de qualidade, num crescimento contínuo para facilitar as atividades
        humanas,<br> respeitando as pessoas e o meio ambiente.”
    </p>


    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="https://quizlandia.club/wp-content/uploads/2019/11/casal-feliz-comprando-casa.jpg" alt="casa" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-black">
                <p><b>ALUGAR</b></p>
                <p>A solução para adquirir mais recursos para dar sua entrada na compra do futuro lar. E mesmo quem já possui o
                    valor de entrada mas não quer financiar um valor tão alto, pode usar essa estratégia para acumular ainda mais
                    dinheiro e diminuir o valor das parcelas do provável financiamento.</p>
            </div>
        </div>

        <div class="w3-third w3-container w3-margin-bottom">
            <img src="../img/background-delta2.png" alt="delta" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>NOS CONTRATAR</b></p>
                <p> Conhecimento de mercado, divulgação e atendimento, cuidados com o imóvel, Análise da reputação do inquilino,
                    elaboração de contrato válido, agilidade na burocracia, prevenção de inadimplência, prevenção contra ações
                    judiciais e
                    tranquilidade ao não precisar deslocar-se atrás de vários imóveis.
                </p>
            </div>
        </div>

        <div class="w3-third w3-container w3-margin-bottom">
            <img src="https://ddadvogados.com.br/wp-content/uploads/2018/11/251952-compra-de-imovel-em-comunhao-x-cuidados-que-o-casal-precisa-tomar.jpg" alt="residência" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-black">
                <p><b>COMPRAR</b></p>
                <p>Estabilidade, previsibilidade de custos,
                    Investimento certo e Mesmo que você não pense em se mudar agora, comprar um imóvel é uma ótima opção se você
                    está buscando uma renda extra fixa. Você pode comprar e alugar o local e tem um teto garantido e ainda por
                    cima, terá sempre um bem durável em seu nome.
                </p>
            </div>
        </div>

        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="../img/carrossel1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../img/carrossel2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/carrossel3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
</body>

<section>
    <div data-elementor-type="footer" data-elementor-id="496" class="elementor elementor-496 elementor-location-footer">
        <div class="e-con-inner">
            <div class="elementor-shape elementor-shape-top" data-negative="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z" />
                    <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 77.1z" />
                    <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z" />
                </svg>
            </div>
        </div>
    </div>

    <h2 id="residencias1" ; style="text-align:center">Residências</h2>
    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/1195173046df0369b294356ac0b35127/casa-com-3-quartos-a-venda-166m-no-rio-tavares-florianopolis.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 2.495.000</h3>
            <p class="w3-opacity"> Rua Servidão Pedro Edmundo Bittencourt.</p>
            <p>3 Quartos, 2 vagas de garagem, 3 banheiros ,2 andares, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1234</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://www.jesoepacheco.com.br/uploads/imovel/galeria/big-a1aff4b61fd12abac08055fde4578b65.jpeg" alt="DJresidencias" style="width:100% ;height:200px;">
            <h3>R$ 1.900.000</h3>
            <p class="w3-opacity">Av. Desembargador Pompeu</p>
            <p>Garagem 5 vagas, Piscina, Área de Serviço e Área de festas, 3 suítes, jardim, sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1235</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.vivareal.com/crop/286x200/named.images.sp/571304896fc598d0c4838fe0f3d26556/foto-1-de-casa-com-3-quartos-a-venda-128m-em-itaipuacu-marica.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 45.000</h3>
            <p class="w3-opacity">Rua Tavares de Lima</p>
            <p>100 m², 2 quartos,2 banheiros, 2 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1236</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/277df04c6bd8c9a7c1f6f28bb05e2ef8/casa-com-3-quartos-a-venda-150m-no-zona-05-maringa.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 450.000</h3>
            <p class="w3-opacity">Rua Maria Aparecida</p>
            <p>450 m², 3 quartos, 3 banheiros, 1 lavabo, 2 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1237</button></p>
        </div>
    </div>

    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.vivareal.com/crop/360x240/named.images.sp/1b84056cc47b4586d67964f8bff36a6b/foto-1-de-casa-com-3-quartos-a-venda-93m-em-centro-pacatuba.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 174.900,00</h3>
            <p class="w3-opacity"> Rua Servidão Pedro Edmundo Bittencourt.</p>
            <p>93 m², 3 Quartos, 4 vagas de garagem, 3 banheiros, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1238</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.vivareal.com/crop/360x240/named.images.sp/7807061bfabc93a47176eada974629c7/foto-1-de-casa-com-3-quartos-a-venda-84m-em-mucuna-maracanau.jpg" alt="DJresidencias" style="width:100% ;height:200px;">
            <h3>R$ 195.000,00</h3>
            <p class="w3-opacity">Rua MariA varela da Silva</p>
            <p>84 m², Garagem 3 vagas, Piscina, 2 banheiros, área de serviço, 3 quartos, jardim, sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1239</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/de768347874c5461d65e6fddd76846d6/casa-com-3-quartos-a-venda-260m-no-cambeba-fortaleza.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 770.000,00</h3>
            <p class="w3-opacity"> Cambeba</p>
            <p>260 m², 3 quartos, 5 banheiros, 8 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1240</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/1e62238c7adfa83393ba659605a845be/casa-com-3-quartos-a-venda-246m-no-de-lourdes-fortaleza.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>1.600.000</h3>
            <p class="w3-opacity">Bairro Lourdes</p>
            <p>246 m², 3 quartos, 5 banheiros, 1 lavabo, 3 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1241</button></p>
        </div>
    </div>

    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/3e6836bd3408139b3471329267d21f9b/casa-com-5-quartos-a-venda-740m-no-monte-castelo-fortaleza.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 1.400. 00</h3>
            <p class="w3-opacity"> Rua Benjamim Barroso</p>
            <p>740 m², 5 Quartos, 5 vagas de garagem, 4 banheiros, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1242</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/702ba5f07081b9b2a8d183289a111536/casa-com-5-quartos-a-venda-535m-no-de-lourdes-fortaleza.jpg" alt="DJresidencias" style="width:100% ;height:200px;">
            <h3>R$ 1.900.000</h3>
            <p class="w3-opacity">Bairro Dr, Luís Teixeira de Alcântara</p>
            <p>575 m², garagem 6 vagas, 5 quartos, 6 banheiros, sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1243</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/d9867cf27a0f6f56124e4b8309280414/casa-de-condominio-com-4-quartos-a-venda-188m-no-sapiranga-fortaleza.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>759.000</h3>
            <p class="w3-opacity">Rua Coronel Olegário Memória</p>
            <p>188 m², 4 quartos, banheiros, 4 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1244</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/55816vvPigTUAwshgUlOQYFpgRE=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/a/2/7/a27071457829caace960e3bdac347542/10221946814_7070834_g.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>990.000</h3>
            <p class="w3-opacity">Rua Maria da Graça</p>
            <p>232 m², 3 quartos, 4 banheiros, 1 lavabo, 2 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1245</button></p>
        </div>
    </div>
</section>

<section>
    <h2 id="residencias2" style="text-align:center">Aluguel de Residências</h2>
    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://media-cdn.tripadvisor.com/media/vr-splice-j/03/6e/fc/fc.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 3.000/mês</h3>
            <p class="w3-opacity">Bairro Boa Esperança</p>
            <p>300 m² ,5 Quartos, 2 vagas de garagem, 7 banheiros , 2 andares piscina, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1434</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://www.homeit.com.br/wp-content/uploads/2018/11/fachada-casa-pequena-2.png" alt="DJresidencias" style="width:100% ;height:200px;">
            <h3>R$ 500,00/mês</h3>
            <p class="w3-opacity">Av. Desembargador Pompeu</p>
            <p>100 m², Garagem 3 vagas, amplo espaço livre, área de Serviço e sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1435</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="http://plantasdecasas.com/wp-content/uploads/2016/11/309-plantas-de-casas-fachadas-front.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 1.000/mês</h3>
            <p class="w3-opacity">Bairro da Esperança</p>
            <p>100 m², 2 quartos,2 banheiros, 2 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1436</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.pinimg.com/736x/63/ba/36/63ba36c21fbb2dc95265ae413c40ed48.jpg" alt="DJresidencias" style="width:100%;height:200px;">
            <h3>R$ 800,00/mês</h3>
            <p class="w3-opacity">Rua Maria Paiva</p>
            <p>120 m², 2 quartos, 2 banheiros, 2 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1437</button></p>
        </div>
    </div>
</section>

<section>
    <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="https://p2.trrsf.com/image/fget/cf/774/0/images.terra.com/2019/06/12/10832-casas-bonitas-fachada-archdesign-studio-viva-decora.jpg" alt="DJresidencias" style="width:100%;height:200px;">
        <h3>R$ 1.500/mês</h3>
        <p class="w3-opacity">Bairro Virgília</p>
        <p>170 m² , dois andares, 3 Quartos, amplo espaço, amplo espaço livre, 2 banheiros, sala e cozinha</p>
        <p><button class="w3-button w3-light-grey w3-block">REF:1438</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="https://i.pinimg.com/736x/22/f4/15/22f41557af9c0fd9799a109a9b9d1b4e--lazer-sederhana.jpg" alt="DJresidencias" style="width:100% ;height:200px;">
        <h3>R$ 900,00/mês</h3>
        <p class="w3-opacity">Av. Desembargador João Batista</p>
        <p>150 m², Piscina, Área de Serviço e , 3 quartos, jardim, sala e cozinha.</p>
        <p><button class="w3-button w3-light-grey w3-block">REF:1439</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="https://resizedimgs.zapimoveis.com.br/crop/250x250/named.images.sp/165470a0b5fe997a71209b74158366cd/casa-com-3-quartos-a-venda-111m-no-nazare-belem.jpg" alt="DJresidencias" style="width:100%;height:200px;">
        <h3>R$ 930,00/mês</h3>
        <p class="w3-opacity">Bairro Vista Bela</p>
        <p>100 m², 2 quartos, 2 banheiros, 2 vagas na garagem, sala e cozinha</p>
        <p><button class="w3-button w3-light-grey w3-block">REF:1440</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
        <img src="https://resizedimgs.zapimoveis.com.br/crop/870x653/named.images.sp/c2780b5ce6b18c05b17cd83a1c7006c2/casa-com-3-quartos-a-venda-138m-no-jardim-joamar-sao-paulo.jpg" alt="DJresidencias" style="width:100%;height:200px;">
        <h3>R$ 800,00/mês</h3>
        <p class="w3-opacity">Rua Maria Angelina</p>
        <p>120 m², 2 quartos, 2 banheiros, 2 vagas na garagem, sala e cozinha</p>
        <p><button class="w3-button w3-light-grey w3-block">REF:1441</button></p>
    </div>
</section>

<section>
    <div data-elementor-type="footer" data-elementor-id="496" class="elementor elementor-496 elementor-location-footer">
        <div class="e-con-inner">
            <div class="elementor-shape elementor-shape-top" data-negative="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z" />
                    <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z" />
                    <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z" />
                </svg>
            </div>
        </div>
    </div>

    <!--apartamentos1-->
    <h2 id="apartamentos1" ; style="text-align:center" ;>Compra de Apartamentos</h2>
    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/K2DNC82gCXe4K3cnp7bmeNyaZFM=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/2/4/9/2494ec231052abfd76879024857380a2/352656427_234095619_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 445.500</h3>
            <p class="w3-opacity"> Rua Servidão Pedro Edmundo Bittencourt.</p>
            <p>126m², 3 Quartos, 1 vagas de garagem, 3 banheiros , piscina, paequinho, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">1246</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/1wxQKdnMg7zVhmXTcThHs9Urnfs=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/c/1/b/c1bfc79b5eabe15097401ba582f9a79d/352140083_234094396_g.jpg" alt="DJapartamentos" style="width:100% ;height:200px;">
            <h3>R$ 1.900.000</h3>
            <p class="w3-opacity">Bairro Aldeota</p>
            <p>330 m², garagem 1 vagas, piscina, Área de Serviço e Área de festas, 4 quartos, sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1237</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/T7a4IoIU-WX_da7HTinleS6-J1Y=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/7/8/1/7819382aa95ee6be8750b562303406b0/352492889_232256351_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 600.000</h3>
            <p class="w3-opacity">Bairro de FÁTIMA, Av. Guanambi</p>
            <p>98 m², 3 quartos,3 banheiros, piscina, área de serviço sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1238</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/iFoBsmhBKFX3RtkNIblTNAt46kU=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/d/3/d/d3d1e9d5ca48669a1a532ae86f0a85d0/353093816_234209563_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 446.000,00</h3>
            <p class="w3-opacity">Rua Maria de Fátima, Jacarecanga</p>
            <p>78 m², 3 quartos, 2 banheiros, play ground, pista de skate, campinho de futebol, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1249</button></p>
        </div>
    </div>

    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/6klssu33OSHuDku-JzjPvSvVvNI=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/5/0/2/50299eb74986f909913936c8c1a5b376/352140112_234094983_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 620.000</h3>
            <p class="w3-opacity"> Meireles</p>
            <p>248m², 3 Quartos, 1 vagas de garagem, 5 banheiros , piscina, paequinho, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF: 1250</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/FBsiWabPYWGEzvpAeHwP-Oo743g=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/7/1/e/71edcfd5582618b9e7809b2c713c458d/352140118_234094576_g.jpg" alt="DJapartamentos" style="width:100% ;height:200px;">
            <h3>R$ 2.000.000</h3>
            <p class="w3-opacity">Av.Beira Mar, Praia de Iracema</p>
            <p>378 m², garagem 1 vagas, piscina, varanda c/ vista para o mar, lavabo, 4 suítes, sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1251</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/5zDP3WENKF1ZThAxiaG1Ixp6Rnk=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/2/b/4/2b487de812b370d9353c18002378cb9b/352140173_234095003_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 310.000</h3>
            <p class="w3-opacity">Rua Professor Wilson Aguiar, Edson Queiroz</p>
            <p>68 m², 3 quartos, 2 banheiros, piscina, área de serviço sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1252</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/-RPefX-1DvqLj3MWkSxBQRBosfo=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/1/4/4/14463994e09a252bd2f69a1816b96c22/352826623_234095799_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 680.000</h3>
            <p class="w3-opacity">Rua Maria Assunção</p>
            <p>120 m², 4 quartos, 4 banheiros, área de serviço, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1253</button></p>
        </div>
    </div>


    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/-ffy_K0uKXo0pPF-mUTIRumzSP0=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/b/4/1/b411972bc611e9fc3a0bc6925c4d7ea9/353333027_239172417_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 140.000</h3>
            <p class="w3-opacity"> Rua Servidão Pedro Edmundo Bittencourt.</p>
            <p>58m², 3 Quartos, 1 vagas de garagem, 2 banheiros , piscina, área de serviço, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1254</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/AxT_g4Js6s8kZA0wNoTCqhRlaUM=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/5/c/7/5c7d8869df358d1065799b835487ac47/353204511_236499652_g.jpg" alt="Jane" style="width:100% ;height:200px;">
            <h3>R$ 355.000</h3>
            <p class="w3-opacity">Jóquei Clube, Rua Manoel Lourenço</p>
            <p>49 m², piscina, Área de Serviço e 1 banheiro, 42quartos, sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1255</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/2VgF18DqJmb3MccsHXhleA8R-E0=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/e/9/7/e977db65e07a527784d12b770a9b1c1c/352634441_234095418_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 300.000</h3>
            <p class="w3-opacity"> Rua Livreiro Edésio, Dionísio Torres</p>
            <p>102 m², 3 quartos, 2 banheiros, piscina, área de serviço sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1256</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/Bt896vxkf0ti9CsDiL3IqN03g3E=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/a/a/5/aa55663c5ff9413d73a4fcdea0079d41/353094734_234222267_g.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 680.000</h3>
            <p class="w3-opacity">Rua José de Alencar, Edson queiroz</p>
            <p>81 m², 3 quartos, 3 banheiros, 1 lavabo, 2 vagas na garagem, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1257</button></p>
        </div>
    </div>



    <!--apartamentos2-->
    </div>
    <h2 id="apartamentos2" ; style="text-align:center" ;>Aluguel de Apartamentos</h2>
    </setion>
    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://midias.agazeta.com.br/2021/01/20/apartamentos-laterais-do-golden-barro-vermelho-em-vitoria-estao-a-venda-a-partir-de-r-718-mil-403229-article.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 2.700/mês</h3>
            <p class="w3-opacity"> Rua Servidão José </p>
            <p>126m², 3 Quartos, 1 vagas de garagem, 3 banheiros , piscina, paequinho, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">1446</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://i.lugarcerto.com.br/1wxQKdnMg7zVhmXTcThHs9Urnfs=/295x215/imgs.carteira.lugarcerto.com.br/anuncio/lugarcerto/c/1/b/c1bfc79b5eabe15097401ba582f9a79d/352140083_234094396_g.jpg" alt="DJapartamentos" style="width:100% ;height:200px;">
            <h3>R$ 800,00/mês</h3>
            <p class="w3-opacity">Bairro Aldeota</p>
            <p>330 m², garagem 1 vagas, piscina, Área de Serviço e Área de festas, 4 quartos, sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1437</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://www.davincicorretora.com.br/images/blog/tipos-de-apartamentos-davinci-1024.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 600.000/mês</h3>
            <p class="w3-opacity">Bairro de FÁTIMA, Av. Guanambi</p>
            <p>98 m², 3 quartos,3 banheiros, piscina, área de serviço sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1438</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://imgs.kenlo.io/VWRCUkQ2Tnp3d1BJRDBJVe1szkhnWr9UfpZS9ftWwjXgr7v5Znen3XVcMHllDVRJJeIbi3YwVYEtu2lX9IIy5xUuzdIAXO-ukjOtzoTR2+W7gVao5MLY46qH2cGlfP75mMUN2pfqHV2qnp5kf5khAU1kR+BNYTr1XKaHH2dzrSaG-kv2aZpEQmRT3hlv1TJn7nXkWbeP1VUh2Sb8W6zTmieoFbm4DAcCGrMNAdsz6EIJ9xa9SUxy8h8d55m-oS7TO7S-K5+hxzlXFx5k9oa+Squ619jCLJU4Vr0lNm4L5VMZWe0S2-TJT-8+5wEDqv3JFhXchgzWgPAoc9j0QdxLlaIHiFqQHOYbuE-qko3B1fOtZxyAYlY09OrL8frgO-rzS-+iOWGvj5c84o-ZIdlLa5qoCiQJEGZ4M3BJqRO29rnGsACzMWqH.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 1.300 /mês</h3>
            <p class="w3-opacity">Rua Maria de Fátima, Jacarecanga</p>
            <p>78 m², 3 quartos, 2 banheiros, play ground, pista de skate, campinho de futebol, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1449</button></p>
        </div>
    </div>

    </setion>
    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/a6/97/22/regency-boutique.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 2.700/mês</h3>
            <p class="w3-opacity"> Rua Servidão José Pompeu </p>
            <p>126m², 3 Quartos, 1 vagas de garagem, 3 banheiros , piscina, paequinho, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">1450</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://media.agenteimovel.com.br/images/8/84/8476934/high/20221207130312_evenjoa03detalhe-fachada-voof00v2.jpg" alt="DJapartamentos" style="width:100% ;height:200px;">
            <h3>R$ 4.000/mês</h3>
            <p class="w3-opacity">Bairro Aldeota</p>
            <p>330 m², garagem 1 vagas, piscina, Área de Serviço e Área de festas, 4 quartos, sala e cozinha.</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1451</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/aa99e1281e35d4970ce309fab26bd665/milano-lifestyle-by-versace-home-no-jardim-paulista-sao-paulo.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 1.300/mês</h3>
            <p class="w3-opacity">Bairro de FÁTIMA, Av. Guanambi</p>
            <p>98 m², 3 quartos,3 banheiros, piscina, área de serviço sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1452</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://media.agenteimovel.com.br/images/8/83/8364047/high/20220429125811_2-perspectiva-artistica-detalhe-da-fachada.jpg" alt="DJapartamentos" style="width:100%;height:200px;">
            <h3>R$ 1.300 /mês</h3>
            <p class="w3-opacity">Rua Maria de Fátima, Jacarecanga</p>
            <p>78 m², 3 quartos, 2 banheiros, play ground, pista de skate, campinho de futebol, sala e cozinha</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1453</button></p>
        </div>
    </div>



    <!--salas2-->
    <section>
        <div data-elementor-type="footer" data-elementor-id="496" class="elementor elementor-496 elementor-location-footer">
            <div class="e-con-inner">
                <div class="elementor-shape elementor-shape-top" data-negative="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
                        <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z" />
                        <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z" />
                        <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z" />
                    </svg>
                </div>

                <div class="w3-row-padding w3-scale">
                    <h2 id="salas1" ; style="text-align:center" ;>Compra de Salas Comerciais</h2>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="http://www.simplifiqueengenharia.com.br/imagens/infraestrutura-para-salas-comerciais/infraestrutura-para-salas-comerciais.jpg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$ 90.000 (condomínio R$300,00)</h3>
                        <p class="w3-opacity">Bairro Castro Meireles de Paiva</p>
                        <p>55 m², 2 banheiros</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1558</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://blog.friasneto.com.br/wp-content/uploads/2020/07/DSC08977-HDR-Edit-1024x683.jpg" alt="salac." style="width:100% ;height:200px;">
                        <h3>R$ 57.000 (condomínio R$177,00)</h3>
                        <p class="w3-opacity">Bairro Paulo Castro</p>
                        <p>27m², 1 banheiro e 1 vaga na garagem </p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1559</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="http://blog.imobiliariapanorama.com.br/wp-content/uploads/2016/11/investir-em-salas-comerciais-e-rentavel-entenda-780x450.jpeg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$ 70.000 (condomínio R$300,00)</h3>
                        <p class="w3-opacity">Bairro Angélica Paiva Castro</p>
                        <p>36 m², 1 banheiro e 1vaga na garagem</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1560</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/5931b825e58ad24d76ba9ff73f639f67/conjunto-comercial-sala-para-alugar-37m-no-pagani-palhoca.jpg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$1.550/mês (condomínio R$280,00)</h3>
                        <p class="w3-opacity">Rua Maria Aparecida, Messejana</p>
                        <p>37 m², 1 banheiro</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1561</button></p>
                    </div>
                </div>







                <div class="w3-row-padding w3-scale">
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/98eaa415fd16c425dfdfd0e0c428b766/conjunto-comercial-sala-para-alugar-55m-no-parque-sao-lucas-sao-paulo.jpg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$ 40.000 (condomínio R$347,00)</h3>
                        <p class="w3-opacity">Av. do Oratório, Parque São Lucas</p>
                        <p>26 m², 1 banheiro e 1 vaga na garagem</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1562</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/baf48380ea7f7b2c735e1ae937bf78b7/conjunto-comercial-sala-para-venda-ou-aluguel-45m-no-centro-niteroi.jpg" alt="salac." style="width:100% ;height:200px;">
                        <h3>R$ 17.000 (condomínio R$200,00)</h3>
                        <p class="w3-opacity"> Rua Dr. Celestino, Centro</p>
                        <p>45m² e 1 banheiro</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1563</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/7f56ec48ee934e4eeec21ca52200abd6/conjunto-comercial-sala-para-alugar-113m-no-jardim-paulista-sao-paulo.jpg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$5.000 (condomínio R$120,00)</h3>
                        <p class="w3-opacity">Rua Augusta- Consolação</p>
                        <p>113 m², 2 banheiros e 2 vagas na garagem</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1564</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/4d5ec871474abf8ac8c0ac6ba74956b6/conjunto-comercial-sala-para-alugar-128m-no-itaim-bibi-sao-paulo.jpg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$57.000(condomínio R$300,00)</h3>
                        <p class="w3-opacity">Rua São Gabriel</p>
                        <p>128 m², 4 banheiros e 4 vagas na garagem</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1565</button></p>
                    </div>
                </div>


                <div class="w3-row-padding w3-scale">
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://chacaramall.com.br/wp-content/uploads/2020/04/salas-02-800x480.jpg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$ 40.000 (condomínio R$250,00)</h3>
                        <p class="w3-opacity">Av. do Oratório, Parque São Lucas</p>
                        <p>26 m², 1 banheiro e 1 vaga na garagem</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1562</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/120d99b0cf3713a99b127a629c597c42/conjunto-comercial-sala-para-alugar-33m-no-asa-sul-brasilia.jpg" alt="salac." style="width:100% ;height:200px;">
                        <h3>R$ 17.000 (condomínio R$200,00)</h3>
                        <p class="w3-opacity"> Rua Dr. Celestino, Centro</p>
                        <p>45m² e 1 banheiro</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1563</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/43fc171f13b5b9846136de8f0e22e7b8/conjunto-comercial-sala-para-alugar-30m-no-asa-sul-brasilia.jpg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$5.000 (condomínio R$120,00)</h3>
                        <p class="w3-opacity">Bairro Celeste</p>
                        <p>113 m², 2 banheiros e 2 vagas na garagem</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1564</button></p>
                    </div>
                    <div class="w3-col l3 m6 w3-margin-bottom">
                        <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/2a2d3d4a0699ce7454a2c79a73fb7829/conjunto-comercial-sala-para-alugar-32m-no-asa-sul-brasilia.jpg" alt="salac." style="width:100%;height:200px;">
                        <h3>R$30.000(condomínio R$100,00)</h3>
                        <p class="w3-opacity">Bairro </p>
                        <p>32 m², 4 banheiros e 4 vagas na garagem</p>
                        <p><button class="w3-button w3-light-grey w3-block">REF:1565</button></p>
                    </div>
                </div>




    </section>
    <div class="w3-row-padding w3-scale">
        <h2 id="salas2" ; style="text-align:center" ;>Aluguel de Salas Comerciais</h2>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/98eaa415fd16c425dfdfd0e0c428b766/conjunto-comercial-sala-para-alugar-55m-no-parque-sao-lucas-sao-paulo.jpg" alt="salac." style="width:100%;height:200px;">
            <h3>R$ 900,00/mês (condomínio R$30,00)</h3>
            <p class="w3-opacity">Av. do Oratório, Parque São Lucas</p>
            <p>55 m², 2 banheiros</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1558</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/a6bdfc3e3722262f878debf4ed94169f/conjunto-comercial-sala-para-venda-ou-aluguel-27m-no-recreio-dos-bandeirantes-rio-de-janeiro.jpg" alt="salac." style="width:100% ;height:200px;">
            <h3>R$ 690/mês (condomínio R$698,00)</h3>
            <p class="w3-opacity">Av. Dom Cstro Alves</p>
            <p>27m², 1 banheiro e 1 vaga na garagem </p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1559</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/5bc24c21dbf428d66f1eafe2013d7597/conjunto-comercial-sala-para-alugar-36m-no-consolacao-sao-paulo.jpg" alt="salac." style="width:100%;height:200px;">
            <h3>R$1.550/mês (condomínio R$565,00)</h3>
            <p class="w3-opacity">Rua Augusta- Consolação</p>
            <p>36 m², 1 banheiro e 1vaga na garagem</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1560</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/5931b825e58ad24d76ba9ff73f639f67/conjunto-comercial-sala-para-alugar-37m-no-pagani-palhoca.jpg" alt="salac." style="width:100%;height:200px;">
            <h3>R$1.550/mês (condomínio R$280,00)</h3>
            <p class="w3-opacity">Rua Maria Aparecida, Messejana</p>
            <p>37 m², 1 banheiro</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1561</button></p>
        </div>
    </div>

    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/ae3b3abb30f5348bd04286e3564f5eeb/conjunto-comercial-sala-para-alugar-132m-no-botafogo-rio-de-janeiro.jpg" alt="salac." style="width:100%;height:200px;">
            <h3>R$ 11.000mês (condomínio R$4.446)</h3>
            <p class="w3-opacity">Av. Do Povo, Centro</p>
            <p>132 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1566</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/eb9d79c18fff296c9187dd08adb0dab9/conjunto-comercial-sala-para-alugar-26m-no-barra-da-tijuca-rio-de-janeiro.jpg" alt="salac." style="width:100% ;height:200px;">
            <h3>R$ 683,00/mês (condomínio R$671,00)</h3>
            <p class="w3-opacity">Av. Embaixador Abelardo Bueno</p>
            <p>26m², 1 banheiro e 1 vaga na garagem</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1567</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/61dbc5588501e3b02a1af77133ff53f0/conjunto-comercial-sala-para-alugar-34m-no-tatuape-sao-paulo.jpg" alt="salac." style="width:100%;height:200px;">
            <h3>R$3.100/mês (condomínio R$520,00)</h3>
            <p class="w3-opacity">Rua Bom Sucesso</p>
            <p>34 m², 2 banheiros e 1 vaga na garagem</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1568</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/9e725c137eb8d99aab60a11a9f148cff/conjunto-comercial-sala-para-alugar-36m-no-joao-paulo-florianopolis.jpg" alt="salac." style="width:100%;height:200px;">
            <h3>R$2.195/mês (condomínio R$400,00)</h3>
            <p class="w3-opacity">Rodovia José Carlos Doux</p>
            <p>36 m², 1 banheiro e 1 vaga na garagem</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1569</button></p>
        </div>
    </div>
    <section>


        <!--Terrenos1-->
        <div data-elementor-type="footer" data-elementor-id="496" class="elementor elementor-496 elementor-location-footer">
            <div class="e-con-inner">
                <div class="elementor-shape elementor-shape-top" data-negative="false">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
                        <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z" />
                        <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z" />
                        <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z" />
                    </svg>
                </div>
    </section>
    <div class="w3-row-padding w3-scale">
        <h2 id="terrenos1" ; style="text-align:center" ;>Compra de Terrenos</h2>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/30cfb2fd92630008f56abca787b20ece/terreno-lote-condominio-a-venda-250m-no-centro-floresta.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 33.000</h3>
            <p class="w3-opacity">Rua Madre Teresa, Messejana</p>
            <p>250 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1270</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/fit-in/800x360/named.images.sp/86f816e7d098072c2f577a79e28540fe/terreno-lote-condominio-a-venda-3694m-no-aracape-fortaleza.jpg" alt="DJterrenos" style="width:100% ;height:200px;">
            <h3>R$ 15.000</h3>
            <p class="w3-opacity">Av. Dom Castro Alves</p>
            <p>3694m² </p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1271</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="   https://resizedimgs.zapimoveis.com.br/fit-in/800x360/named.images.sp/5e28b72b8dd97ed0937cc4caac02dc41/terreno-lote-condominio-a-venda-200m-no-prefeito-jose-walter-fortaleza.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 45.000</h3>
            <p class="w3-opacity"> Avenida C, Rua José Walter, Fortaleza - CE </p>
            <p>200 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1272</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://imgbr.imovelwebcdn.com/avisos/2/29/76/42/69/10/720x532/3690386320.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 25.000</h3>
            <p class="w3-opacity">Rua Maria da Boa Amizade, Messejana</p>
            <p>450 m².</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1273</button></p>
        </div>
    </div>


    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/b20e65514a1b7f284b67c4f650cc55b7/terreno-lote-condominio-a-venda-259m-no-loteamento-floresta-sao-jose-dos-campos.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 13.000</h3>
            <p class="w3-opacity">Rua Pe. José Jorvan Messejana</p>
            <p>100 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">1274</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/9d2231ac4f60a1da49cc598fdba8aa41/portal-serrano-no-centro-queimadas.jpg" alt="DJterrenos" style="width:100% ;height:200px;">
            <h3>R$ 37.801</h3>
            <p class="w3-opacity">Av. Centro e Graças, Bom Jardim</p>
            <p>3694m² </p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1275</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/222bb3d0dc567eda95d9d34c97e6126a/jardim-parenti-4-no-itatinga.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 41.000</h3>
            <p class="w3-opacity">Av. Cristofer Delante Fortaleza - CE </p>
            <p>140 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1275</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/8e73980d5ab687b1c01dd0d7962d06f0/setjardim-engenheiro-schmitt-no-centro-engenheiro-schmitt-sao-jose-do-rio-preto.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 10.000</h3>
            <p class="w3-opacity">Rua Voluntarios da Soledade, Messejana</p>
            <p>200 m².</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1276</button></p>
        </div>
    </div>


    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/9527ddf396583fd281824077ebc55b2e/life-ourinhos-no-loteamento-gsp-life-recanto-dos-passaros-iii-ourinhos.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 75.000</h3>
            <p class="w3-opacity">Rua Domingos Faria</p>
            <p>500 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1277</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/d96271879821f153a35a96b1715e190c/loteamento-jardim-elisa-no-jardim-dona-benta-suzano.jpg" alt="DJterrenos" style="width:100% ;height:200px;">
            <h3>R$ 17.000</h3>
            <p class="w3-opacity">Av. Francisco Moreno, Jardin da União
            </p>
            <p>175 m² </p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1278</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/ef74cc067a34f8496d754c60c0a041eb/bela-alianca-residencial-no-vila-sao-bento-campinas.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 160.000</h3>
            <p class="w3-opacity"> Avenida Jonh Boyd Dunlop</p>
            <p>250 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1279</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.zapimoveis.com.br/crop/420x236/named.images.sp/959cd822379482f37033236f4a987477/golden-aracatuba-no-centro-aracatuba.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 200.000</h3>
            <p class="w3-opacity">Conselheiro Oscar Rodrigues Alves, Messejana</p>
            <p>450 m².</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1280</button></p>
        </div>
    </div>

    <!--Terrenos2-->
    <div class="w3-row-padding w3-scale">
        <h2 id="terrenos2" ; style="text-align:center" ;>Aluguel de Terrenos</h2>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://http2.mlstatic.com/D_NQ_NP_716363-MLB53042631666_122022-W.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 1.000/mês</h3>
            <p class="w3-opacity">Bairro Dionísio Torres</p>
            <p>250 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1470</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://d31hw7dq38n1ek.cloudfront.net/Imagens/2/Interno/5960/Imovel/3335535/W_20230130184951_whatsapp-image-2023_01_30-at-15.43.18.jpeg" alt="DJterrenos" style="width:100% ;height:200px;">
            <h3>R$ 900,00</h3>
            <p class="w3-opacity">Bairro Bom sucesso</p>
            <p>3694m² </p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1471</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://www.quatropontes.pr.gov.br/upload/6230685475ff8b8000a85a2.44312152.jpeg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 500,00</h3>
            <p class="w3-opacity">Bairro Boa Esperança</p>
            <p>200 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1472</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://imgbr.imovelwebcdn.com/avisos/2/29/76/42/69/10/720x532/3690386320.jpg" alt="Dan" style="width:100%;height:200px;">
            <h3>R$ 2.000</h3>
            <p class="w3-opacity">Bairro Cristian Gurgel</p>
            <p>450 m².</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1573</button></p>
        </div>
    </div>

    <div class="w3-row-padding w3-scale">
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://planetsmartcity.com.br/wp-content/uploads/2022/06/diferenca-entre-lote-e-terreno.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 8.000/mês</h3>
            <p class="w3-opacity">Bairro Dionísio Torres</p>
            <p>250 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1471</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://resizedimgs.vivareal.com/fit-in/870x653/named.images.sp/2c003a023ad7e73fd62d386480d7d850/foto-14-de-loteterreno-a-venda-360m-em-araruama-araruama.jpg" alt="DJterrenos" style="width:100% ;height:200px;">
            <h3>R$ 900,00</h3>
            <p class="w3-opacity">Bairro Boa Esperança</p>
            <p>3694m² </p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1472</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://imgbr.imovelwebcdn.com/avisos/2/29/74/54/61/47/720x532/3662763755.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 700,00</h3>
            <p class="w3-opacity">Bairro Vista Bela</p>
            <p>200 m²</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1473</button></p>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
            <img src="https://img.olx.com.br/images/04/048367493612349.jpg" alt="DJterrenos" style="width:100%;height:200px;">
            <h3>R$ 2.000</h3>
            <p class="w3-opacity">Bairro Maria Zelda</p>
            <p>150 m².</p>
            <p><button class="w3-button w3-light-grey w3-block">REF:1574</button></p>
        </div>
    </div>


    <div data-elementor-type="footer" data-elementor-id="496" class="elementor elementor-496 elementor-location-footer">
        <div class="e-con-inner">
            <div class="elementor-shape elementor-shape-top" data-negative="false">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2600 131.1" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M0 0L2600 0 2600 69.1 0 0z" />
                    <path class="elementor-shape-fill" style="opacity:0.5" d="M0 0L2600 0 2600 69.1 0 69.1z" />
                    <path class="elementor-shape-fill" style="opacity:0.25" d="M2600 0L0 0 0 130.1 2600 69.1z" />
                </svg>
            </div>


            <!-- Seção Contato -->
            <div class="w3-container w3-padding-large w3-#0073e6">
                <h4 id="contact"><b>Contato</b></h4>
                <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
                    <div class="w3-third w3-dark-grey">
                        <p><i class="fa fa-envelope w3-xxlarge w3-text-white"></i></p>
                        <p>deltaimobiliaria@gmail.com</p>
                    </div>
                    <div class="w3-third w3-gray">
                        <p><i class="fa fa-map-marker w3-xxlarge w3-text-white"></i></p>
                        <p>Paraipaba,CE</p>
                    </div>
                    <div class="w3-third w3-dark-grey">
                        <p><i class="fa fa-phone w3-xxlarge w3-text-white"></i></p>
                        <p>(085) 33337-7777 e (085) 93333-7777</p>
                    </div>
                </div>

                <!--Footer-->
                <footer class="w3-container w3-padding-32 w3-white">
                    <div class="w3-row-padding">
                        <div class="w3-third">
                            <h3>Endereço</h3>
                            <p> RUA JOAQUIM BRAGA, <br>Nº 296-
                                CENTRO, <br>CEP: 62685-000
                            </p>
                        </div>

                        <div class="w3-third">
                            <h3 id="contato" ;>Contato</h3>
                            <ul class="w3-ul w3-hoverable">
                                <li class="w3-padding-16">
                                    <span class="w3-large">Instagram</span><br>
                                    <span>@deltaimobiliaria</span>
                                </li>
                                <li class="w3-padding-16">
                                    <span class="w3-large">E-mail</span><br>
                                    <span>deltaimobiliaria@gmail.com</span>
                                </li>
                            </ul>
                        </div>

                        <div class="w3-third">
                            <h3>Funcionamento</h3>
                            <p>
                                DE SEGUNDA A SEXTA, <br>DE 08:00HS ÀS 17:00HS
                            </p>
                        </div>

                    </div>
                </footer>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                </body>
                <style>
                </style>

</html>