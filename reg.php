<html>
<head>
    <title>Регистрационная форма</title>
</head>
<body>
Форма
<form action="save.php" method="post">
    <p>
        <label>Ваш логин:<br></label>
        <input name="login" type="text" size="15">
    </p>

    <p>
        <label>Ваше мыло:<br></label>
        <input name="email" type="text" size="15">
    </p>

    <p>
        <label>Ваш пароль:<br></label>
        <input name="pass" type="password" size="15">
    </p>
    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
    <p>
        <input type="submit" name="submit" value="Зарегистрироваться">
        <!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->
    </p></form>
</body>
</html>