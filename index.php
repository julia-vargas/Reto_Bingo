<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
    <link rel="stylesheet" href="\css\main.css">
</head>
<body>
    <div class="nombres">
        <h5>Oscar Bernases</h5>
        <h5>Daniel Mutis</h5>
        <h5>Julia Vargas</h5>
    </div>

    <?php
    
        //Creacion de los jugadores
        

        //Comienzo de variables auxiliares para bucles
        $fil = 0; //filas del bucle del carton
        $col = 0; //columnas del bucle de carton

        //variables auxiliares para los bucles
        $x = 0;
        $z = 0;

        //jugadores y numero de cartones variables
        $numJugadores = 0;
        $numTablas = 0;

        $jugadores = [];

        $casilla = [1,2,3,0,5]; //prueba con array
        $num = 0;

        echo"<table border='1' cellspadding='11' cellspacing='1' border_cursor='center'>";

        //comienzo de las casillas de las cartillas de bingo


        for ($numJugadores=0; $numJugadores<4; $numJugadores++)
        {
             $jugadores[$numJugadores] = [];

            for ($numTablas= 0; $numTablas< 3; $numTablas++)
            {
                $tablero[$numTablas] = [];
                
                //filas con su variable
                for ($fil = 0; $fil <3; $fil++)
                {
                    echo "<tr>";

                    //Aqui recorre la columnas
                    for ($col = 0; $col < 5; $col++) 
                    {

                        //Aqui tiene que ponerse el array para generarlo en la casilla
                        echo "<td align='center'>",$tablero[],"</td>";
                        

                    }

                    echo "</tr>";
                }
            }
        }

        echo"</table>";
    ?>
    
</body>
</html>