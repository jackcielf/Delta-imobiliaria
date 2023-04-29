<?php
    session_start();
	
	// Pegando o id da tarefa e requisitando os dados
    if (!empty($_GET['id_imovel'])) {
    	$id_imovel = $_GET['id_imovel'];
    	
        include('../../db/conexao.php');
                
		$codigo_sql = "SELECT * FROM $tabelaImovel WHERE id_imovel = $id_imovel";
		$sql_query = mysqli_query($conn, $codigo_sql);
                
		$numero_linha = $sql_query -> num_rows;
		if ($numero_linha >= 1) {
			while($dado = mysqli_fetch_assoc($sql_query)) {
				$areatotal = $dado['areatotal'];
				$areacoberta = $dado['areacoberta'];
				$estado = $dado['estado'];
				$cidade = $dado['cidade'];
				$rua = $dado['rua'];
				$transacao = $dado['transacao'];
				$referencia = $dado['referencia'];
            }
		} else {
        	header("Location: ../../principal/indexPrincipal.php");
        }
    } else {
        if (!isset($_SESSION['email'])) {
            header("Location: ../../principal/indexPrincipal.php");
        } else {
            header("Location: ../../login/index.php");
        }
    }
    
    // Verificando o click do botão e realizando a atualização dos dados
    if (isset($_POST['alterar'])) {
        if (strlen($_POST['estado']) == 0 || strlen($_POST['cidade']) == 0 || strlen($_POST['areatotal']) == 0 || strlen($_POST['areacoberta']) == 0) {
            print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                        <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Por favor, preencha todos os campos!</p>             
                    </div>"
            );
                                
        } else if (strlen($_POST['areatotal']) < 2 || strlen($_POST['areacoberta']) < 2) {
            print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                        <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Por favor, digite uma área válida!</p>             
                    </div>
            ");
        } else {
            include('../../db/conexao.php');
    	    
    		$id_imovel = $_GET['id_imovel'];
    		$areatotal = filter_input(INPUT_POST, "areatotal", FILTER_DEFAULT);
            $areacoberta = filter_input(INPUT_POST, "areacoberta", FILTER_DEFAULT);
    		$estado = filter_input(INPUT_POST, "estado", FILTER_DEFAULT);
    		$cidade = filter_input(INPUT_POST, "cidade", FILTER_DEFAULT);
    		$rua = filter_input(INPUT_POST, "rua", FILTER_DEFAULT);
    		$referencia = filter_input(INPUT_POST, "referencia", FILTER_DEFAULT);
    		$transacao = filter_input(INPUT_POST, "transacao", FILTER_DEFAULT);
    		
    		$sql_at = "UPDATE $tabelaImovel SET areatotal = '$areatotal', areacoberta = '$areacoberta', estado = '$estado', cidade = '$cidade', rua = '$rua', referencia = '$referencia', transacao = '$transacao' WHERE id_imovel = $id_imovel";
    		
    		mysqli_query($conn, $sql_at);
    		
    		header("Location: ../tabelaImovel.php");
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DELTΔ Imobiliária | Edição de anúncio</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../styles/adicionarImovel.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>

<body>
    <div class="7">
        <img style="margin-left:-4%; height:425px; width:577px;" class="img_absolute" src="C:\Users\Wilson Farias\Downloads\pngwing.com (2).png" alt="Avatar" class="avatar">
        <img style="margin-left:61%; height:425px; width:577px;" class="img_absolute" src="C:\Users\Wilson Farias\Downloads\pngwing.com (2).png" alt="Avatar" class="avatar">
    </div>

    <form action="" method="POST"><br>
        <div class="imgcontainer">
            <img src="C:\Users\Wilson Farias\Downloads\Elegant White and Black Real Estate Agent Logo (7).png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div class="lado1">
                <div class="box_input">
                    <label><b>Estado:</b></label>
                    <input class="input_size" type="text" placeholder="Insira seu Estado" name="estado" required>
                </div>
                <div class="box_input">
                    <label><b>Cidade:</b></label>
                    <input class="input_size" type="text" placeholder="Insira sua Cidade" name="cidade" required>
                </div>

                <div class="box_input">
                    <label><b>Rua</b></label>
                    <input class="input_size" type="text" placeholder="Insira a sua Rua" name="rua" required>
                </div>

                <div class="box_input">
                    <label>Referência</label>
                    <input class="input_size" type="text" name="referencia" placeholder="Opcional" required>
                </div>
            </div>

            <div class="lado2">
                <div class="box_input">
                    <label><b>Área total(m²):</b></label>
                    <input class="input_size" type="text" placeholder="Insira a área total(m²)" name="areatotal" required>
                </div>

                <div class="box_input">
                    <label><b>Área coberta(m²):</b></label>
                    <input class="input_size" type="text" placeholder="Insira a área coberta(m²)" name="areacoberta" required>
                </div>

                <div class="tot">
                    <div class="transacao">
                        <div style="padding-top: 20px">
                            <p style="position: relative; margin: 0">Transação:</p>
                            <select placeholder="transação" name="transacao">
                                <option class="formularies" value="aluguel">Aluguel</option>
                                <option class="formularies" value="compra">Compra</option>
                            </select>
                        </div>
                    </div>
                    <div class="anex">
                        <div style="margin-left:54% ;" class="formularies">
                            <label>Anexar imagem:</label>
                            <input type="file" name="img" required>
                        </div>
                    </div>
                </div>

                <div style="padding-top: 20px; margin: 0" class="box_input">
                    <button type="submit" name="alterar">Alterar anúncio</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>