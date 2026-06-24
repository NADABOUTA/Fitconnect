<?php

require_once '../config/Database.php';
require_once '../app/Repositories/AdherentRepository.php';
require_once '../app/Repositories/AbonnementRepository.php';
require_once '../app/Repositories/SeanceRepository.php';

$repo3 = new SeanceRepository();


echo "<h2>Seances</h2>";

echo "<pre>";

print_r($repo3->findAll());

echo "</pre>";

$repo1 = new AdherentRepository();
$repo2 = new AbonnementRepository();


echo "<h2>Adherents</h2>";
echo "<pre>";
print_r($repo1->findAll());
echo "</pre>";


echo "<h2>Abonnements</h2>";
echo "<pre>";
print_r($repo2->findAll());
echo "</pre>";

?>