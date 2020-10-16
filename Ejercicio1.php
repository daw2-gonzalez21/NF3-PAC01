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
            $dia_ayer=(date('d') - 1);
            $mes_ayer=date('n');
            $anyo_ayer=date('Y');
            echo "Ayer fue: ";
            echo $dia_ayer;
            echo "/";
            echo $mes_ayer;
            echo "/";
            echo $anyo_ayer;
            echo "<br>";
            echo "El mes anterior fue ";
            if ($mes_ayer - 1 == 1){
                echo "enero.";
            }
            if ($mes_ayer - 1 == 2){
                echo "febrero.";
            }
            if ($mes_ayer - 1 == 3){
                echo "marzo.";
            }
            if ($mes_ayer - 1 == 4){
                echo "abril.";
            }
            if ($mes_ayer - 1 == 5){
                echo "mayo.";
            }
            if ($mes_ayer - 1 == 6){
                echo "junio.";
            }
            if ($mes_ayer - 1 == 7){
                echo "julio.";
            }
            if ($mes_ayer - 1 == 8){
                echo "agosto.";
            }
            if ($mes_ayer - 1 == 9){
                echo "septiembre.";
            }
            if ($mes_ayer - 1 == 10){
                echo "octubre.";
            }
            if ($mes_ayer - 1 == 11){
                echo "noviembre.";
            }
            if ($mes_ayer - 1 == 0){
                echo "diciembre.";
            }
            $diaHoy = date('j');
            $diasmes= date('t');
            echo "<br>";
            echo "Faltan ";
            echo $diasmes - $diaHoy;
            echo " dias para que acabe este mes.";
            echo "<br>";
            echo "Faltan ";
            echo 12 - $mes_ayer;
            echo " meses para que acabe el año.";
            ?>
        </p>
    </body>
</html>