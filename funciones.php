<?php

function crearJugadores($cantidad)
{
    $jugadores = array();
    for ($i = 1; $i <= $cantidad; $i++) {
        $jugadores[] = "Jugador " . $i;
    }
    return $jugadores;
}

function crearCarton()
{
    $carton = array();
    $numUsado = array();

    for ($i = 0; $i < 3; $i++) {
        $carton[$i] = array();
        $colCero = random_int(0, 5);
        for ($j = 0; $j < 6; $j++) {
            if ($j == $colCero) {
                $carton[$i][$j] = 0;
            } else {
                do {
                    $numaleatorio = random_int($j * 10 + 1, $j * 10 + 10);
                } while (in_array($numaleatorio, $numUsado));

                $numUsado[] = $numaleatorio;
                $carton[$i][$j] = $numaleatorio;
            }
        }
    }
    return $carton;
}

function crearCartonesJugador($cantidad)
{
    $cartones = array();
    for ($i = 1; $i <= $cantidad; $i++) {
        $cartones["Carton " . $i] = crearCarton();
    }
    return $cartones;
}

function crearBombo()
{
    $bombo = array();
    for ($i = 0; $i < 60; $i++) {
        $bombo[$i] = $i + 1;
    }
    return $bombo;
}

function removerBombo($bombo)
{
    $bomboRemovido = shuffle($bombo);
    return $bomboRemovido;
}

function mostrarCarton($carton)
{
    echo "<table>";
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 6; $j++) {
            echo "<td>", $carton[$i][$j], "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}
?>