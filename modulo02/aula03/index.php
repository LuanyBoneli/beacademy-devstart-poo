<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria ('Roupas', 'Roupas Unissex');
$c2 = new Categoria ('Roupas de Banho', 'Toalhas');
$c3 = new Categoria ('Calçados','teste');

$p1 = new Produto('Tenis', 299, $c3);
//$p1 ->setNome ('Tenis para corrida');
//$p1 ->setValor (399);

$p2 = new Produto('Calça de moletom', 80, $c1);
//$p2 ->setNome ('Calça de moletom');
//$p2 -> setValor (80);

$p3 = new Produto('Camiseta Branca', 50.90, $c1);

