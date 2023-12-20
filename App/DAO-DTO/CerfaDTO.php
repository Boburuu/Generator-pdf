<?php


//Interface entre la base de donnée et du model (traduction du model pour le mettre dans la base de donnée)

namespace App\DTO;

class CerfaDTO
{
    private $association;
    private $donateur;

    public function __construct(array $association, array $donateur)
    {
        $this->association = $association;
        $this->donateur = $donateur;
    }

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
