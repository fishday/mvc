<!DOCTYPE html>
<head>
    <title>registration form</title>
    <meta charset="utf-8">
<!--    <script src="/mvc.xx/js/ajaxrequest.js"></script> -->
    <script src="http://localhost/mvc.xx/js/validator.js"></script>
</head>
<body>
    <form id ="regform" method ="POST" action="/mvc.xx/register" onSubmit = "return Validate(this)">
        <table align = "center" border="1">
            <th colspan="2" align="center">Форма регистрации</th>
            <tr><td>Имя пользователя</td><td><input type = "text" name = "lg"></td></tr>
            <tr><td>Пароль</td><td><input type = "password" name = "pw"></td></tr>
            <tr><td>Подтвердите пароль</td><td><input type = "password" name = "confirmpw"></td></tr>
            <tr><td>Электронная почта</td><td><input type = "text" name = "email"></td></tr>
            <th colspan="2" align="center"><input type="submit" value="Зарегистрироваться"></th>
        </table>
    </form>
</body>