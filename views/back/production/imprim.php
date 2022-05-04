<?php

include  'C:/xampp/htdocs/gentelella-master/lib/fpdf/fpdf.php';

//include "../core/clientC.php";

require_once ("C:/xampp/htdocs/gentelella-master/controller/produitC.php");



$produitC = new produitC();
$listproduits=$produitC->afficherProduit();
/**
 *  
 */
class myPDF extends FPDF
{

function header()
{    
//$this->Image('images/eye.jpg',10,6);
$this->SetFont('Arial','B',14);
$this->Cell(276,5,'les reclamtions',0,0,'C');
$this->Ln(20);
$this->SetFont('Times','',12);

$this->Text(8,60,'Liste des reclamations:');
//$this->Text(8,65,'Date :'.date("d-m-Y"));
//$this->Text(8,70,'Mode de reglement : check');
$this->Text(230,60,'esprit');
$this->Text(230,65,'19 rue xxxx , Ariana');
$this->Text(230,70,'7070');
$this->Ln(50);


}
function footer()
{
$this->SetY(-15);
$this->SetFont('Arial','',0);
$this->Cell(196,5,' TEL:+71 xxx xxx ' ,0,0,'C');///////
$this->LN();

$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}
function headerTable(){

$this->SetFont('Arial','B',12);
$this->Cell(40,10,'ID_reclamation ',1,0,'C');
$this->Cell(40,10,'desc_reclaation ',1,0,'C');
$this->Cell(50,10,'etat_reclamation',1,0,'C');
$this->Cell(50,10,'traiter_reclamation  ',1,0,'C');


$this->LN();



}
function viewTable($listproduits)
{
$this->SetFont('times','',12);
foreach($listproduits as $produit):
    $this->Cell(40,10,  $produit->titre ,1,0,'C');
   

$this->LN();

endforeach;
$this->LN();

}


}

$pdf=new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->headerTable();
$pdf->viewTable($listproduits);
$pdf->Output();

?>