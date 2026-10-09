<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="main.css">
<title>Reto Bingo</title>
</head>
<body>
<h1>RETO BINGO</h1>
<h4>Integrantes: Julia, Mutis y Óscar.</h4>
<?php

//CREAR JUGADORES
$jugador = array("C1", "C2");
$mis_cartones = array(); //lo creamos fuera para que no se pierda dentro del for (se va guardando aquí)

foreach ($jugador as $nombre_carton) { 
    $carton = array();
    $numUsado = array();
    echo "<h3>Cartón: $nombre_carton</h3>"; //Indica qué cartón es
    echo"<table>";
    for ($i=0; $i<3; $i++)
    {
        $carton[$i] = array();
        $colCero = random_int(0,5);
        echo "<tr>";
        for ($j=0; $j<6; $j++)
        {
            if ($j == $colCero)
            {
                $carton[$i][$j] = 0;
            }
            else
            {
                do
                {
                $numaleatorio = random_int($j * 10 +1, $j * 10 + 10);
                } while (in_array($numaleatorio, $numUsado));

                $numUsado[] = $numaleatorio;
                $carton[$i][$j] = $numaleatorio;
            }
            echo "<td>",$carton[$i][$j],"</td>";
        }
        echo "</tr>";
    }
    echo"</table>";
    echo"<br>";
    $mis_cartones[$nombre_carton] = $carton; //lo guardamos fuera del for en el array de cartones
}


//GENERAR BOMBO
$bombo = array();
$bolasSalidas = array();

for ($i=0; $i< 60; $i++) {
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

foreach ($mis_cartones as $id_carton => &$cartones) // el & para poder modificar directamente sobre el cartón real (y tachar), en lugar de la copia -> si no no avanza
    {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 6; $j++) {
            if ($cartones[$i][$j] != 0) {
                if ($cartones[$i][$j] == $bola) {
                     $cartones[$i][$j] = 0;
                     echo "---------------J1 HA ACERTADO LA BOLA {$bola} EN EL CARTÓN {$id_carton}<br>"; 
                }
            }
        }
    }

    // CONTAR ACIERTOS DEL CARTÓN
    $aciertos = 0;
    
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 6; $j++) {
            if ($cartones[$i][$j] == 0) { 
            $aciertos++;
            }
        }
    }

    if ($aciertos == 18) {
        echo "¡BINGO PARA J1 CON EL CARTÓN {$id_carton}!";
        $ganador = true;
    }
    }
}

?>
</body>
</html>