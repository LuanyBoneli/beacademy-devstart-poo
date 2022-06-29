<?php

include 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '';

for($n =0; $n<10; $n++ ){
    $html .='Ó o pente!<br>';

}

$dompdf->loadHtml('<h1>Olá mundo, estou aprendendo PHP.</h1>'. $html);

$dompdf->render();

$dompdf->stream();