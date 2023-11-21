<!-- <!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <div style="display: inline-block;"> -->
        <?php
        
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
        <!-- </div> -->
        <div style="display: inline-block; vertical-align: top;">
        <button onclick="window.close()">Назад</button>
        </div>
        <!-- </body>
</html> -->