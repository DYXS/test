<?php
// $bodys Нафига это тут? Нигде не используется
$bodys = " БЛЕАТЬ ХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКАХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКАХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКАХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКАХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКА";
// Просил же для цензуры написать отдельную функцию, в которую передаешь оригинальный текст, а получаешь отцензуренный.



function censure($text) {




    return $text; // имеется ввиду уже обработанный
}





$newbody = str_replace($matwords, $scenwords, $_POST["replacetext"], $howmany);

if (empty($newbody)) {

    echo "Ты че долбоеб?";
}

else {

    echo "Привет, " . $newbody;

    echo "</br></br>";

    echo "Количество цунзур: " . $howmany;
}

            ?>
