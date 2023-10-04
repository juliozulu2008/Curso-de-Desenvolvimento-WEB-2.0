<?php 

class Julio
{
    //Metodos e atributos.
    // __contruct é o metodo contrutor desta classe
    function __construct(){ //ao crira a instancia da classe
        echo "Hello world";
    }
    public function PrintNome($nome){
        return $nome;
    }
}

new Julio();

$pessoa = new Julio();
echo "<br/>";
echo $pessoa->PrintNome("Julio");

?>