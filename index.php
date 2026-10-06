<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reto Bingo</title>
</head>
<body>
<h1>RETO BINGO</h1>
<h4>Integrantes: Julia, Mutis y Óscar.</h4>
<?php
$bombo = array();
$bolasSalidas = array();

$carton = array();

for ($i=0; $i < 60; $i++) {
$bombo[$i] = $i + 1;
}

var_dump($bombo);

//CARTONNNNNNN
// Hacemos el array anidado para el cartón con todos sus huequitos
$carton = array();
for ($i=0; $i<3; $i++)
{
    $carton[$i] = array();
    for ($j=0; $j<6; $j++)
    {
        $carton[$i][$j] = random_int($j * 10 + 1, $j * 10 + 10);
        
    }
    $carton[$i][random_int(0, 5)] = 0;
}


var_dump($carton);


// SACAR BOLAS BOMBO
shuffle($bombo); // Remover el bombo.
$bola = array_pop($bombo); // Sacar una bola y quitarla del array (Es la ultima posicion). El array se desplaza a lenght-1 cada vez que sale bola.
array_push($bolasSalidas, $bola); // Se guarda la bola en el array de bolasSalidas para posibles comprobaciones futuras.
echo "HA SALIDO LA BOLA: {$bola}<br>";

var_dump($bombo);
var_dump($bolasSalidas);
?>
</body>
</html>