<?php	

	include_once("../conexao.php");
	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>Código</th>';
	$html .= '<th>Tipo</th>';
	$html .= '<th>Marca</th>';
	$html .= '<th>Modelo</th>';
        $html .= '<th>Renavam</th>';
        $html .= '<th>Ano</th>';
        $html .= '<th>Kilometragem</th>';
        $html .= '<th>Cor</th>';
        $html .= '<th>Capacidade</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_veiculos = "SELECT * FROM veiculos";
	$resultado_veiculos = mysqli_query($conn, $result_veiculos);
	while($row_veiculos = mysqli_fetch_assoc($resultado_veiculos)){
		$html .= '<tr><td>'.$row_veiculos['id'] . "</td>";
		$html .= '<td>'.$row_veiculos['tipo'] . "</td>";
		$html .= '<td>'.$row_veiculos['marca'] . "</td>";
                $html .= '<td>'.$row_veiculos['modelo'] . "</td>";
                $html .= '<td>'.$row_veiculos['renavam'] . "</td>";
                $html .= '<td>'.$row_veiculos['ano'] . "</td>";
                $html .= '<td>'.$row_veiculos['kilometragem'] . "</td>";
                $html .= '<td>'.$row_veiculos['cor'] . "</td>";
                $html .= '<td>'.$row_veiculos['capacidade'] . "</td></tr>";	
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
			<h1 style="text-align: center;">Relatório de Veículos</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_veiculos.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>