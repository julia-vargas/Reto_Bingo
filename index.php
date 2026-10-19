<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reto Bingo</title>
</head>
<body>
<style>
    table{
    margin-bottom: 15px;
    border: 2px solid #000;

}

td{
    padding: 10px 15px solid #000;
    text-align: center;
    border: 2px solid #000;
    width: 22px;
    height: 24px;
}
</style>

<h1>RETO BINGO</h1>
<h4>Integrantes: Julia, Mutis y Óscar.</h4>
<?php

require "funciones.php";

//CREAR JUGADORES Y CARTONES
$jugadores = crearJugadores(4);
$todos_los_cartones = array();

//GENERAR BOMBO
$bombo = crearBombo();
$bomboRemovido = removerBombo($bombo);
$bolasSalidas = array();

// MOSTRAR CARTONES DE CADA JUGADOR
foreach ($jugadores as $jugador) {
    echo "<h2>Jugador: $jugador</h2>";

    $mis_cartones = crearCartonesJugador(3);

    foreach ($mis_cartones as $nombre_carton => $carton) {
        echo "<h3>Cartón: $nombre_carton</h3>";
        mostrarCarton($carton);
    }

    $todos_los_cartones[$jugador] = $mis_cartones;
}



// JUEGO BINGO
$ganador = false;

// SACAR BOLAS
while ($ganador == false && count($bombo) > 0) {

    $bola = array_pop($bombo);
    $bolasSalidas[] = $bola;

    echo "HA SALIDO LA BOLA: $bola<br>";

    foreach ($todos_los_cartones as $nombre_jugador => &$mis_cartones) { // el & para poder modificar directamente el array de jugadores reales y no la copia del foreach

        foreach ($mis_cartones as $id_carton => &$cartones) // el & para poder modificar directamente sobre el cartón real (y tachar), en lugar de la copia -> si no no avanza
        {
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 6; $j++) {
                    if ($cartones[$i][$j] != 0) {
                        if ($cartones[$i][$j] == $bola) {
                            $cartones[$i][$j] = 0;
                            echo "--------------- HA ACERTADO LA BOLA {$bola} EN EL CARTÓN {$nombre_jugador} - {$id_carton}<br>";
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
                echo "¡BINGO PARA {$nombre_jugador} CON EL CARTÓN {$id_carton}! <br>";
                $ganador = true;
            }
        }
    }
}
?>
</body>
</html>