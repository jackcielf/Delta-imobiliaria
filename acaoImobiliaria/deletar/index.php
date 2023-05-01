<?php
    session_start();
    
    include("../../db/conexao.php");
    
    if(isset($_GET['deletar'])){
        $id_imo = $_GET['deletar'];
        $result = $conn -> query("SELECT * FROM $tabelaImovel WHERE id_imovel = '$id_imo'");
        $dado = mysqli_fetch_assoc($result);
        
        // Verificando se o imóvel selecionado para deletar é deste usuário
        $id_usuario = $_SESSION['id_usuario'];
        $email = $_SESSION['email'];
        if ($dado['id_usuario'] == $id_usuario || $email == "alice@admin.com") {
            $conn -> query("DELETE FROM $tabelaImovel WHERE id_imovel = '$id_imo'"); // Deleta o imóvel do bd
        } else {
            $_SESSION['alerta'] = true; // Ativando mensagem de alerta
        }
        
        header("Location: ../../principal/indexPrincipal.php");
    }
?>