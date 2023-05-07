<?php
    session_start();

    if (!empty($_GET['id_usuario'])) {
    	$id_usuario = $_GET['id_usuario'];
    	
    	include('../../db/conexao.php');
                
		$sql = "SELECT * FROM $tabelaUsuario WHERE id_usuario = $id_usuario";
		$sql_query = mysqli_query($conn, $sql);
                
		$numero_linha = $sql_query -> num_rows;
		if ($numero_linha >= 1) {
			while($dado = mysqli_fetch_assoc($sql_query)) {
			    $cpf_cnpj = $dado['cpf_cnpj'];
				$nome = $dado['nome'];
				$email = $dado['email'];
				$senha = $dado['senha'];
				$tel = $dado['telefone'];
				$data_nas = $dado['data_nas'];
            }
		} else {
        	header("Location: ../../principal/indexPrincipal.php");
        }
    } else {
        header("Location: ../indexPrincipal.php");
    }

    if (isset($_POST['alterar'])) {
        // Validação de inputs
        if (strlen($_POST['nome']) == 0 || strlen($_POST['email']) == 0 || strlen($_POST['senha']) == 0 || strlen($_POST['tel']) == 0 || strlen($_POST['data_nas']) == 0) {
            print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                        <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Por favor, preencha todos os campos!</p>             
                    </div>
            ");
        } else if (strlen($_POST['senha']) < 7){
            print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                        <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>A senha deve ter no mínimo 7 caracteres!</p>             
                    </div>
            ");
        } else if (strlen($_POST['tel']) < 10) {
            print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                        <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>O telefone deve ter no mínimo 11 caracteres!</p>             
                    </div>
            ");
        } else if (strlen($_POST['data_nas']) < 10){
            print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                        <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>A data de nascimento deve ter no mínimo 10 caracteres!</p>             
                    </div>
            ");
        } else {
        	include('../../db/conexao.php');
	
			$id_usuario = $_GET['id_usuario'];
			$cpf_cnpj = filter_input(INPUT_POST, "cpfcnpj", FILTER_DEFAULT);
			$nome = filter_input(INPUT_POST, "nome", FILTER_DEFAULT);
			$email = filter_input(INPUT_POST, "email", FILTER_DEFAULT);
			$senha = filter_input(INPUT_POST, "senha", FILTER_DEFAULT);
			$tel = filter_input(INPUT_POST, "tel", FILTER_DEFAULT);
			$data_nas = filter_input(INPUT_POST, "data_nas", FILTER_DEFAULT);
	        
			$sql_at = "UPDATE $tabelaUsuario SET nome = '$nome', cpf_cnpj = '$cpf_cnpj', email = '$email', senha = '$senha', telefone = '$tel', data_nas = '$data_nas' WHERE id_usuario = $id_usuario";
			
			mysqli_query($conn, $sql_at);
			
			header("Location: ../tabelaUsuario.php");
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DELTΔ Imobiliária | Edição cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles/cadastro.css">
</head>

<body>
    <a href="../tabelaUsuario.php">
        <img style="margin-left:3%; height:70px; width:87px; filter: invert(1)" class="img_absolute" src="../../img/seta-voltar.png" alt="Voltar">
    </a>

    <div class="7">
        <img style="margin-left:6%; height:325px; width:327px;" class="img_absolute" src="../../img/ilustre1.png" alt="Avatar" class="avatar">
        <img style="margin-left:65%; height:325px; width:327px;" class="img_absolute" src="../../img/ilustre1.png" alt="Avatar" class="avatar">
    </div>

    <form action="" method="POST">
        <br>
        <div class="imgcontainer">
            <img src="../../img/logo.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div class="lado1">
                <div class="box_input">
                    <label><b>CPF/CNPJ:</b></label>
                    <input class="input_size" type="text" placeholder="Insira seu CPF/CNPJ" name="cpfcnpj" value="<?php echo $cpf_cnpj ?>">
                </div>

                <div class="box_input">
                    <label><b>Nome</b></label>
                    <input class="input_size" type="text" placeholder="Insira seu nome" name="nome" value="<?php echo $nome ?>">
                </div>

                <div class="box_input">
                    <label><b>E-mail:</b></label>
                    <input class="input_size" type="email" placeholder="Insira seu e-mail" name="email" value="<?php echo $email ?>">
                </div>

                <div class="box_input">
                    <label><b>Senha:</b></label>
                    <input class="input_size" type="password" placeholder="Insira sua senha" name="senha" value="<?php echo $senha ?>">
                </div>
            </div>
            
            <div class="lado2">
                <div class="box_input">
                    <label><b>Telefone</b></label>
                    <input class="input_size" type="number" placeholder="00 000000000" name="tel" value="<?php echo $tel ?>">
                </div>
                <div class="box_input">
                    <label><b>Data de nascimento</b></label>
                    <input class="input_size" type="text" placeholder="00/00/0000" name="data_nas" value="<?php echo $data_nas ?>">
                </div>

                <div class="box_input">
                    <button type="submit" name="alterar">Alterar dados</button>
                </div>
            </div>
        </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>