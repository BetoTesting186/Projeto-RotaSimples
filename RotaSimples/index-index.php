<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
    </head>
      
    <nav class="navbar navbar-dark bg-light" style="background-color: #FFA500;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img alt="Rota Simples" height="30" src="img/rotaSimples.png" width="30" >
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.php"><font color="#fff">Inicial</font></a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  
                  

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle  bg-light" style="background-color: #FFA500;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros<span class="caret"></span></a>                      
                        <ul class="dropdown-menu bg-light " style="background-color: black;">
                           
                            <li><a class=" bg-light" style="background-color: #f60;"href="cad_usuario.php"><font color="#fff">Cadastro de Usuários</font></a></li>
                            <li><a class=" bg-light" style="background-color: #f60;" href="cad_veiculos.php"><font color="#fff">Cadastro de Veículos</font></a></li>
                            <li><a class=" bg-light" style="background-color: #f60;" href="cad_entregadores.php"><font color="#fff">Cadastro de Entregadores</font></a></li>
                            <li><a class=" bg-light" style="background-color: #f60;" href="cad_tipo.php"><font color="#fff">Cadastro de Tipo de Entregas</font></a></li>                            
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle  bg-light" style="background-color: #FFA500;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Movimentos<span class="caret"></span></a>
                        
                        <ul class="dropdown-menu bg-light " style="background-color: black;">
                            <li><a class=" bg-light" style="background-color: #f60;" href="./maps/index.html"><font color="#fff">Lançamento de Entregas</font></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle   bg-light" style="background-color: #FFA500;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Relatórios<span class="caret"></span></a>
                        <ul class="dropdown-menu bg-light " style="background-color: black;">
                            <li><a class=" bg-light" style="background-color: #f60" href="rel-usuario.php"><font color="#fff">Relatório de Usuários</font></a></li>
                            <li><a class=" bg-light" style="background-color: #f60;" href="rel-veiculos.php"><font color="#fff">Relatório de Veículos</font></a></li>
                            <li><a class=" bg-light" style="background-color: #f60;" href="rel-entregadores.php"><font color="#fff">Relatório de Entregadores</font></a></li>
                            <li><a class=" bg-light" style="background-color: #f60;" href="rel-tipo.php"><font color="#fff">Relatório de Tipo de Entregas</font></a></li>
                        
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
        <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <script>
            $(function () {
                $('.dropdown-toggle').dropdown();
            });
        </script>
    </nav>
</head>
</html>
