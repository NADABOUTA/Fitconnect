<?php

require_once __DIR__.'/../Repositories/AbonnementRepository.php';

class AbonnementService
{
    private $repo;
    
    public function __construct()
    {
        $this->repo = new AbonnementRepository();
    }
    
    public function abonnementValide($idAdherent)
    {
        $abonnement = $this->repo ->findByAdherent($idAdherent);

        if(!$abonnement)
        {
            return false;
        }

        $today = date('Y-m-d');

        return (

            $today >= $abonnement['date_debut'] && $today <= $abonnement['date_fin']

        );
    }
}

?>