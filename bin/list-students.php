<?php

use Projeto\Doctrine\Entity\Phone;
use Projeto\Doctrine\Entity\Student;
use Projeto\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

$studentsList = $studentRepository->findAll();

foreach ($studentsList as $student){
    print "ID: $student->id\nNome: $student->name\nTelefones: ";
    print implode(separator: ', ', array:($student->getPhones()->map(fn (Phone $phone) => $phone->number))->toArray());

    print"\n\n";
}


exit();
$result = $studentRepository->findBy(['name' => 'Fulano de Tal']);
var_dump($result);

print $studentRepository->count([]);
