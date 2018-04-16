<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "rotas";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


$dados = mysqli_query($conn, "select id, nome, email, nivel_acesso_id from usuarios") or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<html>
    <head>
        <title>Relatório de Usuários</title>
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

        <div class="panel-heading"><center><h2>Relatório de Usuários</h2></center></div>
    <center><table class="table table-striped table-condensed table-bordered">

            <tr>
                <td> 
                    <b><font color="#00008f">Código</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Nome</font></b>
                </td>
                <td>
                    <b><font color="#00008f">E-mail</font></b>
                </td>
                <td>
                    <b><font color="#00008f">Privilégio</font></b>
                </td>

            </tr>



            <?php
            if ($total > 0) {
                do {
                    ?>

                    <tr>
                        <td><?php echo $linha['id']; ?></td>
                        <td><?php echo $linha['nome']; ?></td>
                        <td><?php echo $linha['email']; ?></td>
                        <td>
                            <?php
                            if ($linha['nivel_acesso_id'] == 1) {
                                echo "Administrador";
                            } else {
                                echo "Usuário";
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
                <td style="color:blue;margin-left:30px;font-size: 15px;"><?php echo "Total de Usuários: ", $total; ?></td>

            </tr>
        </table></center>

</body>
</html>
<?php
mysqli_free_result($dados);
?>
