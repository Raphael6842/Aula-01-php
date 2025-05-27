<?php

echo "Hello World"; // strings valores 

echo "<br>";

echo 2025; // int
echo "<br>";
echo 10.57; // float

echo "<br>";
var_dump(false); // bool - verdadeiro e falso
echo "<br>";

var_dump(null); // null 

echo "<br>";
var_dump ([
"João",
2025,
0
]); // array

echo '<br>';

$nome_da_varialvel;

$x = 6;

$y = 8;


$soma = $x + $y;

echo $soma;

echo '<br>';


$nome = "Zerai Mundo";
$data_nascimento = "1970-01-27";
$endereco = [
    "Rua comendador",
    "Brasil zil",
    367
];

$pessoa = [
   'nome' => $nome,
   'data' => $data_nascimento,
   'endereco' => $endereco
];

//$array[<chave>]

echo $pessoa['nome'];

echo "<br><br>";

echo $pessoa['endereco'][0];

echo "<br><br>";


/*Zerrai Mundo nasceu em <data>, mora no bairro tal, na rua tal, N° x */


//com interpretação 
$mensagem = "$soma nasceu em {$pessoa['data']}, mora no bairro {$pessoa['endereco'][1]}, na rua {$pessoa['endereco'][0]}, N° {$pessoa['endereco'][2]}";

//com concatenação
$mensagem = $nome . 'nasce em' . $pessoa["data"] . ', mora no bairro ' . $pessoa["endereco"][1] . ', na rua ' . $pessoa["endereco"][0] . ', N° ' . $pessoa["endereco"][0]; 

echo $mensagem;