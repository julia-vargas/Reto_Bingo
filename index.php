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

//CREAR JUGADORES
$jugadores = array("J1", "J2", "J3", "J4");

    foreach ($jugadores as $jugador) {
        $jugador = array("C1", "C2", "C3");
        foreach ($jugador as $carton) {
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
        }
    }

var_dump($carton);

for ($i=0; $i < 60; $i++) {
$bombo[$i] = $i + 1;
}

// SACAR BOLAS BOMBO
shuffle($bombo); // Remover el bombo.

$ganador = false;

    // SACAR BOLAS
while ($ganador == false && count($bombo) > 0) {

    $bola = array_pop($bombo);
    $bolasSalidas[] = $bola;

    echo "HA SALIDO LA BOLA: $bola<br>";

    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 6; $j++) {
            if ($carton[$i][$j] != 0) {
                if ($carton[$i][$j] == $bola) {
                     $carton[$i][$j] = 0;
                     echo "---------------ACERTADA LA BOLA {$bola}<br>";
                }
            }
        }
    }

    // CONTAR ACIERTOS DEL CARTÓN
    $aciertos = 0;
    
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 6; $j++) {
            if ($carton[$i][$j] == 0) {
            $aciertos++;
            }
        }
    }

    if ($aciertos == 18) {
        echo "¡BINGO!";
        $ganador = true;
    }
}
?>
</body>
</html>