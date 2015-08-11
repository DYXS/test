<?php

/*if (isset($_POST['login'])) {$login = $_POST['login'];}
if (isset($_POST['pass'])) {$pass = $_POST['pass'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}

if (empty($login) or empty($pass) or empty($email))*/

if (empty($_POST['login']) or empty($_POST['pass']) or empty($_POST['pass2']) or empty($_POST['email']))

{
    exit ("Вы не ввели инфу");
}

include ("bd.php");

/*$hash = password_hash($_POST['pass2'], PASSWORD_DEFAULT);*/

if ($_POST['pass'] == $_POST['pass2']) {
    $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $result = mysql_query("INSERT INTO users (username,password,email, created, modified) VALUES ('{$_POST['login']}', '$hash', '{$_POST['email']}', NOW(), NOW())");
    if ($result)
    {
        echo "Все пучком";
    }
    else {
        echo "Ошибка! Ошибка! Ошибка! Ошибка! Ошибка! Ошибка! Ошибка!";
    }


} else {
    echo 'неправильный пароль';
}



/*$result = mysql_query ("INSERT INTO users (username,password,email) VALUES('$login','$pass','$email')");
$result = mysql_query ("INSERT INTO users (username,password,email) VALUES('$_POST["login"]','$_POST["pass"]','$_POST["email"]')");

$result = mysql_query("INSERT INTO users (username,password,email) VALUES ({$_POST['login']}, {$_POST['pass']}, {$_POST['email']})");*/

?>