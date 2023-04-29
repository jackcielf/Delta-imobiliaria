<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DELTΔ Imobiliária | Atualizar dados</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../styles/cadastro.css">
</head>

<body>
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

            $mat = $_SESSION["id_usuario"];

            $sql = "SELECT * from $tabelaUsuario where id_usuario = '$mat'";

            $result = mysqli_query($conn, $sql);
 
            if ($result) { // fetch percorre obj
                if ($obj = $result -> fetch_object()){
                    echo "
                        <div class='container'>
                            <div class='lado1'>
                                <div class='box_input'>
                                    <label><b>Nome</b></label>
                                    <input class='input_size' type='text' name='nome' value='".$obj->nome."'>
                                </div>
                    
                                <div class='box_input'>
                                    <label><b>E-mail:</b></label>
                                    <input class='input_size' type='email' name='email' value='".$obj->email."'>
                                </div>
                    
                                <div class='box_input'>
                                    <label><b>senha</b></label>
                                    <input class='input_size' type='text'  name='senha' value='".$obj->senha."'>
                                </div>
                    
                                 </div>
                                <div class='lado2'>
                                <div class='box_input'>
                                    <label><b>Telefone</b></label>
                                    <input class='input_size' type='text' name='telefone' value='".$obj->telefone."'>
                                </div>  
                    
                                <div class='box_input'>
                                    <label><b>Data de nascimento</b></label>
                                    <input class='input_size' type='text'  name='data_nas' value='".$obj->data_nas."' >
                                </div>
                      
                                <div class='box_input'>
                                    <button type='submit' name='submit'>Atualizar</button>
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