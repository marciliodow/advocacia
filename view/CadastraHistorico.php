<?php
include_once '../funcoes.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comentario</title>
        <link rel="stylesheet" type="text/css"href="../css/bootstrap.css"/>
        <script type="text/javascript" src="../js/jquery.js" ></script>
        <script type="text/javascript" src="../js/bootstrap.js"></script>

        <style>
            body{
                background-image:url(../img/pesquisa43.jpg);
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
            
            
        
        <form action="../controler/ValidaHistorico.php" method="post">
            <p align="center"><font color="#6f6f6f"><font size="7px">Ocorrência</font></p>
            <table style="box-shadow:10px 10px 15px #888;" bgcolor="#CCC" border="1" align="center">

                <tr>
                    <td>Processo:</td>
                    <td>
                        <select name="processo">
                            <option></option>
                        <?php
                            $sql = "select * from advocacia.processo";
                            $resultado = Pesquisar($sql);
                            
                            foreach ($resultado as $linhas) {
                                echo "<option value='" . $linhas["idprocesso"] . "'>" . $linhas["Processo"] . "</option>";
                            }
                            ?>
                            
                        </select>

                    </td>
                </tr>
                

                <tr>
                    <td>Data</td>
                    <td>
                        <input style="width:250;font-size:11px" type="date" name="dtocorrencia"required>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">Comentarios: </td>
                </tr>    
                <td colspan="4"><textarea  name="comentario"  rows=4 cols=70 required></textarea></td>

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