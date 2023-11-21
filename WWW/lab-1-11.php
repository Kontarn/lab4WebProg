<button onclick="window.close()">Назад</button>
<p><?php
    $N = rand();
    echo 'Число: '.$N.'<p>Делители:<br>';
    $quant = 0;
    for ($i = 1; $i <= sqrt($N); ++$i){
        if ($N % $i == 0){
            echo $i . '<br>';
            $quant++;
            if ($i * $i != $N){
                $quant++;
                echo $N /$i . '<br>';
            }
        }
    }
?>
