<?php

include 'Produto.php';

$p2= new Produto();


$p1 = new Produto();
$p1 ->alterarNome ('Tenis para corrida');
$p1 ->alterarValor (399);

$p2 = new Produto();
$p2 ->nome ('Calça de moletom');
$p2 -> valor (80);
