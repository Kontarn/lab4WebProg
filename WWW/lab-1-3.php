<button onclick="window.close()">Назад</button>
<p><?php
    define('NUM_E', 2.71828);
    echo 'Число e равно ' . NUM_E;
    $num_el = NUM_E;
    echo '<p>$num_el = ' . $num_el . ' - ' . gettype($num_el);
    settype($num_el, 'string');
    echo '<p>$num_el = ' . $num_el . ' - ' . gettype($num_el);
    settype($num_el, 'int');
    echo '<p>$num_el = ' . $num_el . ' - ' . gettype($num_el);
    settype($num_el, 'bool');
    echo '<p>$num_el = ' . $num_el . ' - ' . gettype($num_el);
  
 ?>
  