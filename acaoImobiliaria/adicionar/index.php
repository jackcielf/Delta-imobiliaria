<?php
    session_start();

    if (!$_SESSION['id_usuario']) {
        print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                    <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Usuario não identificado!</p>             
                </div>");
    }
    
    if ($_SESSION['email']) {
        if(isset($_POST['submit'])) {
            if (strlen($_POST['estado']) == 0 || strlen($_POST['cidade']) == 0 || strlen($_POST['areatotal']) == 0 || strlen($_POST['areacoberta']) == 0) {
                print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Por favor, preencha todos os campos!</p>             
                        </div>");
            } else if (strlen($_POST['areatotal']) < 2 || strlen($_POST['areacoberta']) < 2) {
                print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Por favor, digite uma área válida!</p>             
                        </div>");
            } else {
                include_once('adicionar.php');

                if (isset($_FILES['arquivo'])) {
                    $arquivo = $_FILES['arquivo'];
            
                    enviarArquivo($arquivo['error'], $arquivo['size'], $arquivo['name'], $arquivo["tmp_name"]);
                }
            }
        }
    } else {
        header('Location: ../../principal/index.php');
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DELTΔ Imobiliária | Adição de imóvel</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../styles/adicionarImovel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <style>
        .imagem {
            width: 100%;
            min-height: 700px;
            position: absolute;
            z-index: -10;
            background-repeat: no-repeat;
        }
        .container {
            max-width: 700px;
        }
    </style>
</head>

<body>
    <img class="imagem" src="../../img/fundo.jpg" alt="">
    
    <a href="../../principal/indexPrincipal.php">
        <img style="margin-left:3%; height:70px; width:87px;" class="img_absolute" src="../../img/seta-voltar.png" alt="Voltar">
    </a>
    
    <form enctype="multipart/form-data" method="POST">
        <br>
        <div class="imgcontainer">
            <img src="../../img/logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div class="lado1">
                <div class="box_input">
                    <label><b>Estado:</b></label>
                    <input class="input_size" type="text" placeholder="Insira seu Estado" name="estado">
                </div>

                <div class="box_input">
                    <label><b>Cidade:</b></label>
                    <input class="input_size" type="text" placeholder="Insira sua Cidade" name="cidade">
                </div>

                <div class="box_input">
                    <label><b>Rua</b></label>
                    <input class="input_size" type="text" placeholder="Insira a sua Rua" name="rua">
                </div>

                <div class="box_input">
                    <label><b>Referência:</b></label>
                    <input class="input_size" type="text" name="referencia" placeholder="opcional">
                </div>

                <div class="box_input">
                    <label><b>Descrição do Imóvel:</b></label>
                    <input class="input_size" type="text" placeholder="Descrição do imóvele cômodos" name="descricao">
                </div>

                <div class="box_input">
                    <label><b>Preço</b></label>
                    <input class="input_size" type="number" placeholder="Insira o preço do imóvel " name="valor">
                </div>
            </div>

            <div class="lado2">
                <div class="box_input">
                    <label><b>Área total(m²):</b></label>
                    <input class="input_size" type="text" placeholder="Insira a área total(m²)" name="areatotal">
                </div>

                <div class="box_input">
                    <label><b>Área coberta(m²):</b></label>
                    <input class="input_size" type="text" placeholder="Insira a área coberta(m²)" name="areacoberta">
                </div>

                <div>
                    <b>Transação:</b>
                    <select name="transicao">
                        <option class="formularies" value="aluguel">Aluguel</option>
                        <option class="formularies" value="compra">Compra</option>
                    </select>
                </div>

                <div>
                    <b>ClassificaçÃo do Imóvel</b>
                    <select name="classificacao">
                        <option class="formularies" value="casa">Casa</option>
                        <option class="formularies" value="apartamento">Apartamento</option>
                        <option class="formularies" value="salacomercial">Sala Comercial</option>
                        <option class="formularies" value="terreno">Terreno</option>
                    </select>
                </div><br>

                <div class="formularies">
                    <label><b>Anexar imagem:</b></label>
                    <input type="file" name="arquivo">
                </div>

                <div>
                    <br><br><br>
                    <div class="box_input">
                        <button type="submit" name="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>