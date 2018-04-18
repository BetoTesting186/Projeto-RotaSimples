<?php	

include_once("../conexao.php");
$html = '<table border=1 style="width: 100%;"';	
$html .= '<thead>';
$html .= '<tr>';
$html .= '<th>Código</th>';
$html .= '<th>Tipo</th>';
$html .= '</tr>';
$html .= '</thead>';
$html .= '<tbody>';

$result_veiculos = "SELECT * FROM tipo_entrega";
$resultado_veiculos = mysqli_query($conn, $result_veiculos);
while($row_veiculos = mysqli_fetch_assoc($resultado_veiculos)){
	$html .= '<tr><td>'.$row_veiculos['id'] . "</td>";


	if($row_veiculos['tipo'] == 1){
		$html .= '<td>'.'Normal'."</td></tr>";
	}
	if($row_veiculos['tipo'] == 2){
		$html .= '<td>'.'BusqueAqui'."</td></tr>";
	}
	
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
	"relatorio_tipo.pdf", 
	array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
);
?>