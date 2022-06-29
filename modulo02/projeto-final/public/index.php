<?php

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;

$url = explode ('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName){
    return[
          'controller'=> $controllerName,
          'method'=>$methodName,
    ];
}

$routes =[
    '/' => createRoute(IndexController::class, 'indexAction'),
   
    '/produtos'=> createRoute (ProductController::class, 'listAction'),
];




