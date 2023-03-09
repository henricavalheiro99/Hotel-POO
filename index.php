<?php 

include("HotelInterface.php");
include("Quarto.php");
include("QuartoCasal.php");
include("QuartoSolteiro.php");
include("QuartoMaster.php");

$quarto1 = new Casal(
    "cama de casal",
    "comum",
    "TV a cabo",
    "Geladeira e microondas"
);

$quarto2 = new Solteiro(
    "cama de solteiro",
    "comum",
    "TV aberta",
    "Frigobar"
);

$quarto3 = new Master(
    "2 camas de casal",
    "Banheira",
    "TV e videogame",
    "Cozinha completa"
);


$quarto1->tipo();
$quarto1->numero(); 
$quarto1->andar();

echo "<hr>";

$quarto2->tipo();
$quarto2->numero(); 
$quarto2->andar();

echo "<hr>";

$quarto3->tipo();
$quarto3->numero();
$quarto3->andar();

echo "<hr>";

?>