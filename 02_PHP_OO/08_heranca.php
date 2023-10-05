<?php 

class Aplicacao
{
    public function __construct($nome) {
        echo $nome;
    }
    public function runApp(){
        echo "Rodando";
    }
}

class Teste  extends Aplicacao // ao utilizar extendes eu uso a herança e tenho acesso ao metodos da superclase
{
    public function __construct() {
        parent::__construct('Julio'); //palavra parent no php possibilita o contrutor usar qualquer metodo e atributo
    }
    public function testar(){
        echo "testar";
    }
}

$var1 = new Teste();
$var1->runApp();
























?>