<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "rotas";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


$dados = mysqli_query($conn, "select id, nome, idade, sexo, endereco, pis, categoria_cnh, numero_cnh from entregadores") or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<html>
    <head>
        <title>Relatório de Entregadores</title>
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
                <a href="perfil-administrador.php"><button type="button" class="btn btn-info" style="float: right;margin-right: 4px">Inicio</button></a>
                <center><h1>Relatório de Entregadores</h1></center>
            </div>

        </div>

        <center><table class="table table-striped table-condensed table-bordered">

            <tr>
                <td> 
                    <b><font color="#00008f">Código</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Nome</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Idade</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Sexo</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Endereço</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Pis</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Categoria CNH</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Numero CNH</font></b>
                </td>
            </tr>



            <?php

            if ($total > 0) {
                do {
                    ?>

                    <tr>
                        <td><?php echo $linha['id']; ?></td>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['idade']; ?></td>
                        <td><?php echo $linha['sexo']; ?></td>
                        <td><?php echo $linha['endereco']; ?></td>
                        <td><?php echo $linha['pis']; ?></td>
                        <td><?php echo $linha['categoria_cnh']; ?></td>
                        <td><?php echo $linha['numero_cnh']; ?></td>

                    </tr>

                    <?php
                } while ($linha = mysqli_fetch_assoc($dados));
            }
            ?>
        </table>
        <table>
            <tr>
                <td style="color:blue;margin-left:30px;font-size: 15px;"><?php echo "Total de Entregadores: ", $total; ?></td>

            </tr>
        </table></center>

    </body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>
