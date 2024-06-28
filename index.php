<?php

require_once "./src/Models/Teste.php";
require_once "./src/Class/Teste.php";



use treinamento\Class\Teste as ClassTeste;
use treinamento\Models\Teste;

$testePrint = new Teste();
$testePrint->print();


$testePrint = new ClassTeste();

$testePrint->print();
