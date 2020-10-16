 <?php
    include "Ejercicio2.php";
    $_SESSION['colortexto'] = $_POST['color'];
    $_SESSION['font'] = $_POST['fuente'];
    $_SESSION['fontsize'] = $_POST['tamanyo'];
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            if ($_SESSION['colortexto'] == 'negro'){
                if ($_SESSION['font'] == 1){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:black;font-family:Times New Roman;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:black;font-family:Times New Roman;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:black;font-family:Times New Roman;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
                if ($_SESSION['font'] == 2){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:black;font-family:Arial;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:black;font-family:Arial;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:black;font-family:Arial;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
                if ($_SESSION['font'] == 3){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:black;font-family:Calibri;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:black;font-family:Calibri;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:black;font-family:Calibri;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
            }
            if ($_SESSION['colortexto'] == 'rojo'){
                if ($_SESSION['font'] == 1){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:red;font-family:Times New Roman;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:red;font-family:Times New Roman;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:red;font-family:Times New Roman;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
                if ($_SESSION['font'] == 2){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:red;font-family:Arial;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:red;font-family:Arial;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:red;font-family:Arial;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
                if ($_SESSION['font'] == 3){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:red;font-family:Calibri;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:red;font-family:Calibri;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:red;font-family:Calibri;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
            }
            if ($_SESSION['colortexto'] == 'azul'){
                  if ($_SESSION['font'] == 1){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:blue;font-family:Times New Roman;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:blue;font-family:Times New Roman;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:blue;font-family:Times New Roman;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
                if ($_SESSION['font'] == 2){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:blue;font-family:Arial;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:blue;font-family:Arial;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:blue;font-family:Arial;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
                if ($_SESSION['font'] == 3){
                    if ($_SESSION['fontsize'] == 12){
                        echo "<p style=\"color:blue;font-family:Calibri;font-size:12px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 14){
                        echo "<p style=\"color:blue;font-family:Calibri;font-size:14px\">Texto de ejemplo</p>";
                    }
                    if ($_SESSION['fontsize'] == 16){
                        echo "<p style=\"color:blue;font-family:Calibri;font-size:16px\">Texto de ejemplo</p>";
                    }
                }
            }
        ?>
    </body>
</html>