<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа 5 - Магазин "Автозапчасти" с БД</title>
</head>
<body>
    <h1>Магазин "Автозапчасти" (база данных)</h1>
    <h2>Удаление заказа</h2>
    <?php
    $idzakaz = $_REQUEST['idzakaz'];
    $handle = new mysqli('MySQL-8.0', 'root', '', 'spareparts');
    $query = "DELETE FROM zakaz WHERE idzakaz=$idzakaz";
    $result = $handle->query($query);
    if ($result)
        echo "Данные удалены";
    if (!$result)
        echo "Ошибка удаления данных";
    echo "<p><a href='index.php'>Принятые заказы</a>";
    ?>
</body>
</html>