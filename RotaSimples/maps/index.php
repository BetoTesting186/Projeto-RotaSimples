<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "rotas";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lançamento de Entregas</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="src/main.css">



</head>
<body>


    <main>
        <!-- Menu Lateral -->
        <aside class="padding">

            <center><h2 style="margin-top: -1px">Lan&ccedil;amento de Entrega</h2></center>
                <div>
                    <input type="text" id="nomeEnt" class="controls" name= "nome_buscar" placeholder="Nome do Entregador" autofocus style="width: 90%;">
                    <button class="btn btn-info" name="SendPesqEntregador" type="submit" style="width: 10%;float: right;height: 32px;margin-top: 10px;"></button>  


                </div>

                <div>
                    <input id="tipoEnt" class="controls" type="text" placeholder="Tipo de Entrega" style="width: 90%;">
                    <button class="btn btn-info" type="submit" style="width: 10%;float: right;height: 32px;margin-top: 10px;"></button>
                </div>
                <div>
                    <input id="tipoVei" class="controls" type="text" placeholder="Tipo de Ve&iacute;culo" style="width: 90%;">
                    <button class="btn btn-info" type="submit" style="width: 10%;float: right;height: 32px;margin-top: 10px;"></button>
                </div>
            <br>


            <div>

                <input id="end1" class="controls" type="text" placeholder="Endere&ccedil;o 1" style="width: 100%;">
            </div>
            <div>
                <input id="end2" class="controls" type="text" placeholder="Endere&ccedil;o 2" style="width: 100%;">
            </div>
            <div>
                <input id="end3" class="controls" type="text" placeholder="Endere&ccedil;o 3" style="width: 100%;">
            </div>
            <div>
                <button onclick="calculateRoute()" class="margin-top padding radius">CALCULAR ROTA</button>
            </div><br>

            <center><h2 style="margin-top: -1px">Romaneio de Entrega</h2></center>


            <table border="1px" width="100%">

                <tr>
                    <td><h4 style="margin-bottom: 0;line-height: 12px;">Nome: Roberto Junior</h4></td>
                </tr>

                <tr>
                    <td><h4 style="margin-bottom: 0;line-height: 12px;">Tipo de Entrega: Normal</h4></td>
                </tr>
                <tr>
                    <td><h4 style="margin-bottom: 0;line-height: 12px;">Tipo de Ve&iacute;culo: Moto</h4></td>
                </tr>
                <tr>
                    <td><div id="info" style="margin-bottom: -20px;line-height: 19px;color: red;font-weight: bold;"></div></td>
                </tr>
            </table>


        </aside>



        <!-- Google Maps -->
        <section>
            <div id="map"></div>
        </section>
    </main>

    <script src="src/main.js"></script>
    <script async defer src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBlWxCA9Lr7VgWBRgadVMvPP77876p3BT8&libraries=places&callback=initMap'></script>
</body>
</html>