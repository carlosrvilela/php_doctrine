<?php

use Projeto\Doctrine\Entity\Course;
use Projeto\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__.'/../vendor/autoload.php';


$entityManager = EntityManagerCreator::createEntityManager();


$course = new Course($argv[1]);

$entityManager->persist($course);
$entityManager->flush();