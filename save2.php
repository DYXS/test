<?php

if (isset($_POST['login'])) {$login = $_POST['login'];}
if (isset($_POST['pass'])) {$pass = $_POST['pass'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}

if (empty($login) or empty($pass) or empty($email))
{
    exit ("Вы не ввели инфу");
}

include ("bd.php");

$mailcheck = mysql_query("SELECT id From users WHELE email='email'", $db);

$check = mysql_fetch_array($mailcheck);

if (empty($check{'id'})) {
    exit ("Email занят");
}


$result = mysql_query ("INSERT INTO users (username,password,email) VALUES('$login','$pass','$email')");


if ($result=='TRUE')
{
    echo "Все пучком";
}
else {
    echo "Ошибка! Ошибка! Ошибка! Ошибка! Ошибка! Ошибка! Ошибка!";
}
?>