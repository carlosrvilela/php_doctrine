<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Projeto\Doctrine\Helper\EntityManagerCreator;

// replace with file to your own project bootstrap
require_once __DIR__.'/vendor/autoload.php';

// replace with mechanism to retrieve EntityManager in your app
$entityManager = EntityManagerCreator::createEntityManager();

return ConsoleRunner::createHelperSet($entityManager);