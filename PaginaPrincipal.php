<?php

include_once 'funcoes.php';
$parametro = date("Y-m-d");
$parametro3 = date("d-m-Y");

?>
<html>
    <head>

        <title>Rede</title>
        <link rel="stylesheet" type="text/css"href="css/bootstrap.css"/>
        <script type="text/javascript" src="js/jquery.js" ></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <meta charset="UTF-8">

    </head>
    <body>
       
        <nav  class="navbar navbar-expand-sm navbar-dark bg-dark">
            
            <div class="container">
                <a class="navbar-brand h1" href="PaginaPrincipal.php"><font color="red"><img src="img/multfeira.png"alt=""width="80%;"/></a>
                
                <button class="navbar-toggler" type="buttom" data-toggle="collapse" data-target="#navbarSite">
                    <spam class="navbar-toggler-icon"></spam>
                </button>

                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav mr-auto"> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Cadastros</a>
                            <div style="background:rgba(70,70,70,0.5);"class="dropdown-menu">
                                <a href="view/CadastraAdvogado.php"style="background:rgba(70,70,70,0.6);"class="dropdown-item"><font size="3" color="white">Cadastra Advogado</font></a>
                                <a href="view/CadastraCliente.php"style="background:rgba(70,70,70,0.6);"class="dropdown-item"><font size="3" color="white">Cadastra Cliente</font></a>
                                <a href="view/CadastraProcesso.php"style="background:rgba(70,70,70,0.6);"class="dropdown-item"><font size="3" color="white">Cadastra Processo</font></a>
                                <a href="view/CadastraHistorico.php"style="background:rgba(70,70,70,0.6);"class="dropdown-item"><font size="3" color="white">Cadastra Historico</font></a>
                                </div>
                            
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Consultas</a>
                            <div style="background:rgba(70,70,70,0.5);"class="dropdown-menu">
                                <a href="view/ListaAdvogados.php"style="background:rgba(70,70,70,0.6);"class="dropdown-item"><font size="3" color="white">Lista Advogados</font></a>
                                <a href="view/ListaClientes.php"style="background:rgba(70,70,70,0.6);"class="dropdown-item"><font size="3" color="white">lista clientes</font></a>
                                <a href="view/listaProcessoCliente1.php"style="background:rgba(70,70,70,0.6);"class="dropdown-item"><font size="3" color="white">lista Processos</font></a>
                            </div>
                    </li>

                    
                </ul>
            </div>
        </div>
    </nav>
        <div id="carouselSite" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/pesquisa.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1>Hoje é dia: <?php echo"$parametro3"; ?>

                    </h1>
                    <p class="lead"><iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:380px;height:80px;"src="https://www.clocklink.com/html5embed.php?clock=047&timezone=Brazil_Brasilia&color=white&size=380&Title=&Message=&Target=&From=2020,1,1,0,0,0&Color=white"></iframe></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/pesquisa2.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h1> </h1>
                    <p class="lead"> <center><iframe height="180" marginheight="0" src="https://www.internautascristaos.com/arquivos/versiculos/versiculos.html"  frameborder="no" width="200" scrolling="auto" name="textos"> </iframe></center></p>

                </div>
            </div>
            <div class="carousel-item">
                <img src="img/pesquisa3.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">

                    <p class="lead"><div id="cont_e9962a9cd0d048d5b8ee185ea7264a7f"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/e9962a9cd0d048d5b8ee185ea7264a7f"></script></div></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only"> Avançar</span>

        </a>
    </div>
    <div class="container">
        <div class="row text-center my-0">
            <div class="col-12">
                <p>
               <?php
                    if ($_GET) {
                        $i = $_GET['mensagem'];
                        
                        echo '<div class="alert alert-danger alert-dismissible"><button class="close" type="button" data-dismiss="alert">&times;</button><strong>Mensagem:</strong>;';
                        echo "$i </div>";
                    }
                    ?> 
                </p>
            </div>
        </div>
    </div>






    <?php
// put your code here
    ?>
</body>
</html>
