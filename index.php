<?php 
//---------------------------------------------------------------------------------
include("Adicionais.php");
include("Produtos.php");
include("Servicos.php");

echo "<h2>Serviços</h2>";


$Servico1 = new Servicos("Enterro", 100, "Enterro no cemitério de escolha");
$Servico2 = new Servicos("Cremação", 70, "Não deixa vestígios");
$Servico3 = new Servicos("Maçarico", 1, "Ineficiente, porém barato");

echo "Nome: " . $Servico1->getNome() . " <br>";
echo "Valor: " . $Servico1->getValor() . " <br>";
echo "Descrição: " . $Servico1->getDescricao() . " <br>";

echo "<br>";


echo "Nome: " . $Servico2->getNome() . " <br>";
echo "Valor: " . $Servico2->getValor() . " <br>";
echo "Descrição: " . $Servico2->getDescricao() . " <br>";

echo "<br>";


echo "Nome: " . $Servico3->getNome() . " <br>";
echo "Valor: " . $Servico3->getValor() . " <br>";
echo "Descrição: " . $Servico3->getDescricao() . " <br>";

echo "<hr>";

//---------------------------------------------------------------------------------


echo "<h2>Produtos</h2>";

$produtos = new Produtos("Caixão", 200, "Madeira de Carvalho");
$produto2 = new Produtos("Coroa de Flores", 100, "Coroa de Rosas");
$produto3 = new Produtos("Velas", 20, "Velas Brancas");
$produto4 = new Produtos("Capela", 120, "Capela Jaspe");

echo "Nome: " . $produtos ->getNome() . " <br>";
echo "Valor: " . $produtos->getValor() . " <br>";
echo "Descrição: " . $produtos->getDescricao() . " <br>";

echo "<br>";

echo "Nome: " . $produto2 ->getNome() . " <br>";
echo "Valor: " . $produto2->getValor() . " <br>";
echo "Descrição: " . $produto2->getDescricao() . " <br>";

echo "<br>";

echo "Nome: " . $produto3 ->getNome() . " <br>";
echo "Valor: " . $produto3->getValor() . " <br>";
echo "Descrição: " . $produto3->getDescricao() . " <br>";

echo "<br>";

echo "Nome: " . $produto4 ->getNome() . " <br>";
echo "Valor: " . $produto4->getValor() . " <br>";
echo "Descrição: " . $produto4->getDescricao() . " <br>";
