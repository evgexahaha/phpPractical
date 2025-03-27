<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа 4 - Студенты</title>
</head>
<body>
    <div class="container">
        <h1>Список зарегистрированных студентов</h1>

        <?php
        @$fp = fopen('students.txt', 'rb');
        if (!$fp) {
            echo "<p>Нет зарегистрированных студентов.</p>";
            echo "<p><a href='register.php'>Добавить студента</a></p>";
            exit;
        }
        while (!feof($fp)) {
            $student = fgets($fp, 999);
            echo '<br>' . nl2br($student);
        }
        fclose($fp);
        ?>

        <a href='register.php'>Добавить студента</a> <br>
        <a href='../index.php'>К содержанию</a>
    </div>
</body>
</html>