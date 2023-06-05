<?php 
    session_start(); // Inicia a sessão
    
    /* EXPLICAÇÃO DO ISSET - Verifica se uma variável tem valor nulo
        isset("jack@gmail.com"); // NOT NULL (tem email)
        isset(""); // NULL
        
        !isset("jack@gmail.com"); // NULL (não tem email)
        !isset(""); // NOT NULL
    */

    if (!isset($_SESSION['email'])) { // Verifica se o usuário está logado
        if (isset($_POST['submit'])) { // Verifica se o botão foi clicado
            // Validação de inputs
            if (strlen($_POST['email']) == 0 || strlen($_POST['senha']) == 0) {
                print_r("<div class='container-fluid text-center p-3 ms-1 rounded-4 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Por favor, preencha todos os campos!</p>
                        </div>
                ");
            } else if (strlen($_POST['senha']) < 7){
                print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>A senha deve ter no mínimo 7 caracteres!</p>             
                        </div>
                ");
            } else {
                include_once('login.php'); // Importando o arquivo de realização de login
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
    <title>DELTΔ Imobiliária | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../styles/login.css">

    <style>
        .imagem {
            width: 100%;
            min-height: 700px;
            position: absolute;
            z-index: -10;
            background-repeat: no-repeat;
        }
        .container {
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <img class="imagem" src="https://i.pinimg.com/originals/dc/4e/70/dc4e70b14b7984160db074d3963152d1.jpg" alt="">

    <a href="../principal/index.php">
        <img style="margin-left:3%; height:70px; width:87px;" class="img_absolute" src="../img/seta-voltar.png" alt="Voltar">
    </a>

    <div class="imgs">
        <img style="margin-left:7%;" class="img_absolute" src="../img/ilustre1.png" alt="Ilustre" class="avatar">
        <img style="margin-left:70%;" class="img_absolute" src="../img/ilustre1.png" alt="Ilustre" class="avatar">
    </div>

        <form action="" method="POST">
            <br>
            <div class="imgcontainer">
                <img src="../img/logo.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>E-mail</b></label>
                <input type="email" placeholder="Insira seu e-mail" name="email">

                <label><b>Senha</b></label>
                <input type="password" placeholder="Insira sua senha" name="senha">

                <button type="submit" name="submit">Enviar</button>
                <label>
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>