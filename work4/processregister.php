<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа 4 - Студенты</title>
</head>
<body>
    <div class="container">
        <h1>Результаты регистрации</h1>
        <?php
        $group = $_POST['group'];
        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];
        $recordbook = $_POST['recordbook'];
        $passport = $_POST['passport'];
        $date = date('H:i, d.m.Y');

        echo '<p>Регистрация выполнена в ' . $date . '</p>';
        echo '<p>Данные студента:</p>';
        echo 'Учебная группа: ' . $group . '<br />';
        echo 'ФИО: ' . $fullname . '<br />';
        echo 'Дата рождения: ' . $birthdate . '<br />';
        echo 'Пол: ' . $gender . '<br />';
        echo '№ зачётки: ' . $recordbook . '<br />';
        echo 'Паспортные данные: ' . $passport . '<br />';

        $outputstring = $date . "\t" . $group . "\t" . $fullname . "\t" . $birthdate . "\t" . $gender . "\t" . $recordbook . "\t" . $passport . "\n";

        @$fp = fopen("students.txt", 'ab');
        if (!$fp) {
            echo "<p><strong>Ошибка записи данных. Попробуйте позже.</strong></p>";
            echo "<p><a href='index.php'>Просмотр студентов</a></p>";
            exit;
        }
        fwrite($fp, $outputstring, strlen($outputstring));
        fclose($fp);
        echo '<p>Студент успешно добавлен.</p>';
        ?>
        <p><a href='index.php'>Просмотр студентов</a></p>
    </div>
</body>
</html>