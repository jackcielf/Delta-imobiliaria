<?php
    include("../db/conexao.php"); // Importa a conexão
    
    // Pegando o digitado nos inputs 
    $email = filter_input(INPUT_POST, 'email');
    $senha = filter_input(INPUT_POST, 'senha');

    $sql = "SELECT id_usuario, email, nome, telefone, data_nas FROM $tabelaUsuario WHERE email = '$email' AND senha = '$senha'";
    
    $result = mysqli_query($conn, $sql); // Execução do sql no banco

    if ($result) { // Verificação de execução bem sucedida
	    if ($obj = $result -> fetch_object()) { // Percorrendo os dados do usuário e colocando-os em uma variável (obj)
            // Colocando os dados usuário em variáveis SESSION (globais)
            $_SESSION['id_usuario'] = $obj -> id_usuario;
            $_SESSION['email'] = $obj -> email;
            $_SESSION['nome'] = $obj -> nome;
            $_SESSION['tel'] = $obj -> telefone;
            $_SESSION['data_nas'] = $obj -> data_nas;

            header('Location: ../principal/indexPrincipal.php'); // Redirecionando para tela de usuário logado
	    } else {
            print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                        <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>E-mail e/ou senha incorreto!</p>             
                    </div>
            ");
	    }
	} else {
	    print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                    <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Erro ao conectar a base de dados!</p>             
                </div>
        ");
    }
?>