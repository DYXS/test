<?php

$bodys = "ТЫ БЛЕАТЬ ХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКАХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКАХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКАХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКАХУЙ ПИЗДА ГОВНО МУДИЛО ХУЙЛО ЕБЛО ГГОГОГ ОЛОЛОЛ ТРОЛОЛОЛО
ЕБАНАШКА";
$matwords = array ("ХУЙ", "ПИЗДА", "ЕБЛО");
$scenwords = array ("Х*й", "П**да", "Е***ло");

$newbody = str_replace($matwords, $scenwords, $bodys);

echo $newbody;

            ?>