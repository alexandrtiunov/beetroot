<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td width="200" height="200" align="right">
                <form action="action.php" method="post" enctype="multipart/form-data">
<!--                    <p>-->
<!--                        Email: <input type="email" name="email" required>-->
<!--                    </p>-->
                    <p>
                        Текст: <input type="text" name="text" maxlength="200">
                    </p>
                    <p>
                        <input type="file" name="file">
                    </p>
                    <p>
                        <button type="submit">Отправить</button>
                    </p>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>



