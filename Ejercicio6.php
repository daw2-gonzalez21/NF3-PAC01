<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p>
            <?php
                $archivo = "contador.txt";

                if (!$_SESSION['contador']) {
                    if (file_exists($archivo)) {
                        $visitas = file_get_contents($archivo);
                    } 
                    else {
                        $visitas = 0;   
                    }
                    $visitas++;

                    $fd = fopen($archivo, "w");
                    fwrite($fd, $visitas);
                    fclose($fd);

                    $_SESSION['contador'] = $visitas;
                }

                echo "<h1>Es el visitante numero $_SESSION[contador]</h1>";
            ?>
        </p>
    </body>
</html>