<?php

use Projeto\Doctrine\Entity\Student;
use Projeto\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

$studentsList = $studentRepository->findAll();

foreach ($studentsList as $student){
    print "ID: $student->id\nNome: $student->name\n\n";
}

$result = $studentRepository->findBy(['name' => 'Fulano de Tal']);
var_dump($result);

print $studentRepository->count([]);
