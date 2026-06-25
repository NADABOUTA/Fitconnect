<?php


require_once __DIR__.'/../Services/SeanceService.php';
require_once __DIR__.'/../Repositories/SeanceRepository.php';


class SeanceController
{
    private $repo;
    private $service;
    public function __construct()
    {
        $this->repo = new SeanceRepository();
        $this->service = new SeanceService();
    }

    public function index()
    {
        return $this->repo->findAll();
    }

    public function create($data)
    {
        return $this->service->ajouter($data);
    }

}
?>