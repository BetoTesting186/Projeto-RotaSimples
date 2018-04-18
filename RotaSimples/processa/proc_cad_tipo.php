<?php

        $servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "rotas";
	
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

?>


<?php
session_start();
include_once("../conexao.php");
$tipo 				= $_POST["tipo"];


$query = ("INSERT INTO tipo_entrega (tipo) VALUES ('$tipo')");


if (mysqli_query($conn, $query)) {
    echo "<script>alert('Cadastro realizado com sucesso!!!'); location.href='../cad_tipo.php';</script>";


    
} else {
    echo "<script>alert('Erro ao salvar!!!'); location.href='../cad_tipo.php';</script>";


}


?>