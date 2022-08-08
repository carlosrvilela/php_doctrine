<?php

namespace Projeto\Doctrine\Entity;

use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\ManyToMany;
use Projeto\Doctrine\Entity\Student;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[Entity]
class Course
{
    #[Id, GeneratedValue, Column]
    public int $id;

    #[ManyToMany(targetEntity:Student::class, mappedBy: "courses")]
    private Collection $students;

    public function __construct(
        #[Column]
        public readonly string $name

    ) {
        $this->students = new ArrayCollection();
    }

    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(Student $student): void
    {
        if ($this->students->contains($student)) {
            return;
        }
        
        $this->students->add($student);
        $student->enrolInCourse($this);
    }
}
