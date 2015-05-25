<?php
$summa = array();
for ($i=0; $i<20; $i++) {
    $mas[] = rand(0, 100);
<<<<<<< HEAD
    $summa[] = $mas[$i];
    print $mas[$i];
    print"<br>";
}
=======
    // print $mas[$i];
    // print"<br>";
}
var_dump($mas);

>>>>>>> 523463e28516f44673d8da2ffb270cc42e19008d
// По-умочанию первый элемент самый большой.
$max = $mas[0];
$min = $mas[0];
foreach( $mas as $key => $value){
    // Проверяем что существует следующий элемент
    if (isset($mas[$key + 1])) {
        // Если да, то сравниваем его с текущим максимальным
        if ($max < $mas[$key + 1]) {
            // Если следующий элемент больше, значит теперь он становится максимальным -
            // Присваеваем его значение переменной $max.
            $max = $mas[$key + 1];
        }
        if ($min > $mas[$key + 1]) {

            $min = $mas[$key + 1];
        }
    }
}
<<<<<<< HEAD

$Total = array_sum($summa) / $key;
print"<br>";
print"Среднее: ";
echo round($Total);

print"<br>";
print"Максимум: ";
print $max;
print"<br>";
print"Минимум: ";
print $min;
print"<br>";

=======
print $max;
>>>>>>> 523463e28516f44673d8da2ffb270cc42e19008d
