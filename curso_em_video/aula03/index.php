<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Classe caneta</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->modelo = "BIC";
            $c1->cor = "azul";
            echo'<pre>';
            print_r($c1);
            echo'</pre><hr>';
            $c1->rabiscar();
            
        ?>
    </body>
</html>
