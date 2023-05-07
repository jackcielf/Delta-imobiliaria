<?php
	session_start();
	
	include_once("../../db/conexao.php"); // Importa a conexão

	$mat = $_SESSION["id_usuario"];

    $cpfcnpj = $_POST['cpfcnpj'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tel = $_POST['tel'];
    $data_nas = $_POST['data_nas'];

	// Cria comando SQL para inserir os valores da tabela cadastro
    mysqli_query($conn, "UPDATE $tabelaUsuario set cpf_cnpj = '$cpfcnpj', nome = '$nome', email = '$email', senha = '$senha', telefone = '$tel', data_nas = '$data_nas' WHERE id_usuario = '$mat'");
	
	header('Location: ../../principal/indexPrincipal.php');
?>