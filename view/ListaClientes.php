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

$sql = "select * from advocacia.cliente";
    $solicitacao = Pesquisar($sql);
    foreach ($solicitacao as $linhas) {
        $nome = $linhas["nome"];
        $email = $linhas["email"];
        $telefone = $linhas["telefone"];
        $rg = $linhas["rg"];
        $Orgaoexpedidor = $linhas["Orgaoexpedidor"];
        $cpf = $linhas["cpf"];
        $endereco = $linhas["endereco"];
        $complemento = $linhas["complemento"];
        $numero = $linhas["numero"];
        $bairro = $linhas["bairro"];
        $municipio = $linhas["municipio"];
        $uf = $linhas["uf"];
        $id = $linhas["idcliente"];

    echo" <table align='center' style=border:solid;'>";
    
    echo "<tr style=border:solid;width:50px'>";
    echo"  <th>Nº Nome</th>";
    echo"  <th>Email</th>";
    echo"  <th>Telefone</th>";
    echo"  <th>identidade</th>";
    echo"  <th>Orgão expedidor</th>";
    echo"  <th>CPF</th>";
    echo"  <th>Endereço</th>";
    echo"  <th>Complemento</th>";
    echo"  <th>Numero</th>";
    echo"  <th>Bairro</th>";
    echo"  <th>Municipio</th>";
    echo"  <th>UF</th>";
    echo"  <th>Ações</th>";
    echo"  </tr>";
    
        echo"  <tr>";
        echo "   <td>" . $nome . "</td>"; 
        echo "   <td>" . $email . "</td>";
        echo "   <td>" . $telefone."</td>";
        echo "   <td>" . $rg."</td>";
        echo "   <td>" . $Orgaoexpedidor."</td>";
        echo "   <td>" . $cpf."</td>";
        echo "   <td>" . $endereco."</td>";
        echo "   <td>" . $complemento."</td>";
        echo "   <td>" . $numero."</td>";
        echo "   <td>" . $bairro."</td>";
        echo "   <td>" . $municipio."</td>";
        echo "   <td>" . $uf."</td>";
        
         echo "  <td align='center'><a href='AlteraCliente.php.?id="
        . $id."&nomin"."=".$nome." '>Alterar</a></td>";

        echo "  <td align='center'><a href='../controler/ApagaCliente.php.?id="
        . $id . " '>Excluir</a></td>";


                    
        
        echo"  </tr>";
    

    echo"  </table>";}

        
        
        
        
       
    
    
        ?>
    </body>
</html>

