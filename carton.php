
<?php

    // Hacemos el array anidado para el cartón con todos sus huequitos
    $carton = array();
    for ($i=0; $i<3; $i++)
    {

        $carton[$i] = array();
        for ($j=0; $j<6; $j++)
        {
            $carton[$i][$j] = null;
        }
        $carton[$i][random_int(0, 5)] = 0;
    
    }
    var_dump($carton);



?>