<?php
require_once __DIR__ . '/../vendor/autoload.php';

// A mettre dans le générateur  CERFAIMP.php
use mikehaertl\pdftk\Pdf;

$pdf = new Pdf('./pdf/cerfa_entreprises.pdf');
//apppel url pour récupérer les données 
$result = $pdf->fillForm([
'a1' => '11580*03',
'a2' => 'Croix rouge bordeaux',
'a3' => 'Moët et jambon',
'a4' =>  12356894100056,
'a6' => '7bis',
'a7' => 'Victor Nigo',
'a8' => 28120,
'a9' => 'Saint judas sur franchise',
'a10' => 'France',
'a11' => 'Protection des alcooliques en tant de guerre',
'a12' => '13/11/2023',
'CAC2' => true,
'CAC1' => true,
])
    ->needAppearances()
    ->saveAs('./pdf/generated/cerfa_entreprises_generated.pdf');

if ($result === false){
    $error = $pdf->getError();
}