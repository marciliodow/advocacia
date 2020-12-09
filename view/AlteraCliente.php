<?php
include_once '../funcoes.php';
if($_GET){
    $valueget = $_GET["id"];
    $nomim = $_GET["nomin"];
    
    
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario Cliente</title>
        <link rel="stylesheet" type="text/css"href="../css/bootstrap.css"/>
        <script type="text/javascript" src="../js/jquery.js" ></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>

        <style>
            body{

                background-attachment: fixed;
                background-size: 100%;
                background-repeat: no-repeat;
                background-color: white;
            }
            table,td{
                padding: 5px;
            }
            .titulo{
                background-color: blue;
                color: white;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <form action="../controler/ValidaAlteraCliente.php" method="post">
            <p align="center"><font color="#6f6f6f"><font size="7px">Cliente</font></p>
            <table  bgcolor="#CCC" border="1" align="center">
                <tr>
                    <td colspan="2">Nome * </td>
                    <td colspan="2">CPF * </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <select style="width:310" name="cliente">
                          
                           <?php
                            if($_GET){
                                echo "<option value='" . $valueget. "'>" . $nomim . "</option>";
                            }
                            else {
                                echo "<option><option>";
                            $sql = "select * from advocacia.cliente";
                            $resultado = Pesquisar($sql);

                            foreach ($resultado as $linhas) {
                                echo "<option value='" . $linhas["idcliente"] . "'>" . $linhas["nome"] . "</option>";
                            }}
                            ?>
                        </select>
                    </td>
                    <td colspan="2"><input  type="number" placeholder="00000000000" name="cpf" style="width: 100%"required></td>
                </tr>
                <tr>
                    <td>N°. da identidade * </td>
                    <td colspan="3">Orgão expedidor * </td>
                </tr>
                <tr>
                    <td><input type="number" name="rg"required></td>
                    <td colspan="3"><select colspan="3" style="width:200" name="orgaoexpedidos"required>
                            <option></option>
                            <option>SSP dc</option>
                            <option>SSP AL</option>
                            <option>SSP AP</option>
                            <option>SSP AM</option>
                            <option>SSP BA</option>
                            <option>SSP CE</option>
                            <option>SSP DF</option>
                            <option>SSP ES</option>
                            <option>SSP GO</option>
                            <option>SSP MA</option>
                            <option>SSP MT</option>
                            <option>SSP MS</option>
                            <option>SSP MG</option>
                            <option>SSP PA</option>
                            <option>SSP PB</option>
                            <option>SSP PR</option>
                            <option>SSP PE</option>
                            <option>SSP PI</option>
                            <option>SSP RJ</option>
                            <option>SSP RN</option>
                            <option>SSP RS</option>
                            <option>SSP RO</option>
                            <option>SSP RR</option>
                            <option>SSP SC</option>
                            <option>SSP SP</option>
                            <option>SSP SE</option>
                            <option>SSP TO</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Email * </td>
                    <td colspan="">Telefone * </td>
                </tr>
                <tr>
                    <td colspan="2"><input style="width:350" type="email" name="email"></td>
                    <td><input type="tel" name="telefone"</td>
                </tr>
                <tr>
                    <td>Endereço *</td>
                    <td>Número *</td>
                    <td colspan="2">Complemento *</td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Digite o seu endereço" name="endereco"required></td>
                    <td><input style="width:200" type="text" name="numero"required></td>
                    <td colspan="2"><input style="width:310" type="text" placeholder="Exemplo apartamento"name="complemento"required></td>
                </tr>
                <tr>
                    <td>Bairro *</td>
                    <td> Município *</td>
                    <td colspan="2">UF *</td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Digite seu bairro" name="bairro"required></td>
                    <td><input style="width:200" type="text" placeholder="Nome do município" name="municipio"required></td>
                    <td colspan="2"><select style="width:310" name="uf"required>
                            <option></option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                        </select>
                    </td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td><input type="reset" value="  Reset  " /></td>
                    <td> <input type="submit" value="Submeter!" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
