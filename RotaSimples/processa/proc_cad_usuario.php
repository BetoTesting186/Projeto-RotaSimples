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
$email 				= $_POST["email"];
$usuario 			= $_POST["usuario"];
$senha 				= $_POST["senha"];
$nivel_de_acesso 	= $_POST["nivel_de_acesso"];

$query = ("INSERT INTO usuarios (nome, email, login, senha, nivel_acesso_id, created) VALUES "
        . "('$nome', '$email', '$usuario', '$senha', '$nivel_de_acesso', NOW())");


if (mysqli_query($conn, $query)) {
    echo "<script>alert('Cadastro realizado com sucesso')</script>"; 


    
} else {
    echo "<script>alert('Erro ao salvar')</script>";


}


?>