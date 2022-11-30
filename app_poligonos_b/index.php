<?php
require __DIR__.'/vendor/autoload.php';

use src\Poligono;
use src\poligonos\{
    Quadrado,
    Retangulo
};

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do retângulo: '.$poligono->getArea().'</h3>';

/**--------------------QUADRADO-------- */
$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do Quadrado: '.$poligono->getArea().'</h3>';
