<html>
    <head>
        <meta charset="UTF-8">
        <title>ListaClientes</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

    </head>
    <body>
         <p align="center"><font color="#6f6f6f"><font size="7px">Clientes</font></p>
       

<?php
       
include_once '../funcoes.php';
$idpro = $_GET['processo'];


    echo" <table align='center' style=border:solid;'>";
   
    echo "<tr style=border:solid;width:50px'>";
    echo"  <th>Nº do Processo </th>";
    echo"  <th>Data Inicial</th>";
    echo"  <th>Status</th>";
    echo"  <th>Advogado Responsavel</th>";
    echo"  <th>Cliente</th>";
    echo"  <th>ações</th>";
    echo"  <th>ações</th>";
    
    echo"  </tr>";
    
$sql = "select * from advocacia.processo WHERE idprocesso = '$idpro' ";
    $solicitacao = Pesquisar($sql);
    foreach ($solicitacao as $linhas) {
        $processo = $linhas["Processo"];
        $datainicial = $linhas["dataInicial"];
        $status = $linhas["status"];
        $advogado = $linhas["advogado_idadvogado"];
        $cliente = $linhas["cliente_idcliente1"];
        
        
       
    
        echo"  <tr>";
        echo "   <td>" . $processo . "</td>"; 
        echo "   <td>" . $datainicial . "</td>";
        echo "   <td>" . $status."</td>";
        echo "   <td>" . $advogado."</td>";
        echo "   <td>" . $cliente."</td>";
        
        echo "  <td align='center'><a href='"
        . $idpro. " '>Alterar</a></td>";

       
                    
        
        echo"  </tr>";
    

    echo"  </table>";}

        
        
        
        
       
    
    
        ?>


