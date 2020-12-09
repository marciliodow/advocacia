<?php
include_once '../funcoes.php';

if ($_POST) {

    $nome = $_POST["cliente"];
    $cpf = $_POST["cpf"];
    $identidade = $_POST["rg"];
    $orgaoexpedidor = $_POST["orgaoexpedidos"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidademunicipio = $_POST ["municipio"];
    $uf = $_POST ["uf"];
    $email = $_POST ["email"];
    $telefone = $_POST ["telefone"];

    $sql = " update advocacia.cliente set "
                    . "bairro = '$bairro',"
                    . "complemento = '$complemento',"
                    . "cpf = '$cpf',"
                    . "email = '$email',"
                    . "endereco = '$endereco',"
                    . "municipio = '$cidademunicipio',"
                    . "nome = 'Sra Lopes',"
                    . "numero = '$numero',"
                    . "Orgaoexpedidor = '$orgaoexpedidor',"
                    . "rg = '$identidade',"
                    . "telefone = '$telefone',"
                    . "uf = '$uf'"
                    . " Where idcliente = $nome";
            //echo "$sql"; exit();
    $resultado = Gravar($sql);
    
    if ($resultado == FALSE) {
        $msg = "Não foi possível alterar informação!!";
        echo("$msg");

    } else {
        $msg = "Parabéns! cliente: alterado com sucesso !!";
        echo("$msg");
       
    }
    
header("location: ../PaginaPrincipal.php?mensagem=".$msg);
}
?>