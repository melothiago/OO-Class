<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>03POO</title>
    </head>
    <body>
        <pre
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta;
            $c1->modelo = "Bic cristal";
            $c1->cor = "Azul";
            //$c1->carga = 80;
            
            
            $c1->rabiscar();
            
            $c1->destampar();
            
            print_r($c1);
        ?>
    </pre>
    </body>
</html>
