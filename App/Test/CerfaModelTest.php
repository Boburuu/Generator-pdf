<?php

use PHPUnit\Framework\TestCase;
use App\Model\CerfaModel;

class CerfaModelTest extends TestCase
{
    public function testRemplirFormulaire()
    {
        $cerfaModel = new CerfaModel('./config/form_field.json');

        $donnees = [
            'association' => [
                'a1' => '11580*03',
                'a2' => 'Croix rouge bordeaux',
                'a3' => 'Moët et jambon',
            ],
            'donateur' => [
                'nom' => 'John Doe',
                'adresse' => '123 rue de la Test',
            ],
        ];

        // Appele de la méthode à tester
        $resultat = $cerfaModel->remplirFormulaire($donnees);

        // Verifier les résultats attendus
        $this->assertEquals('Le formulaire a été rempli avec succès.', $resultat);
    }
}
