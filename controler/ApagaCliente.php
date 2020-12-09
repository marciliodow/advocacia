<?php

 include_once '../funcoes.php';
if($_GET){
    $id = $_GET["id"];
    //echo "$id";    exit();
    
    $sql = "DELETE FROM advocacia.cliente WHERE idcliente =" . $id;

    $resultado = Apagar($sql);
        
    
    if ($resultado == FALSE) {
        $msg = " Verificar se o cliente não possui processos em aberto!!";
        echo("$msg");
        
    } else {
        $msg = "Parabéns! cliente apagado com sucesso !!";
        echo("$msg");
        
    }
    
header("location: ../PaginaPrincipal.php?mensagem=".$msg);
}
?>


