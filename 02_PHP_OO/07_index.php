<?php   

//Modifeicadores de acesso Public Private e Protected
class Teste
{

    public static $contagem = 0;

    private function printNome(){
        echo "Julio";
    }
    

    public function printNomePublic(){
        $this->printNome();
    }


    //Static
    public static function getAge(){
        echo 27;
    }
    
    public static function incrementar(){ // metodo estaticos sao "isolados da classe"
        self::$contagem++;
    }
}

$var1 = new Teste();
$var1->printNomePublic("Nome");
echo "<br/>";
//static
Teste::getAge(); // Com o static posso fazer uma referencia direta para a classe como no exemplo abaixo
//Tomar cuidade pois deifernte de isntanciar uma classe ao referenciar sue valor pode ser alterado.
//xemplo abaixo
echo "</br>";
echo Teste::$contagem;
echo "</br>";
Teste::incrementar();
echo Teste::$contagem;
echo "</br>";


?>