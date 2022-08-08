<?php

use Projeto\Doctrine\Entity\Course;
use Projeto\Doctrine\Entity\Student;
use Projeto\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__.'/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$studentId = $argv[1];
$courseId = $argv[2];

$student = $entityManager->find(Student::class, $studentId);
$course = $entityManager->find(Course::class, $courseId);

$student->enrolInCourse($course);

$entityManager->flush();
