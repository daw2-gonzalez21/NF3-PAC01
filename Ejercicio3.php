<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
            <?php
                include "Ejercicio2.php";
                $mesactual = date('n');
                if ($mesactual == 1){
                    echo "Buen invierno";
                }
                if ($mesactual == 2){
                    echo "Buen invierno.";
                }
                if ($mesactual == 3){
                    echo "Buena primavera";
                }
                if ($mesactual == 4){
                    echo "Buena primavera";
                }
                if ($mesactual == 5){
                    echo "Buena primavera";
                }
                if ($mesactual == 6){
                    echo "Buen verano";
                }
                if ($mesactual == 7){
                    echo "Buen verano";
                }
                if ($mesactual == 8){
                    echo "Buen verano";
                }
                if ($mesactual == 9){
                    echo "Buen otoño";
                }
                if ($mesactual == 10){
                    echo "Buen otoño";
                }
                if ($mesactual == 11){
                    echo "Buen otoño";
                }
                if ($mesactual == 12){
                    echo "Buen invierno";
                }
            ?>
        </p>
    </body>
</html>