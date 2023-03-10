<?php 
//---------------------------------------------------------------------------------

include("Pessoa.php");
include("Funcionario.php");
include("Cliente.php");
include("Produtos.php");
include("Servicos.php");

$ServicoUm = new Servicos("Enterro", 100, "Enterro no cemitério de escolha");
$ServicoDois = new Servicos("Cremação", 70, "Não deixa vestígios");
$ServicoTres = new Servicos("Maçarico", 1, "Ineficiente, porém barato");


echo "Nome: " . $ServicoUm->getNome . " <br>";
echo "Valor: " . $ServicoUm->getValor . " <br>";
echo "Descrição: " . $ServicoUm->getDescricao . " <br>";

echo "<hr>";

//---------------------------------------------------------------------------------

$produtos = new Produtos("Caixão", 200, "Madeira de Carvalho");
$produto2 = new Produtos("Coroa de Flores", 100, "Coroa de Rosas");
$produto3 = new Produtos("Velas", 20, "Velas Brancas");
$produto4 = new Produtos("Capela", 120, "Capela Jaspe");

echo "Nome: " . $produtos->getNome() . " <br>";
echo "Valor: " . $produtos->getValor() . " <br>";
echo "Descrição: " . $produtos->getDescricao() . " <br>";

echo "<hr>";
