<?php
require_once 'AbonnementService.php';
require_once __DIR__.'/../Repositories/SeanceRepository.php';

class SeanceService
{
    private $repo;
    private $abonnementService;
    
    public function __construct()
    {
        $this->repo = new SeanceRepository();

        $this->abonnementService = new AbonnementService();

    }

    public function ajouter($data)
    {
        $valide = $this->abonnementService ->abonnementValide( $data['id_adherent']);

        if(!$valide)
        {
            throw new Exception(

                "Abonnement non valide"

            );
        }
        return $this->repo ->create($data);

    }

}
?>