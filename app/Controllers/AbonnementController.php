<?php

require_once __DIR__.'/../Repositories/AbonnementRepository.php';
require_once __DIR__.'/../Services/AbonnementService.php';

class AbonnementController
{
    private $repo;
    private $service;
    public function __construct()
    {
        $this->repo = new AbonnementRepository();
        $this->service = new AbonnementService();
    }

    public function index()
    {
        return $this->repo->findAll();
    }
    public function show($id)
    {
        return $this->repo->findById($id);
    }
}
?>