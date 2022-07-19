<?php

$livros = array(
    'PHP Básico',
    'PHP Avançado',
    'PHP Manual'
);

for ($i = 0; $i < count($livros); $i++) {
    if (count($livros) > 4) {
        array_push($livros, 'PHP Master');        
        break;  
    }elseif (count($livros) < 3) {
        unset($livros[1]);
    }
    echo $livros[$i] . PHP_EOL; 
}

echo 'Total de livros é ' . count($livros) . PHP_EOL;

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);

$array = [0 => "a", 1 => "b", 2 => "c"];
unset($array[1]);
print_r($array);

