<?php 

function sayhi() : string {
    return "Hello world!!!";
}

echo sayhi();
echo "<br/>";

function soma($x, $y) : float {
    return $x + $y;
}

echo soma(99,77);
echo "<br/>";
function verificaNome($nome){
    if($nome == "Julio"){
        return "Verdade";
    }else {
        return "Falso";
    }
}

echo verificaNome("Kelly");