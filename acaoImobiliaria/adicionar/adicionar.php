<?php
    function enviarArquivo($error, $size, $name, $tmp_name){
        include('../../db/conexao.php');

        if($size > 2097152){  // 1024 bytes = 1MB, 1024 KB = 1MB.  
            die("Arquivo muito grande; Max: 2MB!");
        }

        $pasta = "../arquivos/";
        $nomeDoArquivo  = $name;
        $novoNomeDoArquivo = uniqid();  // Mudança de nomes dos arquivos
        $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION)); // Conversao p letra minus

        if ($extensao != "jpg" || $extensao != "png") {  // Tipos de arquivos aceitos
            print_r("<div class='container-fluid text-center p-3 border border-danger' style='background: rgba(255, 0, 0, .6);'>
                            <p class='mb-0 fst-italic text-light' style='font-family: verdana, arial, serif;'>Tipo de arquivo não aceito!</p>             
                        </div>
                ");
        }

        $path =  $pasta . $novoNomeDoArquivo . "." . $extensao;
        move_uploaded_file($tmp_name, $path); // Movendo imagem para uma pasta

        // Valores dos inputs
        $areatotal = $_POST['areatotal'];
        $areacoberta = $_POST['areacoberta'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $rua = $_POST['rua'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        $referencia = $_POST['referencia'];
        $transicao = $_POST['transicao'];
        $classificacao = $_POST['classificacao'];
        $id_usuario = $_SESSION['id_usuario'];
        
        $sql = "INSERT INTO $tabelaImovel(areatotal, areacoberta, estado, cidade, rua, valor, descricao, referencia, transacao, classificacao,nome_img, path, id_usuario) VALUES ('$areatotal', '$areacoberta', '$estado','$cidade','$rua', '$valor', '$descricao', '$referencia', '$transicao', '$classificacao', '$nomeDoArquivo', '$path', '$id_usuario')";
        $conn -> query($sql);

        // Redirecionando o usuário para a tela principal do site
        header('Location: ../../principal/indexPrincipal.php');
    }
?>