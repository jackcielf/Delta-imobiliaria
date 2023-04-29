<?php
    session_start(); // Inicia a sessão
    
    if (!empty($_GET['id_imovel'])) { // Verificando se há um id na url
    	$id_imovel = $_GET['id_imovel']; // Pegando o id do imóvel da url
    	
        include("../../db/conexao.php");
        
        $codigo_sql = "DELETE FROM $tabelaImovel WHERE id_imovel = $id_imovel";
        
        $sql_query = $conn -> query($codigo_sql);
        
        header("Location: ../tabelaImovel.php");
    } else {
        if (!isset($_SESSION['email'])) {
    	    header("Location: ../../principal/indexPrincipal.php");
        } else {
            header("Location: ../../login/index.php");
        }
    }
?>