<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div style="display: inline-block;">
        <?php
        
            $a = rand(-20, 20);
            $c = rand(-20, 20);
            $d = rand(-20, 20);
            $f = (2 * $c - $d)/($a / 4 - 1);
            echo '(2 * (' . $c . ') - (' . $d . '))/((' . $a . ') / 4 - 1) = ' . $f;
        
        ?>
        </div>
        <div style="display: inline-block; vertical-align: top;">
        <button onclick="window.close()">Назад</button>
        </div>
    </body>
</html>