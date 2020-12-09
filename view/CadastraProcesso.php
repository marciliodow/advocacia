<?php

include_once '../funcoes.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario Processo</title>
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
        
        <form action="../controler/ValidaProcesso.php" method="post">
            <p align="center"><font color="#6f6f6f"><font size="7px">Processo</font></p>

            <table  bgcolor="#CCC" border="1" align="center">


                <tr>
                    <td colspan="">Processo * </td>
                   <td colspan=""><input  type="number" placeholder="00000000000" name="processo" style="width: 100%"required></td>
                    
                </tr>
                <tr>
                    <td colspan="">Data Inicial * </td> 
                    <td colspan=""><input  type="date" name="datainicial"required></td>
                    
                </tr>


                <tr>
                    <td colspan="">Advogado * </td>
                    <td coslpan="">
                        <select name="advogado">
                            <option></option>
                        <?php
                            $sql = "select * from advocacia.advogado";
                            $resultado = Pesquisar($sql);
                            
                            foreach ($resultado as $linhas) {
                                echo "<option value='" . $linhas["idadvogado"] . "'>" . $linhas["nome"] . "</option>";
                            }
                            ?>
                            
                        </select>
                        
                    </td>
                   
                </tr>
                <tr>
                    <td colspan="">Cliente * </td>
                    <td colspan="">
                        <select name="cliente">
                            <option></option>
                            <?php
                            $sql = "select * from advocacia.cliente";
                            $resultado = Pesquisar($sql);
                            
                            foreach ($resultado as $linhas) {
                                echo "<option value='" . $linhas["idcliente"] . "'>" . $linhas["nome"] . "</option>";
                            }
                            ?>
                        </select>
                    

                </tr>
                <tr>
                    <td colspan="">Status * </td>
                    <td colspan="">
                        <select name="status">
                            <option> escolha aqui o Status </option>
                            <option> aguardando/suspenso</option>
                            <option> em andamento </option>
                            <option>finalizado</option>
                        </select>
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
