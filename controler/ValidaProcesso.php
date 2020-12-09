<?php
include_once '../funcoes.php';

if ($_POST) {
            
            $processo = $_POST["processo"];
            $datainicial = $_POST["datainicial"];
            $advogado = $_POST["advogado"];
            $cliente = $_POST["cliente"];
            $status = $_POST["status"];
            
            
            
            $sql = "INSERT INTO advocacia.processo"
                    . "(advogado_idadvogado,cliente_idcliente1,dataInicial,Processo,status)"
                    . "VALUES"
                    . "($advogado,$cliente,'$datainicial','$processo','$status')";

            $resultado = Gravar($sql);

            if ($resultado == FALSE) {
                $msg = "Não foi possível gravar informação!!";
                echo("$msg");
                
            } else {
                $msg = "Parabéns! processo cadastrado com sucesso !!";
                echo("$msg");
                
                
            }
            
header("location: ../PaginaPrincipal.php?mensagem=".$msg);
}
?>

