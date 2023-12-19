<?php
require_once __DIR__ . '/../vendor/autoload.php';

use mikehaertl\pdftk\Pdf;

        $pdf = new Pdf('./pdf/cerfa_entreprises.pdf');
        $result = $pdf->fillForm([
    ])
    ->needAppearances()
    ->saveAs('./pdf/generated/cerfa_entreprises_generated.pdf');

?>
