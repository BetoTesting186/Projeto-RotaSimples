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
$marca 				= $_POST["marca"];
$modelo 			= $_POST["modelo"];
$renavam		        = $_POST["renavam"];
$ano 	                        = $_POST["ano"];  
$kilometragem                   = $_POST["kilometragem"];         
$cor				= $_POST["cor"];
$capacidade 		        = $_POST["capacidade"];

$query = ("INSERT INTO veiculos (tipo, marca, modelo, renavam, ano, kilometragem, cor, capacidade) VALUES ('$tipo', '$marca', '$modelo', '$renavam', '$ano', '$kilometragem', '$cor', '$capacidade')");


if (mysqli_query($conn, $query)) {
    echo "<script>alert('Cadastro realizado com sucesso')</script>"; 


    
} else {
    echo "<script>alert('Erro ao salvar')</script>";


}


?>