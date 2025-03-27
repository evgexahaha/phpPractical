<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа 4 - Студенты</title>
</head>
<body>
    <div class="container">
        <h1>Регистрация студента</h1>
        <form action="processregister.php" method="post">
            <table border="0">
                <tr>
                    <td>Учебная группа</td>
                    <td><input type="text" name="group" size="20" maxlength="50"></td>
                </tr>
                <tr>
                    <td>ФИО</td>
                    <td><input type="text" name="fullname" size="50" maxlength="100"></td>
                </tr>
                <tr>
                    <td>Дата рождения</td>
                    <td><input type="date" name="birthdate"></td>
                </tr>
                <tr>
                    <td>Пол</td>
                    <td>
                        <select name="gender">
                            <option value="Мужской">Мужской</option>
                            <option value="Женский">Женский</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>№ зачётки</td>
                    <td><input type="text" name="recordbook" size="20" maxlength="20"></td>
                </tr>
                <tr>
                    <td>Паспортные данные</td>
                    <td><input type="text" name="passport" size="30" maxlength="50"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Зарегистрировать"></td>
                </tr>
            </table>
        </form>
        <a href='index.php'>Просмотр студентов</a>
    </div>
</body>
</html>