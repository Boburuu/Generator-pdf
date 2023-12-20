<?php

// Recepteur des données sur le serveur 

namespace App\Controller;

use App\Model\CerfaModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//Recepteur de données clients 

class CerfaController
{
    public function ReceptData(Request $request)
    {
        // Recupere les donnees json
        $jsonData = json_decode($request->getContent(), true);

        // Verifie si les donnees JSON sont valides
        if ($jsonData === null) {
            return new Response('Invalid JSON data', 400);
        }

        // Instancie le model
        $cerfaModel = new CerfaModel('./config/form_field.json');

           // Remplis le formulaire avec les données reçues
        $resultatRemplissage = $cerfaModel->remplirFormulaire($donneesJson);
       
    }
}


?>
