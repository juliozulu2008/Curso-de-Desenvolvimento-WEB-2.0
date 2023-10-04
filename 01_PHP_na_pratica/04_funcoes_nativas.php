<?php 

$nome = "julio";

//str_replace trocas
$novoNome = str_ireplace("Julio","Kelly",$nome); //Troca o julio pelo kelly na variavel nome

echo $novoNome;

echo "<br/>";
$a1 = "Kelly";

echo $nova = substr($a1, 1, 3);
echo "<br/>";
$frase = "O Corinthians vai ser campeao!";
$novafrase = explode(" ",$frase);

print_r($novafrase);

echo "<br/>";

$novafrase = implode("-", $novafrase);
print_r($novafrase);
