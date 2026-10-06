
<?php

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



?>