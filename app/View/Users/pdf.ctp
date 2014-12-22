
<?php
App::import('Vendor','xtcpdf');
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'tcpdf_logo.jpg';
      
        $this->Image($image_file, 10, 10, 30, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, 'Recetas Aldea Animal', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}


// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Aldea Animal');
$pdf->SetTitle('Receta de tratamiento');
$pdf->SetSubject('Receta para mascota específica');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}


// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(25, 'Receta Mascota: '.$pet[$receta[0]['Atencion']['ID_MAS']].' ', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------

$tbl = <<<EOD
<table cellspacing="0" cellpadding="1" border="2" style="background-color:#FFFF00;color:#0000FF;">
    <tr>
        <th> Nombre Fármaco</th>
        <th> Nombre Laboratorio</th>
        <th> Nombre Genérico</th>
        <th> Posología</th>
    </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

$html .= "<table cellspacing=\"0\" cellpadding=\"1\" border=\"1\">";
for ($i=0; $i < count($receta[0]['Farmaco'] ); $i++) {
		$html .="<tr>";
        
        $html .= "<td>" . $receta[0]['Farmaco'][$i]['NOMBRE_FARMACO']. "</td>";
        $html .= "<td>" . $receta[0]['Farmaco'][$i]['LABORATORIO_MEDICAMENTO']. "</td>";
        $html .= "<td>" . $receta[0]['Farmaco'][$i]['NOMBRE_GENERICO']. "</td>";	
        $html .= "<td>" . $receta[0]['Farmaco'][$i]['FarRec']['POSOLOGIA']. "</td>";
        $html .="</tr>";				
 
}
$html .= "</table>";
$pdf->writeHTML($html, true, false, false, false, '');

// -----------------------------------------------------------------------------

$pdf->writeHTML("Clínica Aldea Animal, Todo por sus queridas mascotas.", true, false, false, false, '');
 ob_end_clean();
//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>