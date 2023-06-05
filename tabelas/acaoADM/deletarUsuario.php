<?php
    session_start();
    
    if (!empty($_GET['id_usuario'])) { // Verificando se o id do usuario esta na URL
        include("../../db/conexao.php");

    	$id_usuario = $_GET['id_usuario'];
    	
        // Removendo os imóveis cadastrados por esse usuário, caso haja, do db
        $sql = "SELECT * FROM $tabelaImovel WHERE id_usuario = $id_usuario";
        $sql_query = mysqli_query($conn, $sql);
        $numero_linha = $sql_query -> num_rows;
    	if($numero_linha >= 1){
            $codigo_sql = "DELETE FROM $tabelaImovel WHERE id_usuario = $id_usuario";
            $sql_query = $conn -> query($codigo_sql);
        }
        
        // Removendo o usuário do db
        $sql_usuario = "DELETE FROM $tabelaUsuario WHERE id_usuario = $id_usuario";
        
        $conn -> query($sql_usuario);
        
        header("Location: ../tabelaUsuario.php");
    } else {
    	if (!isset($_SESSION['email'])) {
    	    header("Location: ../../principal/indexPrincipal.php");
    	} else {
    	    header("Location: ../../login/index.php");
    	}
    }
?>