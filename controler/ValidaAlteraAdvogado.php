<?php
include_once '../funcoes.php';

if ($_POST) {

    $nome = $_POST["advogado"];
    $cpf = $_POST["cpf"];
    $oab = $_POST["oab"];
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

    $sql = " update advocacia.advogado set "
                    . "bairro = '$bairro',"
                    . "complemento = '$complemento',"
                    . "cpf = '$cpf',"
                    . "email = '$email',"
                    . "endereco = '$endereco',"
                    . "municipio = '$cidademunicipio',"
                    . "nome = 'de novo',"
                    . "numero = '$numero',"
                    . "oab = '$oab',"
                    . "Orgaoexpedidor = '$orgaoexpedidor',"
                    . "rg = '$identidade',"
                    . "telefone = '$telefone',"
                    . "uf = '$uf'"
                    . " Where idadvogado = $nome";
    
    $resultado = Gravar($sql);
    
    if ($resultado == FALSE) {
        $msg = "Não foi possível alterar a informação!!";
        echo("$msg");
        
    } else {
        $msg = "Parabéns! advogado alterado com sucesso !!";
        echo("$msg");
       
    }
    
header("location: ../PaginaPrincipal.php?mensagem=".$msg);
}
?>