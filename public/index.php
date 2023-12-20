<?php


require_once __DIR__ . '/../vendor/autoload.php';

use App\Controller\CerfaController;
use App\Impl\CerfaImpl;
use App\DTO\CerfaDTO;

// Instancie le contrôleur
$cerfaController = new CerfaController();

// Supposez que vous avez déjà obtenu les données du formulaire et stocke dans $donneesFormulaire
$donneesFormulaire = array(
    'association' => array(/* ... */),  
    'donateur' => array(/* ... */),     
);


// Crée un objet CerfaDTO avec les données
$cerfaDTO = new CerfaDTO($donneesFormulaire['association'], $donneesFormulaire['donateur']);

// Remplissage du formulaire
$resultatRemplissage = $cerfaController->remplirFormulaire($cerfaDTO);

// Vérifie le résultat du remplissage
if ($resultatRemplissage === true) {
    echo 'Le formulaire a été rempli avec succès.';
} else {
    echo 'Erreur lors du remplissage du formulaire: ' . $resultatRemplissage;
}

