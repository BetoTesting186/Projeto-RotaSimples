<?php	

	include_once("../conexao.php");
	$html = '<table border=1 style="width: 100%;"';     	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>Código</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Email</th>';
	$html .= '<th>Privilégio</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_usuarios = "SELECT * FROM usuarios";
	$resultado_usuarios = mysqli_query($conn, $result_usuarios);
	while($row_usuarios = mysqli_fetch_assoc($resultado_usuarios)){
		$html .= '<tr><td>'.$row_usuarios['id'] . "</td>";
		$html .= '<td>'.$row_usuarios['nome'] . "</td>";
		$html .= '<td>'.$row_usuarios['email'] . "</td>";
		$html .= '<td>'.$row_usuarios['nivel_acesso_id']."</td></tr>";

		
	}
	
	$html .= '</tbody>';
	$html .= '</table>';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("../dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Relatório de Usuários</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_usuario.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>