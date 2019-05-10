<?php   
require '../vendor/autoload.php';

$vetements = ['Jeans', 'Jupes', 'Tops', 'Robes', 'Shorts'];

// Configuration Twig
$loader = new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html.twig', [
    'vetements' => $vetements,
]);