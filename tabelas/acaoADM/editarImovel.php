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
				$valor = $dado['valor'];
				$descricao = $dado['descricao'];
				$transacao = $dado['transacao'];
				$classificacao = $dado['classificacao'];
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
        $valor = filter_input(INPUT_POST, "valor", FILTER_DEFAULT);
    		$referencia = filter_input(INPUT_POST, "referencia", FILTER_DEFAULT);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_DEFAULT);
    		$transacao = filter_input(INPUT_POST, "transacao", FILTER_DEFAULT);
        $classificacao = filter_input(INPUT_POST, "classificacao", FILTER_DEFAULT);

        $sql_at = "UPDATE $tabelaImovel SET areatotal = '$areatotal', areacoberta = '$areacoberta', estado = '$estado', cidade = '$cidade', rua = '$rua', valor= '$valor', descricao = '$descricao', transacao = '$transacao', classificacao = '$classificacao', referencia = '$referencia' WHERE id_imovel = $id_imovel";
    		
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .imagem {
            width: 100%;
            min-height: 700px;
            position: absolute;
            z-index: -10;
            background-repeat: no-repeat;
        }
        .container {
            max-width: 700px;
        }
    </style>
</head>

<body>
    <img class="imagem" src="../../img/fundo.jpg" alt="">

    <a href="../tabelaImovel.php">
        <img style="margin-left:3%; height:70px; width:87px" class="img_absolute" src="../../img/seta-voltar.png" alt="Voltar">
    </a>

    <form method="POST">
        <div class="imgcontainer p-0 m-0">
            <img src="../../img/logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div class="lado1">
                <div class="box_input">
                    <label><b>Estado:</b></label>
                    <input class="input_size" type="text" placeholder="Insira seu Estado" name="estado"
                        value="<?php echo $estado ?>">
                </div>

                <div class="box_input">
                    <label><b>Cidade:</b></label>
                    <input class="input_size" type="text" placeholder="Insira sua Cidade" name="cidade"
                        value="<?php echo $cidade ?>">
                </div>

                <div class="box_input">
                    <label><b>Rua</b></label>
                    <input class="input_size" type="text" placeholder="Insira a sua Rua" name="rua"
                        value="<?php echo $rua ?>">
                </div>

                <div class="box_input">
                    <label><b>Referência:</b></label>
                    <input class="input_size" type="text" name="referencia" placeholder="opcional"
                        value="<?php echo $referencia ?>">
                </div>

                <div class="box_input">
                    <label><b>Descrição do Imóvel:</b></label>
                    <input class="input_size" type="text" placeholder="Descrição do imóvele cômodos" name="descricao"
                        value="<?php echo $descricao ?>">
                </div>

                <div class="box_input">
                    <label><b>Preço</b></label>
                    <input class="input_size" type="number" placeholder="Insira o preço do imóvel " name="valor"
                        value="<?php echo $valor ?>">
                </div>
            </div>

            <div class="lado2">
                <div class="box_input">
                    <label><b>Área total(m²):</b></label>
                    <input class="input_size" type="text" placeholder="Insira a área total(m²)" name="areatotal"
                        value="<?php echo $areatotal ?>">
                </div>

                <div class="box_input">
                    <label><b>Área coberta(m²):</b></label>
                    <input class="input_size" type="text" placeholder="Insira a área coberta(m²)" name="areacoberta"
                        value="<?php echo $areacoberta ?>">
                </div>

                <div>
                    <b>Transação:</b>
                    <select name="transacao">
                        <option class="formularies" value="aluguel" <?php echo ($transacao=='aluguel' ) ? 'selected'
                            : '' ?>>Aluguel</option>
                        <option class="formularies" value="compra" <?php echo ($transacao=='compra' ) ? 'selected' : ''
                            ?>>Compra</option>
                    </select>
                </div>

                <div>
                    <b>ClassificaçÃo do Imóvel</b>
                    <select name="classificacao">
                        <option class="formularies" value="casa" <?php echo ($classificacao=='casa' ) ? 'selected' : ''
                            ?>>Casa</option>
                        <option class="formularies" value="apartamento" <?php echo ($classificacao=='apartamento' )
                            ? 'selected' : '' ?>>Apartamento</option>
                        <option class="formularies" value="salacomercial" <?php echo ($classificacao=='salacomercial' )
                            ? 'selected' : '' ?>>Sala Comercial</option>
                        <option class="formularies" value="terreno" <?php echo ($classificacao=='terreno' ) ? 'selected'
                            : '' ?>>Terreno</option>
                    </select>
                </div>
                <br>
                <div class="box_input">
                    <button type="submit" name="alterar">Salvar alterações</button>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>