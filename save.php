<?php

if (isset($_POST['login'])) {$login = $_POST['login'];}
if (isset($_POST['pass'])) {$pass = $_POST['pass'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}

if (empty($login) or empty($pass) or empty($email))
{
    exit ("Вы не ввели инфу");
}

include ("bd.php");

$result = mysql_query("SELECT id FROM users WHERE username='$login'",$db);
$myrow = mysql_fetch_array($result);

$result2 = mysql_query ("INSERT INTO users (username,password,email) VALUES('$login','$pass','$email')");

if ($result2=='TRUE')
{
    echo "Все пучком";
}
else {
    echo "Ошибка! Ошибка! Ошибка! Ошибка! Ошибка! Ошибка! Ошибка!";
}
?>