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
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tamapada = true;
            $c1->carga = 100;
            $c1->rabiscar();
            echo'<pre>';
            print_r($c1);
            echo'</pre><hr>';
            
            $c2 = new Caneta();
            $c2->modelo = "FABER CASTEL";
            $c2->cor = "Vermelha";
            $c2->ponta = 1.0;
            $c2->tamapada = false;
            $c2->carga = 80;
            $c2->rabiscar();
            echo'<pre>';
            print_r($c2);
        ?>
    </body>
</html>
