<?php

namespace App\Domain\Repository;

use App\Domain\Model\Student;

interface StudentRepository
{
    public function allStudents(): array;
    public function studentsWithPhones(): array;
    public function studentsBirthAt(\DateTimeInterface $birthDate): array;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;
}
