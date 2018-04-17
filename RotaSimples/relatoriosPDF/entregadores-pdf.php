<?php	

	include_once("../conexao.php");
	$html = '<table border=1 style="width: 100%;"'; 
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>Código</th>';
	$html .= '<th>Nome</th>';
	$html .= '<th>Idade</th>';
	$html .= '<th>Sexo</th>';
        $html .= '<th>Endereço</th>';
        $html .= '<th>Pis</th>';
        $html .= '<th>Categoria CNH</th>';
        $html .= '<th>Numero CNH</th>';
	$html .= '</tr>';
	$html .= '</thead>';

	$html .= '<tbody>';
	
	$result_entregadores = "SELECT * FROM entregadores";
	$resultado_entregadores = mysqli_query($conn, $result_entregadores);
	$total = mysqli_num_rows($resultado_entregadores);
	while($row_entregadores = mysqli_fetch_assoc($resultado_entregadores)){
		$html .= '<tr><td>'.$row_entregadores['id'] . "</td>";
		$html .= '<td>'.$row_entregadores['nome'] . "</td>";
		$html .= '<td>'.$row_entregadores['idade'] . "</td>";
		
                $html .= '<td>'.$row_entregadores['sexo'] ."</td>";
                $html .= '<td>'.$row_entregadores['endereco'] . "</td>";
                $html .= '<td>'.$row_entregadores['pis'] . "</td>";
                $html .= '<td>'.$row_entregadores['categoria_cnh'] . "</td>";
                $html .= '<td>'.$row_entregadores['numero_cnh'] . "</td></tr>";	

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
			<h1 style="text-align: center;">Relatório de Entregadores</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_entregadores.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>