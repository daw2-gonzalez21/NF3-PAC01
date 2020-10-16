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
                session_unset();
            ?>  
        </p>
    <form method="post" action="Ejercicio4.1.php">
        <p>Color del texto: 
            <select name="color">
                <option value="negro">Negro</option>
                <option value="rojo">Rojo</option>
                <option value="azul">Azul</option>
            </select>
        </p>
        <p>Estilo de la fuente:
            <select name="fuente">
                <option value="1">Times New Roman</option>
                <option value="2">Arial</option>
                <option value="3">Calibri</option>
            </select>
        </p>
        <p>Tamaño de la fuente:
            <select name="tamanyo">
                <option value="12">12</option>
                <option value="14">14</option>
                <option value="16">16</option>
            </select>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit"/>
        </p>
  </form>
    </body>
</html>