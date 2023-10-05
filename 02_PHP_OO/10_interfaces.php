<?php
//Interface é um "desenho" da classe antes dela ser declarada
interface Julio
{
    public function getNome(); // se declara o escopo da função
    public function setNome($nome);
}


class Programador implements Julio     //utilizase a palavra implementes
{
    private $nome = "Julio";

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}

$programador = new Programador();
echo $programador->getNome(); // Isso imprimirá "Julio"
echo "<br/>";
$programador->setNome("Kelly");
echo $programador->getNome(); // Isso imprimirá "NovoNome"
