<?php 
    // Dados de conexão
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $bd = 'imobiliaria';
    
    // Tabelas
    $tabelaUsuario = 'tb_usuario';
    $tabelaImovel = 'tb_imovel';
    
    // Variável de conexão
    $conn = mysqli_connect($host, $usuario, $senha, $bd);

    // Verifica a conexão
	if(!$conn){
		die("ERROR: Não foi possível conectar a base de dados " . mysqli_connect_error());
	}
?>