<?php
include_once '../funcoes.php';

if ($_POST) {
            
            $nome = $_POST["nome"];
            $cpf = $_POST["cpf"];
            $identidade = $_POST["rg"];
            $orgaoexpedidor = $_POST["orgaoexpedidos"];
            $endereco = $_POST["endereco"];
            $numero = $_POST["numero"];
            $complemento = $_POST["complemento"];
            $bairro = $_POST["bairro"];
            $cidademunicipio = $_POST ["municipio"];
            $uf = $_POST ["uf"];
            $email = $_POST ["email"];
            $telefone = $_POST ["telefone"];
            
            
            $sql = "INSERT INTO advocacia.cliente"
                    . "(bairro,complemento,cpf,email,endereco,municipio,nome,numero,Orgaoexpedidor,rg,telefone,uf)"
                    . "VALUES"
                    . "('$bairro','$complemento','$cpf','$email','$endereco','$cidademunicipio','$nome','$numero','$orgaoexpedidor','$identidade','$telefone','$uf')";

            $resultado = Gravar($sql);

            if ($resultado == FALSE) {
                $msg = "Não foi possível gravar informação!!";
                echo("$msg");
                
            } else {
                $msg = "Parabéns! cliente: cadastrado com sucesso !!";
                echo("$msg");
                
                
            }
            
header("location: ../PaginaPrincipal.php?mensagem=".$msg);
}
?>

