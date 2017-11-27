
<!DOCTYPE html>
<html>
    <head>


    </head>
<body>
<div id="reg">
    <table>
        <tr>
            <td width="300" height="300" align="right">
                <form action="registration.php" method="POST" enctype="multipart/form-data">
                    <p>
                        Логин: <input type="text" name="login" required="required">
                    </p>
                    <p>
                        Имя: <input type="text" name="name" required="required">
                    </p>
                    <p>
                        Email: <input type="email" name="email" required="required">
                    </p>
                    <p>
                        Пароль: <input type="password" name="password" required="required">
                    </p>
                    <p>
                        Photo: <input type="file" name="avatar" required="required">
                    </p>
                    <p>
                       <button type="submit">Зарегистрироваться</button>
                    </p>
                </form>
            </td>
        </tr>
    </table>
</div>

</body>



</html>
