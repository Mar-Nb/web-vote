<?php
require('fpdf.php');

class PDF extends FPDF{
	// Chargement des données
	function LoadData($file){
    // Lecture des lignes du fichier
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(',',trim($line));
    return $data;
	}

	// Tableau simple
	function BasicTable($header, $data){
		// En-tête
		foreach($header as $col)
			$this->Cell(38,7,$col,1);
		$this->Ln();
		foreach($data as $row){
			foreach($row as $col)
            $this->Cell(38,6,$col,1);
			$this->Ln();
		}
	}
	function Header(){
		// Police Arial gras 15
		$this->SetFont('Arial','B',15);
		// Décalage à droite
		$this->Cell(60);
		// Titre
		$this->Cell(40,10,'Compte rendu des notes','C');
		// Saut de ligne
		$this->Ln(20);
	}

// Pied de page
	function Footer(){
		// Positionnement à 1,5 cm du bas
		$this->SetY(-15);
		// Police Arial italique 8
		$this->SetFont('Arial','I',8);
		// Numéro de page
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

$pdf = new PDF();
$pdf->AliasNbPages();
// Titres des colonnes
$header = array('Mathematiques', 'Anglais', 'Programmation', 'Algorithmie', 'Economie');
// Chargement des données
$data = $pdf->LoadData('vote.csv');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,$data);
$pdf->Output();
?>