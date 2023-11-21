<button onclick="window.close()">Назад</button>
<p><?php
    $a = rand(-20, 20);
    $c = rand(-20, 20);
    $d = rand(-20, 20);
    $f = (2 * $c - $d)/($a / 4 - 1);
    echo '(2 * (' . $c . ') - (' . $d . '))/((' . $a . ') / 4 - 1) = ' . $f;
?>
