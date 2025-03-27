<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа 5 - Магазин "Автозапчасти" с БД</title>
</head>
<body>
    <h1>Магазин "Автозапчасти" (база данных)</h1>
    <h2>Результаты изменения заказа</h2>
    <?php
    $idzakaz = $_REQUEST['idzakaz'];
    $tirekol = $_REQUEST['tirekol'];
    $oilkol = $_REQUEST['oilkol'];
    $sparkkol = $_REQUEST['sparkkol'];
    $adress = $_REQUEST['adress'];
    if ((!isset($tirekol)) || (!isset($oilkol)) || (!isset($sparkkol)) || (!$adress)) {
        echo '<p>Вы не указали все данные. Повторите ввод заказа.';
        echo '<p><a href="index.php">Принятые заказы</a>';
        echo '</body></html>';
        exit;
    }

    $totalkol = 0;
    $totalkol = $tirekol + $oilkol + $sparkkol;
    if ($totalkol == 0) {
        echo '<p>Вы ничего не выбрали. Повторите ввод заказа.';
        echo '<p><a href="index.php">Принятые заказы</a>';
        echo '</body></html>';
        exit;
    }
    $itog = 0;
    define('TIREPRICE', 100);
    define('OILPRICE', 10);
    define('SPARKPRICE', 4);
    $itog = $tirekol * TIREPRICE + $oilkol * OILPRICE + $sparkkol * SPARKPRICE;
    $zakazdate = date('Y-m-d H:i:s');

    $handle = new mysqli('MySQL-8.0', 'root', '', 'spareparts');
    $query = "UPDATE zakaz SET
 tirekol=$tirekol,
 oilkol=$oilkol,
 sparkkol=$sparkkol,
 itog=$itog,
 adress='$adress',
 zakazdate='$zakazdate'
 WHERE idzakaz=$idzakaz";
    $result = $handle->query($query);
    if ($result)
        echo "Данные сохранены";
    if (!$result)
        echo "Ошибка сохранения данных";
    echo "<p><a href='index.php'>Принятые заказы</a>";
    ?>
</body>
</html>