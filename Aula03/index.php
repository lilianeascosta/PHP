<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03 - POO</title>
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";
            $c1->rabiscar();
            $c1->destampar();
            print_r($c1);
        ?>
        </pre>
    </body>
</html>
