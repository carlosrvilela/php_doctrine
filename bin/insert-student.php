<?php

use Projeto\Doctrine\Entity\Phone;
use Projeto\Doctrine\Entity\Student;
use Projeto\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__.'/../vendor/autoload.php';


$entityManager = EntityManagerCreator::createEntityManager();

// $student =  new Student($argv[1]);
$student =  new Student('Aluno2 com telefones');
// $phone1 = new Phone('(11) 11111 - 1111');
$phone2 = new Phone('(77) 77777 - 7777');

// $entityManager->persist($phone1);
$entityManager->persist($phone2);

// $student->addPhone($phone1);
$student->addPhone($phone2);

$entityManager->persist($student);
$entityManager->flush();