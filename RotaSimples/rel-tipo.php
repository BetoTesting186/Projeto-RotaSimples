<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "rotas";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


$dados = mysqli_query($conn, "select id, tipo from tipo_entrega") or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<html>
    <head>
        <title>Relatório de Tipo de Entrega</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>
    </head>
    <body>

        <style>
            .table{
                background: #ffe8cc;
                width: 100%;
                height: 25%;
            }
           
            .table-hover > tbody > tr:hover{
                background: #0fbff2;

            }
            th, td {
                border-bottom: 1px solid #ddd;
                border: 1px solid white;
                padding:3px 7px 2px 7px;
            }
            body {
                background-image: url("./img/fundo1.jpg");
            } 

        </style>
        
        <div class="container theme-showcase" role="main">      
            <div class="page-header">

                <a href="sair.php"><button type="button" class="btn btn-danger" style="float: right;">Sair</button></a>
                <a href="./relatoriosPDF/tipo-pdf.php"><button type="button" class="btn btn-warning" style="float: right;margin-right: 4px">Imprimir</button></a>
                <a href="perfil-administrador.php"><button type="button" class="btn btn-info" style="float: right;margin-right: 4px">Inicio</button></a>
                <center><h1>Relatório de Tipo de Entregas</h1></center>
            </div>

        </div>

        <center><table class="table table-striped table-condensed table-bordered">

            <tr>
                <td> 
                    <b><font color="#00008f">Código</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Tipo</font></b>
                </td>

            </tr>



            <?php

            if ($total > 0) {
                do {
                    ?>

                    <tr>
                        <td><?php echo $linha['id']; ?></td>
                        <td>
                            <?php
                            if ($linha['tipo'] == 1) {
                                echo "Normal";
                            } else {
                                echo "BusqueAqui";
                            }
                            ?>
                        </td>

                    </tr>

                    <?php
                } while ($linha = mysqli_fetch_assoc($dados));
            }
            ?>
        </table>
            <table>
            <tr>
                <td style="color:blue;margin-left:30px;font-size: 15px;"><?php echo "Total de Tipos de Entrega: ", $total; ?></td>

            </tr>
        </table></center>

    </body>
</html>
<?php

mysqli_free_result($dados);
?>
