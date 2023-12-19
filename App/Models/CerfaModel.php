<?php
// CerfaModel.php

namespace App\Model;

class CerfaModel
{
    private $formFields;

    public function __construct($filePath)
    {
        // Chargez les champs du formulaire depuis le fichier JSON
        $this->formFields = json_decode(file_get_contents('./config/form_fields.json'), true);
    }

    public function fillForm(array $formData)
    {
        // Vérifiez que les champs fournis correspondent à la structure attendue
        $isValid = $this->validateFormData($formData);

        if (!$isValid) {
            return 'Les données du formulaire sont invalides.';
        }

    }

    private function validateFormData(array $formData)
    {
        // Ajoutez la logique de validation en fonction de la structure attendue
        // Comparez les clés de $formData avec les clés définies dans $this->formFields

        // Pour simplifier, considérons que toutes les clés doivent être présentes
        foreach ($this->formFields['association'] as $field => $details) {
            if (!isset($formData['association'][$field])) {
                return false;
            }
        }

        foreach ($this->formFields['donateur'] as $field => $details) {
            if (!isset($formData['donateur'][$field])) {
                return false;
            }
        }

        return true;
    }
}


?>
