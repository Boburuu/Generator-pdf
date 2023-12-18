<?php

require_once 'vendor/autoload.php'; 
use mikehaertl\pdftk\Pdf;

class Controller {
    public function handleRequest() {
        $data = json_decode(file_get_contents('php://input'), true);

        // Valide et enregistre les informations du donateur dans la base de données
        $donation = new Model($data['donationData']);
        $dao = new Dao();
        $dao->saveDonation($donation);

        $document = $this->generateDocument($donation);

        // Retourne le document prérempli en base64 avec la signature des associations
        $response = [
            'document' => base64_encode($document),
            'associationSignature' => 'signature123', 
        ];

        echo json_encode($response);
    }

    private function generateDocument($donation) {
       
        $pdfViergePath = __DIR__ . '/pdf/document_vierge.pdf';

        $outputFilePath = __DIR__ . '/pdf/document_rempli.pdf';

        $pdf = new Pdf($pdfViergePath);

        $result = $pdf->fillForm([
                'nom' => $donation->getNom(),
                'montant' => $donation->getMontant(),
                // ... 
            ])
            ->needAppearances()
            ->saveAs($outputFilePath);

        if ($result === false) {
            $error = $pdf->getError();
            // ...
        }

        // Lire le contenu du fichier généré
        $documentContent = file_get_contents($outputFilePath);


        return $documentContent;
    }
}

$controller = new Controller();
$controller->handleRequest();
?>
