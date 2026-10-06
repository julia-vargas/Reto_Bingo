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
        <h3>Oscar Bernases</h3>
        <h3>Daniel Mutis</h3>
        <h3>Julia Vargas</h3>
    </div>

    <?php
    
        //Comienzo de variables auxiliares para bucles
        $fil = 0; //filas del bucle del carton
        $col = 0; //columnas del bucle de carton

        $casilla = [1,2,3,0,5];
        $num = 0;

        echo"<table border='1' cellspading='5' cellspacing='0' border_cursor='center'>";
        echo"<tr><th>.</th><th>.</th><th>.</th><th>.</th><th>.</th></tr>";
        echo"<tr>";
        //comienzo de las casillas de las cartillas de bingo

        for ($fil = 0; $fil <3; $fil++)
        {
            echo "<tr>";

            for ($col = 0; $x < 5; $x++) 
            {

                echo "<td align='center'>",$casilla[$col],"</td>";
                

            }

            echo "</tr>";
        }

        echo"</table>";
    ?>
    
</body>
</html>