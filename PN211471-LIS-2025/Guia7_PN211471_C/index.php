<?php
include_once 'Controllers/EditorialesController.php';
include_once 'Controllers/IndexController.php';
include_once 'Controllers/AutoresController.php';
$url = $_SERVER['REQUEST_URI'];
$slices=explode('/', $url);

const PATH ='/PN211471-LIS-2025/Guia7_PN211471_C';
//print_r($slices);
$controller = $slices[3]."Controller";
$method=empty($slices[4])?"index":$slices[4];
$params=empty($slices[5])?'':array_slice($slices,5);
//echo $controller;
//echo $method;
//print_r($params);

$cont = new $controller;
$cont->$method($params);