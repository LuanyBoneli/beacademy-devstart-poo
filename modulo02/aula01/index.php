<?php

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor();
$p1 -> nome = 'Tom';
$p1 -> cpf = '36500088845';
$p1 -> salario = 10000;

var_dump ($p1);



