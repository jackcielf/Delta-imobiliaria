<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DELTΔ Imobiliária | Atualizar dados</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../styles/cadastro.css">
</head>

<body>
    <a href="../../principal/indexPrincipal.php">
        <img style="margin-left:3%; height:70px; width:87px; filter: invert(1); z-index: 2;" class="img_absolute" src="../../img/seta-voltar.png" alt="Voltar">
    </a>

    <div class="7">
        <img style="margin-left:6%; height:325px; width:470px;" class="img_absolute" src="../../img/ilustre2.png" alt="Avatar" class="avatar">
        <img style="margin-left:60%; height:325px; width:470px;" class="img_absolute" src="../../img/ilustre2.png" alt="Avatar" class="avatar">
    </div>

    <img href="../" style="margin-left:3%; height:70px; width:87px;" class="img_absolute" src="../img/seta-voltar.png" alt="Voltar">
    <img src="../../img/logo.png" alt="Avatar" class="avatar img">
    <form action="atualizar.php" method="POST">
        <?php
            session_start();
                
            include_once("../../db/conexao.php"); // Importa a conexão 

            $id_usuario = $_SESSION["id_usuario"];

            $sql = "SELECT * from $tabelaUsuario where id_usuario = '$id_usuario'";

            $result = mysqli_query($conn, $sql);
 
            if ($result) { // fetch percorre obj
                if ($obj = $result -> fetch_object()) {
                    echo "
                        <div class='container'>
                            <div class='lado1'>
                                <div class='box_input'>
                                    <label><b>CPF/CNPJ:</b></label>
                                    <input class='input_size' type='text' placeholder='Insira seu CPF/CNPJ' name='cpfcnpj' value='".$obj->cpf_cnpj."'>
                                </div>
                
                                <div class='box_input'>
                                    <label><b>Nome</b></label>
                                    <input class='input_size' type='text' placeholder='Insira seu nome' name='nome' value='".$obj->nome."'>
                                </div>
                
                                <div class='box_input'>
                                    <label><b>E-mail:</b></label>
                                    <input class='input_size' type='email' placeholder='Insira seu e-mail' name='email' value='".$obj->email."'>
                                </div>
                                <div class='box_input'>
                                    <label><b>senha</b></label>
                                    <input class='input_size' type='password' placeholder='Insira a sua senha' name='senha' value='".$obj->senha."'>
                                </div>
                            </div>
                            <div class='lado2'>
                                <div class='box_input'>
                                    <label><b>Telefone</b></label>
                                    <input class='input_size' type='number' placeholder='(00) 00000-0000' name='tel' value='".$obj->telefone."'>
                                </div>
                                <div class='box_input'>
                                    <label><b>Data de nascimento</b></label>
                                    <input class='input_size' type='text' placeholder='00/00/0000' name='data_nas' value='".$obj->data_nas."'>
                                </div>
                
                                <div class='box_input'>
                                    <button type='submit' name='submit'>Enviar</button>
                                </div>
                            </div>
                        </div>
                    ";
                    } else {
                        print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                                    <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Erro ao imprimir dados!</p>             
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
    </form>
</body>

</html>