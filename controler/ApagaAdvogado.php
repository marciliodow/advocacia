<?php

 include_once '../funcoes.php';
if($_GET){
    $id = $_GET["id"];
    //echo "$id";    exit();
    
    $sql = "DELETE FROM advocacia.advogado WHERE idadvogado =" . $id;
    
$resultado = Apagar($sql);
//echo "$sql"; exit();
    
        
    
    if ($resultado == FALSE) {
        $msg = "Não foi possível apagar a informação!!";
        echo("$msg");
       
    } else {
        $msg = "Parabéns! advogado apagado com sucesso !!";
        echo("$msg");
        
    }
    header("location: ../PaginaPrincipal.php?mensagem=".$msg);

}
?>




    