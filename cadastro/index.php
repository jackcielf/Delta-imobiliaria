<?php
    session_start(); // Inicia a sessão
    
    if (!isset($_SESSION['email'])) { // Verifica se o usuário está logado
        if (isset($_POST['submit'])) { // Verifica se o botão foi clicado
            // Validação de inputs
            if (strlen($_POST['nome']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['senha']) == 0 || strlen($_POST['tel']) == 0 || strlen($_POST['data_nas']) == 0) {
                print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Por favor, preencha todos os campos!</p>             
                        </div>
                ");
            } else if (strlen($_POST['senha']) < 7){
                print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>A senha deve ter no mínimo 7 caracteres!</p>             
                        </div>
                ");
            } else if (strlen($_POST['tel']) < 10) {
                print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>O telefone deve ter no mínimo 11 caracteres!</p>             
                        </div>
                ");

            } else if (strlen($_POST['data_nas']) < 10){
                print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>A data de nascimento deve ter no mínimo 10 caracteres!</p>             
                        </div>
                ");
            } else {
               include_once('cadastro.php'); // Importando o arquivo de realização de cadastro
            }
        }
    } else {
        header('Location: ../principal/indexPrincipal.php'); // Redirecionando para a tela principal de usuário logado
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DELTΔ Imobiliária | Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/cadastro.css">
</head>

<body>
    <a href="../principal/index.php">
        <img style="margin-left:3%; height:70px; width:87px; filter: invert(1)" class="img_absolute" src="../img/seta-voltar.png" alt="Voltar">
    </a>
    
    <div class="7">
        <img style="margin-left:6%; height:325px; width:327px;" class="img_absolute" src="../img/ilustre1.png" alt="Avatar" class="avatar">
        <img style="margin-left:65%; height:325px; width:327px;" class="img_absolute" src="../img/ilustre1.png" alt="Avatar" class="avatar">
    </div>

    <form action="" method="POST">
        <br>
        <div class="imgcontainer">
            <img src="../img/logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div class="lado1">
                <div class="box_input">
                    <label><b>CPF/CNPJ:</b></label>
                    <input class="input_size" type="text" placeholder="Insira seu CPF/CNPJ" name="cpfcnpj">
                </div>

                <div class="box_input">
                    <label><b>Nome</b></label>
                    <input class="input_size" type="text" placeholder="Insira seu nome" name="nome">
                </div>

                <div class="box_input">
                    <label><b>E-mail:</b></label>
                    <input class="input_size" type="email" placeholder="Insira seu e-mail" name="email">
                </div>
                <div class="box_input">
                    <label><b>senha</b></label>
                    <input class="input_size" type="password" placeholder="Insira a sua senha" name="senha">
                </div>
            </div>
            <div class="lado2">
                <div class="box_input">
                    <label><b>Telefone</b></label>
                    <input class="input_size" type="number" placeholder="00 000000000" name="tel">
                </div>
                <div class="box_input">
                    <label><b>Data de nascimento</b></label>
                    <input class="input_size" type="text" placeholder="00/00/0000" name="data_nas">
                </div>

                <div class="box_input">
                    <button type="submit" name="submit">Enviar</button>
                </div>
            </div>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>