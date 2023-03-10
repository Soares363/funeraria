<?php 
//---------------------------------------------------------------------------------
include("Adicionais.php");
include("Servicos.php");

$ServicoUm = new Servicos("Enterro", 100, "Enterro no cemitério de escolha");
$ServicoDois = new Servicos("Cremação", 70, "Não deixa vestígios");
$ServicoTres = new Servicos("Maçarico", 1, "Ineficiente, porém barato");

echo "Nome: " . $ServicoUm->getNome . " <br>";
echo "Valor: " . $ServicoUm->getValor . " <br>";
echo "Descrição: " . $ServicoUm->getDescricao . " <br>";

echo "<hr>";

//---------------------------------------------------------------------------------