<?php

use Projeto\Doctrine\Entity\Student;
use Projeto\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__.'/../vendor/autoload.php';


$entityManager = EntityManagerCreator::createEntityManager();

$student =  new Student($argv[1]);
$entityManager->persist($student);
$entityManager->flush();