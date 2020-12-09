<?php

include_once '../funcoes.php';

if ($_POST) {

    $data = date("d-m-Y");
    $Processo = $_POST["processo"];
    $dataInicial = $_POST["datainicial"];
    $advogado_idadvogado = $_POST["advogado"];
    $cliente_idcliente1 = $_POST["cliente"];
    $status = $_POST["status"];

   $sql = " update advocacia.processo set "
                    . "Processo = 'novo numero',"
                    . "dataInicial = '$dataInicial',"
                    . "advogado_idadvogado = '$advogado_idadvogado',"
                    . "cliente_idcliente1 = '$cliente_idcliente1',"
                    . "status = '$status'"
                    . " Where idprocesso = $Processo";
    
    $resultado = Gravar($sql);
    
    if ($resultado == FALSE) {
        $msg = "Não foi possível gravar informação!!";
        echo("$msg");
        
    } else {
        $msg = "Parabéns! processo alterado cadastrado com sucesso !!";
        echo("$msg");
        
    }
    




$comentario = "Foram alterados os seguintes dados id avogado:$advogado_idadvogado, id cliente:$cliente_idcliente1, Status:$status, data inicial:$dataInicial:";

$sql = "INSERT INTO advocacia.historico"
                    . "(Comentario,data,processo_idtable1)"
                    . "VALUES"
                    . "('$comentario','$data',$Processo)";

            $resultado = Gravar($sql);

            if ($resultado == FALSE) {
                $msg1 = "Não foi possível gravar informação!!";
                echo("$msg");
                
            } else {
                $msg1 = "Parabéns! cliente: cadastrado com sucesso !!";
                echo("$msg");
                
                
            }
         header("location: ../PaginaPrincipal.php?mensagem=".$msg);   
}

?>