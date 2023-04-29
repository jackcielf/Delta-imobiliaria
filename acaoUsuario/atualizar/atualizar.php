<?php
	session_start();
	
	include_once("../../db/conexao.php"); // Importa a conexão

	$mat = $_SESSION["id_usuario"];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['tel'];
    $data_nas = $_POST['data_nas'];

	// Cria comando SQL para inserir os valores da tabela cadastro
	mysqli_query($conn, "UPDATE $tabelaUsuario set nome = '$nome', email = '$email', senha = '$senha', telefone = '$telefone', data_nas = '$data_nas' WHERE id_usuario = '$mat'");
	
	header('Location: ../../principal/indexPrincipal.php');
?>