<?php

require_once 'Triangulo.php';
require_once 'Quadrado.php';
require_once 'Circulo.php';

$triangulo = new Triangulo(3, 4, 5, 6);
echo "Área do triângulo: " . $triangulo->calcularArea() . "\n";
echo "Comprimento do triângulo: " . $triangulo->calcularComprimento() . "\n";

$quadrado = new Quadrado(4);
echo "Área do quadrado: " . $quadrado->calcularArea() . "\n";
echo "Comprimento do quadrado: " . $quadrado->calcularComprimento() . "\n";

$circulo = new Circulo(5);
echo "Área do círculo: " . $circulo->calcularArea() . "\n";
echo "Comprimento do círculo: " . $circulo->calcularComprimento() . "\n";

?>
