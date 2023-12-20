<?php

// Recepteur des données sur le serveur 


namespace App\Controller;

use App\Model\CerfaModel;
use App\Impl\CerfaImpl;

class CerfaController
{
    public function recevoirDonnees()
    {
        // Simule une requête POST avec des données JSON
        $donneesJson = '{"association": {"a1": "11580*03"}, "donateur": {"nom": "John Doe"}}';

        // Récupère les données JSON
        $donnees = json_decode($donneesJson, true);

        // Vérifie si les données JSON sont valides
        if ($donnees === null) {
            return 'Données JSON invalides';
        }

        // Instancie le modèle
        $cerfaModel = new CerfaModel('./config/form_field.json');

        // Remplit le formulaire avec les données reçues
        $resultatRemplissage = $cerfaModel->remplirFormulaire($donnees);

        // Gère le résultat du remplissage (sauvegarde en base de données, etc.)
        // ...

        // Instancie le générateur
        $cerfaGenerator = new CerfaImpl();

        // Appelle la méthode pour remplir le formulaire PDF
        $resultatRemplissagePdf = $cerfaGenerator->remplirFormulairePdf($donnees);

        // Gère le résultat du remplissage du formulaire PDF
        if ($resultatRemplissagePdf !== true) {
            return 'Erreur lors du remplissage du formulaire PDF : ' . $resultatRemplissagePdf;
        }

        // Renvoie une réponse au client (simulée ici avec un simple texte)
        return 'Formulaire rempli avec succès et PDF généré.';
    }
}

// Exemple d'utilisation
$controller = new CerfaController();
echo $controller->recevoirDonnees();
