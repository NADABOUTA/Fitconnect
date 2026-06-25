<?php

require_once __DIR__.'/../Services/AdherentService.php';
require_once __DIR__.'/../Repositories/AdherentRepository.php';

class AdherentController
{
    private $service;
    private $repo;

    public function __construct()
    {
        $this->service = new AdherentService();
        $this->repo = new AdherentRepository();
    }

    public function index()
    {
        return $this->repo->findAll();
    }


    public function show($id)
    {
        return $this->repo->findById($id);
    }


    public function create($data)
    {
        return $this->service->ajouter($data);
    }


    public function update($id, $data)
    {
        return $this->service->modifier($id, $data);
    }


    public function delete($id)
    {
        return $this->service->supprimer($id);
    }
}

?>