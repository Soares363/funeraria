<?php 

include("Produtos.php");
include("Adicionais.php");


$produtos = new Produtos("Caixão", 200, "Madeira de Carvalho");
$produto2 = new Produtos("Coroa de Flores", 100, "Coroa de Rosas");
$produto3 = new Produtos("Velas", 20, "Velas Brancas");
$produto4 = new Produtos("Capela", 120, "Capela Jaspe");

echo "Nome: " . $produtos->getNome() . " <br>";
echo "Valor: " . $produtos->getValor() . " <br>";
echo "Descrição: " . $produtos->getDescricao() . " <br>";

echo "<hr>";
