<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Página Administrativa">
        <meta name="author" content="Cesar">
        <link rel="icon" href="imagens/favicon.ico">

        <title>Cadastrar veiculos</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>

        <style>
            body {
                background-image: url("./img/fundo1.jpg");
            } 
        </style>
        
    </head>

    <body role="document">	
        <div class="container theme-showcase" role="main">      
            <div class="page-header">
                <a href="sair.php"><button type="button" class="btn btn-danger" style="float: right;">Sair</button></a>
                <h1>Cadastrar Veículos</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="POST" action="processa/proc_cad_veiculos.php">

                        <div class="form-group">
                            <label for="inputTipo" class="col-sm-2 control-label">Tipo</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="tipo" required="option" autofocus>
                                <option></option> 
                                <option value="1">Carro</option>
                                <option value="2">Moto</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputMarca" class="col-sm-2 control-label">Marca</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="marca" placeholder="Marca" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputModelo" class="col-sm-2 control-label">Modelo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="modelo" placeholder="Modelo" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputRenavam" class="col-sm-2 control-label">Renavam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="renavam" placeholder="Renavam" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAno" class="col-sm-2 control-label">Ano</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ano" placeholder="Ano" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputKM" class="col-sm-2 control-label">Kilometragem</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="kilometragem" placeholder="Kilometragem" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCor" class="col-sm-2 control-label">Cor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cor" placeholder="Cor" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCapacidade" class="col-sm-2 control-label">Capacidade</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="capacidade" placeholder="Capacidade" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Cadastrar</button>
                                <button type='reset' class="btn btn-primary">Limpar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
