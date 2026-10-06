
<?php

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