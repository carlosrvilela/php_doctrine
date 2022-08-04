<?php

use Projeto\Doctrine\Entity\Student;
use Projeto\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = $entityManager->find(Student::class ,$argv[1]);
// $student = $entityManager->getPartialReference(Student::class ,$argv[1]);
$entityManager->remove($student);

$entityManager->flush();