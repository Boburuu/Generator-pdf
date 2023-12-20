<?php


//Interface entre la base de donnée et du model (traduction du model pour le mettre dans la base de donnée)


namespace App\DTO;

class CerfaDTO
{
    private $association;
    private $donateur;

    // Constructeur pour initialiser le DTO avec les donnees
    public function __construct(array $association, array $donateur)
    {
        $this->association = $association;
        $this->donateur = $donateur;
    }

    // Méthodes getters pour accéder aux données du DTO
    public function getAssociation()
    {
        return $this->association;
    }

    public function getDonateur()
    {
        return $this->donateur;
    }
}
?>
