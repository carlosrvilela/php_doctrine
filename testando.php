<?php

require_once __DIR__.'/vendor/autoload.php';

use Projeto\Doctrine\Helper\EntityManagerCreator;

$entityManager = EntityManagerCreator::createEntityManager();
var_dump($entityManager);