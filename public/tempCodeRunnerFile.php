<?php
require_once __DIR__ . '/../vendor/autoload.php';

use mikehaertl\pdftk\Pdf;

// Chemin vers le fichier PDF initial
$pdfPath = './pdf/cerfa_entreprises.pdf';

// Chemin vers le fichier PDF généré
$generatedPdfPath = './pdf/generated/cerfa_entreprises_generated.pdf';

// Instanciation de la classe Pdf
$pdf = new Pdf($pdfPath);

// Récupération des champs remplissables du PDF
$fields = $pdf->getDataFields();

// Création d'une nouvelle instance de la classe Pdf pour chaque opération
$pdf = new Pdf($pdfPath);

// Remplissage des champs avec leur propre nom
$fieldValues = [];
foreach ($fields as $fieldName => $fieldInfo) {
    $fieldValues[$fieldName] = $fieldName;
}

// Création d'une nouvelle instance de la classe Pdf pour chaque opération
$pdf = new Pdf($pdfPath);

// Remplissage du formulaire avec les valeurs récupérées
$result = $pdf->fillForm($fieldValues)
    ->needAppearances()
    ->saveAs($generatedPdfPath);

// Vérification du résultat
if (!$result) {
    echo $pdf->getError();
} else {
    echo 'Le PDF généré a été enregistré avec succès à : ' . $generatedPdfPath;
}