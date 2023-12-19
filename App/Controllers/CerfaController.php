<?php

// CerfaController.php

namespace App\Controller;

use App\Model\CerfaModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//Recepteur de données clients 

class CerfaController
{
    public function ReceptData(Request $request)
    {
        // Recupere les données json
        $jsonData = json_decode($request->getContent(), true);

        // Vérifie si les données JSON sont valides
        if ($jsonData === null) {
            return new Response('Invalid JSON data', 400);
        }

        // Instancier le modèle
        $cerfaModel = new CerfaModel('./config/form_field.json');

       
    }
}


?>
