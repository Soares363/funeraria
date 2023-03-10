<?php 

include("Animal.php");
include("Cachorro.php");
include("Gato.php");
include("Tartaruga.php");
include("Cobra.php");


$cao = new Cachorro("Totó", "Vira-lata", 3, "Caramelo");
$gato = new Gato("Mingau", "Vira-lata", 2, "Branco");
$tartaruga = new Tartaruga("Tartaruga", "Jabuti", 100, "Verde");
$cobra = new Cobra("Leticia", "Python", 5, "Preto");

echo "Nome: " . $cobra->getNome() . " <br>";
echo "Raça: " . $cobra->getRaca() . " <br>";
echo "Idade: " . $cobra->getIdade() . " <br>";
echo "Cor: " . $cobra->getCor() . " <br>";
$cobra->falar();
$cobra->andar();

echo "<hr>";

echo "Nome: " . $cao->getNome() . " <br>";
echo "Raça: " . $cao->getRaca() . " <br>";
echo "Idade: " . $cao->getIdade() . " <br>";
echo "Cor: " . $cao->getCor() . " <br>";
$cao->falar();
$cao->andar();

echo "<hr>";

echo "Nome: " . $gato->getNome() . " <br>";
echo "Raça: " . $gato->getRaca() . " <br>";
echo "Idade: " . $gato->getIdade() . " <br>";
echo "Cor: " . $gato->getCor() . " <br>";
$gato->falar();

echo "<hr>";

echo "Nome: " . $tartaruga->getNome() . " <br>";
echo "Raça: " . $tartaruga->getRaca() . " <br>";
echo "Idade: " . $tartaruga->getIdade() . " <br>";
echo "Cor: " . $tartaruga->getCor() . " <br>";
$tartaruga->falar();
