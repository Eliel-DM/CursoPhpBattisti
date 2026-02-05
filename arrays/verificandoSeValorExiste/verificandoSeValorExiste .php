<?php

$arr  =[
    'nome' => "Eliel",
    'idade' => 29
];

if(array_key_exists("nome", $arr)){
    echo "Chave existe <br>";
} else {
    echo "Chave não existe  <br>";
}

if(array_key_exists("data", $arr)){
      echo "Chave existe  <br>";
} else {
    echo "Chave não existe <br>";
}



if(isset($arr['nome'])) {
     echo "Chave existe ISSET <br>";
} else {
    echo "Chave não existe ISSET <br>";
}