<button onclick="window.close()">Назад</button>
<TABLE border="1">
<p><?php
$p = 0;
$style = '';

for ($i=1; $i<=10; $i++) { // запускаем первый цикл
    echo ("<tr>"); // начало строки таблицы
    for ($k=1; $k<=10; $k++) { // запускаем второй цикл
        $p++;
        if ($p % 2 != 0){
            $style = 'black';
        }
        else{
            $style = 'red';
        }
        $str = "<td align=center style='color: ".$style."'>";
        echo ($str); // открываем ячейку таблицы
        echo ($p); // выводим его,
        echo ("</td>"); // а потом закрываем ячейки
    }
    echo ("</tr>"); // конец строки таблицы
}
?>
</TABLE>
