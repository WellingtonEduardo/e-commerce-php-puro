<?php

use App\Infrastructure\Persistence\ConnectionCreator;
use App\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var \App\Domain\Model\Student[] $studentList */
$studentList = $repository->studentsWithPhones();

var_dump($studentList);
