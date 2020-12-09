<?php
include_once '../funcoes.php';

if ($_POST) {
            
            
            $dtocorrencia = $_POST["dtocorrencia"];
            $comentario = $_POST["comentario"];
            $processo = $_POST["processo"];
            
            
            
            $sql = "INSERT INTO advocacia.historico"
                    . "(Comentario,data,processo_idtable1)"
                    . "VALUES"
                    . "('$dtocorrencia','$comentario',$processo)";

            $resultado = Gravar($sql);

            if ($resultado == FALSE) {
                $msg = "Não foi possível gravar informação!!";
                echo("$msg");
                
            } else {
                $msg = "Parabéns! historico cadastrado com sucesso !!";
                echo("$msg");
                
                
            }
            
header("location: ../PaginaPrincipal.php?mensagem=".$msg);
}
?>

