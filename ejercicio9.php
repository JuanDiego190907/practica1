<?php

echo"Bienvenidos al noveno ejercicio yeahhhhh";
echo"<br>";
echo"<br>";

$galonesSurtidos = 12.5;
$litrosPorGalon = 3.785;
$precioPorLitro = 4.50;

$litrosTotales = $galonesSurtidos * $litrosPorGalon;
$totalACobrar = $litrosTotales * $precioPorLitro;

echo "Galones surtidos:", $galonesSurtidos;
echo"<br>";
echo "Equivalente en litros: ", $litrosTotales;
echo"<br>";
echo "Total a cobrar al cliente: $", $totalACobrar;
?>