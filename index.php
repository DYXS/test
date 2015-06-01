<?php
$summa = array();
for ($i=0; $i<20; $i++) {
    $mas[] = rand(0, 100);
    $summa[] = $mas[$i];
    print $mas[$i];
    print"<br>";
}
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

for ($mas[$key]; $mas[$key]>0 ;$mas[$key--]) {
    echo $mas[$key];
}