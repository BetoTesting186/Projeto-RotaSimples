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
$nome 				= $_POST["nome"];
$idade 				= $_POST["idade"];
$sexo		                = $_POST["sexo"];
$endereco	                = $_POST["endereco"];   
$pis	                        = $_POST["pis"];         
$categoria_cnh			= $_POST["categoria_cnh"];
$numero_cnh 		        = $_POST["numero_cnh"];

$query = ("INSERT INTO entregadores (nome, idade, sexo, endereco, pis, categoria_cnh, numero_cnh) VALUES ('$nome', '$idade', '$sexo', '$endereco', '$pis', '$categoria_cnh', '$numero_cnh')");


if (mysqli_query($conn, $query)) {
    echo "<script>alert('Cadastro realizado com sucesso')</script>"; 


    
} else {
    echo "<script>alert('Erro ao salvar')</script>";


}


?>