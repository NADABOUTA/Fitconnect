<?php

require_once __DIR__.'/../Repositories/AdherentRepository.php';
require_once __DIR__.'/../Repositories/AbonnementRepository.php';
require_once __DIR__.'/../Repositories/SeanceRepository.php';

class AdherentService
{
    private $repo;
    private $abonnementRepo;
    private $seanceRepo;

    public function __construct()
    {
        $this->repo = new AdherentRepository();
        $this->abonnementRepo = new AbonnementRepository();
        $this->seanceRepo = new SeanceRepository();
    }


    // Ajouter adhérent
    public function ajouter($data)
    {
        return $this->repo->create($data);
    }


    // Modifier adhérent
    public function modifier($id, $data)
    {
        return $this->repo->update($id, $data);
    }


    // Supprimer adhérent
    public function supprimer($id)
    {
        $abonnement = $this->abonnementRepo->findByAdherent($id);

        $seances = $this->seanceRepo->findByAdherent($id);

        if ($abonnement || count($seances) > 0)
        {
            throw new Exception("Suppression impossible");
        }

        return $this->repo->delete($id);
    }
}

?>