<?php
include_once '../funcoes.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario Altera Processo</title>
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
           
        </style>
    </head>
    <body>
        <form action="listaProCliente.php" method="get">
            <p align="center"><font color="#6f6f6f"><font size="7px">Processo</font></p>
            <table  bgcolor="#CCC" border="1" align="center">
                <tr>
                    <td colspan="">Processo * </td>
                    <td colspan="">
                        <select style="width: 100px;" name="processo">
                            <option></option>
                            <?php
                            $sql = "select * from advocacia.cliente";
                            $resultado = Pesquisar($sql);

                            foreach ($resultado as $linhas) {
                                echo "<option value='" . $linhas["idcliente"] . "'>" . $linhas["nome"] . "</option>";
                            }
                            ?>
                        </select></td>
               
         
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

