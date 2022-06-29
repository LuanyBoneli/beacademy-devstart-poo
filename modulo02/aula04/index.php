<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';

$c1=  new Cliente('alice@email.com', '221519');
$c1 -> setNome ('Alice');
$c1 -> setDataCadastro ('01/05/2019');


$g1= new Gestor('marina@email.com', '123456', 6000);
$g1 -> setNome ('Marina');

$gg1=new GestorGeral('maria@email.com','1q2w3e', 9000);


