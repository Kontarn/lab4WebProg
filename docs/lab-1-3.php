<!-- <!DOCTYPE html>
<html>
<head>

</head>
<body> -->
  <div style="display: inline-block;">
<?php
  
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
 </div>
 <div style="display: inline-block; vertical-align: top;">
  <button onclick="window.close()">Назад</button>
 </div>
 <!-- </body>
</html> -->