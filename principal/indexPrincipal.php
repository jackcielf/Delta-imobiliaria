<?php
session_start(); // Inicia a sessão

// $_SESSION['email'] != ""
if (!isset($_SESSION['email'])) { // Verifica se o usuário está logado
    header('Location: index.php'); // Redirecionando para a tela de usuário NÃO logado
} else {
    include('../db/conexao.php'); // Importando a conexão

    $id_usuario = $_SESSION['id_usuario']; // Pegando o valor da variável global de tipo SESSION e colocando em uma variável local

    $sql_usuario_dados = "SELECT * FROM $tabelaUsuario WHERE id_usuario = '$id_usuario'";

    // Requisitando os dados do usuário 
    $result = mysqli_query($conn, $sql_usuario_dados); // Execução do sql no banco e colocando-os na variável 'result' (EM FORMA DE TABELA)

    $dados_usuario = mysqli_fetch_assoc($result); // Percorrendo os dados do usuário e colocando-os em uma variável (dados_usuario) (EM FORMA DE ARRAY)

    // Salvando os dados do usuário na sessão e em variáveis locais
    $id_usuario = $_SESSION['id_usuario'] = $dados_usuario['id_usuario'];
    $nome = $_SESSION['nome'] = $dados_usuario['nome'];
    $email = $_SESSION['email'] = $dados_usuario['email'];
    $senha = $_SESSION['senha'] = $dados_usuario['senha'];
    $tel = $_SESSION['tel'] = $dados_usuario['telefone'];
    $data_nas = $_SESSION['data_nas'] = $dados_usuario['data_nas'];

    function filtrar($coluna, $classificacao)
    {
        include('../db/conexao.php');

        $sql_filter = "SELECT * FROM $tabelaImovel WHERE transacao = '$coluna' AND classificacao = '$classificacao'";
        $sql_query_filter = mysqli_query($conn, $sql_filter);

        $num_linha = $sql_query_filter->num_rows;
        if ($num_linha >= 1) {
            return $sql_query_filter;
        } else {
            return false;
        }
    }

    $verify_compra = $_SESSION['verify_compra'] = false;
    $verify_aluguel = $_SESSION['verify_aluguel'] = false;

    if (isset($_POST['btn_filtrar_aluguel'])) {
        $filtrar_aluguel = $_POST['filtrar_aluguel'];
        $verify_aluguel = $_SESSION['verify_aluguel'] = true;

        switch ($filtrar_aluguel) {
            case 'casas':
                $f_a = $_SESSION['f_a'] = filtrar("aluguel", "casa");
                break;

            case 'apartamentos':
                $f_a = $_SESSION['f_a'] = filtrar("aluguel", "apartamento");
                break;

            case 'terrenos':
                $f_a = $_SESSION['f_a'] = filtrar("aluguel", "terreno");
                break;

            default:
                echo "Nada encontrado!";
                break;
        }
    }


    if (isset($_POST['btn_filtrar_compra'])) {
        $filtrar_compra = $_POST['filtrar_compra'];
        $verify_compra = $_SESSION['verify_compra'] = true;

        switch ($filtrar_compra) {
            case 'casas':
                $f_c = $_SESSION['f_c'] = filtrar("compra", "casa");
                break;

            case 'apartamentos':
                $f_c = $_SESSION['f_c'] = filtrar("compra", "apartamento");
                break;

            case 'terrenos':
                $f_c = $_SESSION['f_c'] = filtrar("compra", "terreno");
                break;

            default:
                echo "Nada encontrado!";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Imobiliária DELTΔ | Início</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            border: none;
        }

        /* CONFIGURAÇÕES DE ADMIN */
        .config {
            z-index: 5;
        }

        .items_adm {
            width: 175px;
            font-size: .9em;
            transform: translate(-44%, -0%);
            left: 185px !important;
            top: 47px;
            display: none !important;
        }

        .items_adm a:hover {
            background: rgba(255, 255, 255, .4);
        }

        .showMenuAdmin {
            display: flex !important;
        }

        .img_equipe {
            width: 190px;
            height: 190px;
            border-radius: 50%;
        }

        .cont_equipe {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        form {
            width: 350px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: absolute;
            right: 20px;
            top: 85px;
            font-family: helvetica;
        }

        form label {
            font-weight: 300;
            margin-right: 5px;
        }

        form button {
            position: relative;
            left: -30px;
            background-color: transparent;
        }

        .filtrar_aluguel,
        .filtrar_compra {
            width: 100%;
            padding: 0 5px;
            border-radius: 5px;
            border: none;
            font-size: 1em;
        }

        .filtrar_aluguel::placeholder,
        .filtrar_compra::placeholder {
            opacity: .6;
        }

        .sessao {
            position: relative;
        }
    </style>
</head>


<body style="background-color:#22394b; font-family: Minion Pro; color:#e2dbdb;">
    <?php #echo $alerta ?>
    <img class="w3-image" src="../img/background-delta3.png" alt="Architecture" width="100%" height="950px">

    <div class="w3-top">
        <div class="w3-bar w3-black w3-wide w3-padding w3-card w3-left">
            <a href="../login/sair.php" class="w3-bar-item w3-button w3-padding-large">Sair</a>
            <?php
            // Verifica se o email atual é de admin
            if ($email == "alice@admin.com") {
                echo "
                    <a class='w3-bar-item w3-button w3-padding-large config'>
                            Tabelas
                        <div class='items_adm position-absolute row bg-dark rounded-bottom'>
                            <a href='../tabelas/tabelaUsuario.php' class='column text-decoration-none text-light container-fluid p-2 m-0'>Tabela (usuário)</a>
                            <a href='../tabelas/tabelaImovel.php' class='column text-decoration-none text-light container-fluid m-0 p-2'>Tabela (imovel)</a>
                        </div>
                    </a>
            	    ";
            }
            ?>
            <a href="../acaoUsuario/atualizar/index.php" class="w3-bar-item w3-button w3-padding-large">Atualizar</a>
            <a href="../acaoImobiliaria/adicionar/index.php" class="w3-bar-item w3-button w3-padding-large">Adicionar
                Imovel</a>
            <a href="#sobre" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sobre</a>
            <a href="#contato" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contato</a>
            <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-padding-large w3-button" title="More">Imóveis<i class="fa fa-caret-down"></i></button>
                <div class="items w3-dropdown-content w3-bar-block w3-card-4">
                    <a href="#aluguel" class="w3-bar-item w3-button">Para aluguel</a>
                    <a href="#compra" class="w3-bar-item w3-button">Para compra</a>
                </div>
            </div>
            <a class="w3-bar-item w3-button w3-padding-large w3-hover-black w3-hide-small" style="margin-left: 7%; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><?php echo "Bem vindo, <strong>" . $nome . "</strong>!" ?>
                <a class="w3-padding-large w3-hover-black w3-hide-small w3-right w3-button"><b>DELTΔ Imobiliária</a>
        </div>
    </div>

    <div class="w3-container w3-content w3-center w3-padding-33" style="max-width:1000px" id="band">
        <h2 id="sobre" class="w3-wide mt-2">Sobre nós</h2>
        <p class="w3-opacity"><i>DELTΔ IMOBILIÁRIA</i></p>
        <p class="w3-justify"> O mercado imobiliário no Brasil cresce a cada dia, pensando em atender de forma eficiente
            e
            diferenciada as necessidades de quem quer comprar, vender ou alugar um imóvel, a Imobiliária Superação por
            meio de
            um trabalho focado na ética, responsabilidade e profissionalismo, busca em primeiro lugar, conhecer e
            entender as
            necessidades de cada um de nossos clientes.
            A realização de um negócio é consequência de um bom trabalho e, para isso, contamos com profissionais
            altamente
            qualificados onde treinamento, acompanhamento e direcionamento são constantes.
            A excelência na qualidade do atendimento garante o resultado da nossa empresa e a satisfação dos nossos
            clientes.
            <br>
            Valorizamos a honestidade e a justiça, em qualquer ambiente, respeitando os parceiros internos e externos,
            os
            direitos e deveres da empresa e dos investidores.
        </p>
    </div>
    <br><br>

    <h3 style="text-align: center; margin: 0 0 35px 0">Time DELTΔ IMOBILIÁRIA</h3>
    <div class="cont_equipe">
        <div>
            <img class="img_equipe" src="../img/comp-equipe1.jpg" alt="homem">
            <h3>JOHNNY DEPP</h3>
            <p>Corretor imobiliário<br>Creci-CE</p>
        </div>

        <div>
            <img class="img_equipe" src="../img/comp-equipe2.jpg" alt="Homem">
            <h3>ATLAS GREENBIAR</h3>
            <p>Corretor imobiliário<br>Creci-CE</p>
        </div>

        <div>
            <img class="img_equipe" src="../img/comp-equipe4.jpg" alt="Homem">
            <h3>CRISTIAN ANGELO</h3>
            <p>Corretor imobiliário <br>Creci-CE</p>
        </div>

        <div>
            <img class="img_equipe" src="../img/comp-equipe3.jpg" alt="Mulher">
            <h3>ROBERTA PAIVA</h3>
            <p>Corretor imobiliário<br>Creci-CE</p>
        </div>
    </div>

    <p style="text-align:center;">Missão:<br>
        “Atuar no mercado imobiliário prestando serviços de qualidade, num crescimento contínuo para facilitar as
        atividades
        humanas,<br> respeitando as pessoas e o meio ambiente.”
    </p>


    <div class="w3-row-padding">
        <div class="w3-third w3-container w3-margin-bottom">
            <img src="https://quizlandia.club/wp-content/uploads/2019/11/casal-feliz-comprando-casa.jpg" alt="casa"
                style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-black">
                <p><b>ALUGAR</b></p>
                <p>A solução para adquirir mais recursos para dar sua entrada na compra do futuro lar. E mesmo quem já
                    possui o
                    valor de entrada mas não quer financiar um valor tão alto, pode usar essa estratégia para acumular
                    ainda mais
                    dinheiro e diminuir o valor das parcelas do provável financiamento.</p>
            </div>
        </div>

        <div class="w3-third w3-container w3-margin-bottom">
            <img src="../img/background-delta2.png" alt="delta" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-white">
                <p><b>NOS CONTRATAR</b></p>
                <p> Conhecimento de mercado, divulgação e atendimento, cuidados com o imóvel, Análise da reputação do
                    inquilino,
                    elaboração de contrato válido, agilidade na burocracia, prevenção de inadimplência, prevenção contra
                    ações
                    judiciais e
                    tranquilidade ao não precisar deslocar-se atrás de vários imóveis.
                </p>
            </div>
        </div>

        <div class="w3-third w3-container w3-margin-bottom">
            <img src="https://ddadvogados.com.br/wp-content/uploads/2018/11/251952-compra-de-imovel-em-comunhao-x-cuidados-que-o-casal-precisa-tomar.jpg"
                alt="residência" style="width:100%" class="w3-hover-opacity">
            <div class="w3-container w3-black">
                <p><b>COMPRAR</b></p>
                <p>Estabilidade, previsibilidade de custos,
                    Investimento certo e Mesmo que você não pense em se mudar agora, comprar um imóvel é uma ótima opção
                    se você
                    está buscando uma renda extra fixa. Você pode comprar e alugar o local e tem um teto garantido e
                    ainda por
                    cima, terá sempre um bem durável em seu nome.
                </p>
            </div>
        </div>
    </div>

    <section class="sessao">
        <div data-elementor-type="footer" data-elementor-id="496"
            class="elementor elementor-496 elementor-location-footer">
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

        <h2 id="aluguel" style="text-align:center" class="mb-4">Alugue</h2>
        <form action="" method="post">
            <label for="filtrar">Filtrar:</label>
            <input type="text" name="filtrar_aluguel" class="filtrar_aluguel form-control p-1" id="filtrar"
                placeholder="Casas, apartamentos e terrenos">
            <button type="submit" name="btn_filtrar_aluguel">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="#000">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </button>
        </form>

        <div class="w3-row-padding w3-scale">
            <?php
            include("../db/conexao.php");

            $sql_imovel = "SELECT * FROM $tabelaImovel WHERE transacao = 'aluguel' LIMIT 10";
            $sql_query = mysqli_query($conn, $sql_imovel);
            $numero_linha = $sql_query->num_rows;
            if ($numero_linha >= 1) {
                if (!$verify_aluguel) {
                    while ($dado = mysqli_fetch_assoc($sql_query)) {
                        echo "
                            <div style='overflow: hidden; position: relative;' class='w3-col l3 m6 w3-margin-bottom'>
                                <a href='../acaoImobiliaria/deletar/index.php?deletar=$dado[id_imovel]' style='color: #000'>
                                    <div style='background: rgba(0, 0, 0, .5); position: absolute; top: -60px; right: -60px; width: 115px; height: 115px; border-radius: 50%'></div>
                                    <svg style='filter: invert(1); opacity: .8; position: absolute; top: 0; right: 0; margin: 12px 12px 0 0' xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                        <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z' />
                                    </svg>
                                </a>
                                <img src='../acaoImobiliaria/arquivos/$dado[path]' alt='$dado[nome_img]' style='width:100% ;height:200px;'>
                                <h3>R$$dado[valor]</h3>
                                <p class='w3-opacity'>$dado[cidade]</p>
                                <p>$dado[descricao]</p>
                                <p><button class='w3-button w3-light-grey w3-block'>COMPRAR</button></p>
                            </div>
                        ";
                    }
                } else if ($verify_aluguel) {
                    if (isset($_POST['btn_filtrar_aluguel'])) {
                        if ($f_a == false) {
                            echo "<div style='width: 100vw; height: 100vh' class='d-flex align-items-center justify-content-center'>
                                    <p class'opacity-75 fs-5'>Nada disponível no momento, tente mais tarde!</p>
                                </div>";
                        } else {
                            while ($dado = mysqli_fetch_assoc($f_a)) {
                                echo "
                                    <div style='overflow: hidden; position: relative;' class='w3-col l3 m6 w3-margin-bottom'>
                                        <a href='../acaoImobiliaria/deletar/index.php?deletar=$dado[id_imovel]' style='color: #000'>
                                            <div style='background: rgba(0, 0, 0, .5); position: absolute; top: -60px; right: -60px; width: 115px; height: 115px; border-radius: 50%'></div>
                                            <svg style='filter: invert(1); opacity: .8; position: absolute; top: 0; right: 0; margin: 12px 12px 0 0' xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                                <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z' />
                                            </svg>
                                        </a>
                                        <img src='../acaoImobiliaria/arquivos/$dado[path]' alt='$dado[nome_img]' style='width:100% ;height:200px;'>
                                        <h3>R$$dado[valor]</h3>
                                        <p class='w3-opacity'>$dado[cidade]</p>
                                        <p>$dado[descricao]</p>
                                        <p><button class='w3-button w3-light-grey w3-block'>COMPRAR</button></p>
                                    </div>
                                ";
                            }
                        }
                    }
                }
            } else {
                echo "<div style='width: 100vw; height: 100vh' class='d-flex align-items-center justify-content-center'>
                        <p class'opacity-25 fs-3'>Não há imóveis para alugar!</p>
                    </div>";
            }
            ?>
        </div>
    </section>

    <section class="sessao">
        <div data-elementor-type="footer" data-elementor-id="496"
            class="elementor elementor-496 elementor-location-footer">
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

        <h2 id="compra" style="text-align:center" class="mb-4">Compre</h2>
        <form action="" method="post">
            <label for="filtrar">Filtrar:</label>
            <input type="text" name="filtrar_compra" class="filtrar_compra form-control p-1" id="filtrar"
                placeholder="Casas, apartamentos e terrenos">
            <button type="submit" name="btn_filtrar_compra">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="#000">
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg>
            </button>
        </form>

        <div class="w3-row-padding w3-scale">
            <?php
            include("../db/conexao.php");

            $sql_imovel = "SELECT * FROM $tabelaImovel WHERE transacao = 'compra'";
            $sql_query = mysqli_query($conn, $sql_imovel);
            $numero_linha = $sql_query->num_rows;
            if ($numero_linha >= 1) {
                if (!$verify_compra) {
                    while ($dado = mysqli_fetch_assoc($sql_query)) {
                        echo "
                            <div style='overflow: hidden; position: relative;' class='w3-col l3 m6 w3-margin-bottom'>
                                <a href='../acaoImobiliaria/deletar/index.php?deletar=$dado[id_imovel]' style='color: #000'>
                                    <div style='background: rgba(0, 0, 0, .5); position: absolute; top: -60px; right: -60px; width: 115px; height: 115px; border-radius: 50%'></div>
                                    <svg style='filter: invert(1); opacity: .8; position: absolute; top: 0; right: 0; margin: 12px 12px 0 0' xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                        <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z' />
                                    </svg>
                                </a>
                                <img src='../acaoImobiliaria/arquivos/$dado[path]' alt='$dado[nome_img]' style='width:100% ;height:200px;'>
                                <h3>R$$dado[valor]</h3>
                                <p class='w3-opacity'>$dado[cidade]</p>
                                <p>$dado[descricao]</p>
                                <p><button class='w3-button w3-light-grey w3-block'>COMPRAR</button></p>
                            </div>
                        ";
                    }
                } else {
                    if ($filtrar_compra) {
                        if ($f_c == false) {
                            echo "<div style='width: 100vw; height: 80vh' class='d-flex align-items-center justify-content-center'>
                                    <p class'opacity-75 fs-5'>Nada disponível no momento, tente mais tarde!</p>
                                </div>";
                        } else {
                            while ($dado = mysqli_fetch_assoc($f_c)) {
                                echo "
                                    <div style='overflow: hidden; position: relative;' class='w3-col l3 m6 w3-margin-bottom'>
                                        <a href='../acaoImobiliaria/deletar/index.php?deletar=$dado[id_imovel]' style='color: #000'>
                                            <div style='background: rgba(0, 0, 0, .5); position: absolute; top: -60px; right: -60px; width: 115px; height: 115px; border-radius: 50%'></div>
                                            <svg style='filter: invert(1); opacity: .8; position: absolute; top: 0; right: 0; margin: 12px 12px 0 0' xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                                <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z' />
                                            </svg>
                                        </a>
                                        <img src='../acaoImobiliaria/arquivos/$dado[path]' alt='$dado[nome_img]' style='width:100% ;height:200px;'>
                                        <h3>R$$dado[valor]</h3>
                                        <p class='w3-opacity'>$dado[cidade]</p>
                                        <p>$dado[descricao]</p>
                                        <p><button class='w3-button w3-light-grey w3-block'>COMPRAR</button></p>
                                    </div>
                                ";
                            }
                        }
                    }
                }
            } else {
                echo "<div style='width: 100vw; height: 100vh' class='d-flex align-items-center justify-content-center'>
                                <p class'opacity-25 fs-3'>Não há imóveis para comprar!</p>
                            </div>";
            }
            ?>
        </div>
    </section>

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

    <!-- Seção Contato -->
    <div class="w3-container w3-padding-large w3-#0073e6">
        <h4 id="contato"><b>Contatos</b></h4>
        <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
            <div class="w3-third w3-dark-grey">
                <p><i class="fa fa-envelope w3-xxlarge w3-text-white"></i></p>
                <p>deltaimobiliaria@gmail.com</p>
            </div>
            <div class="w3-third w3-gray">
                <p><i class="fa fa-map-marker w3-xxlarge w3-text-white"></i></p>
                <p>Paraipaba, CE</p>
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

        <script src="../js/script.js"></script>
        <?php #if ($_SESSION['alerta']) "<script src='../js/scriptAlerta'></script>" ?>
</body>

</html>