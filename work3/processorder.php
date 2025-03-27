<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа 3 - Магазин "Автозапчасти"</title>
</head>
<body>
    <h1>Магазин "Автозапчасти"</h1>
    <h2>Результаты обработки заказа</h2>

    <?php
        $tireqty = $_POST['tireqty'];
        $oilqty = $_POST['oilqty'];
        $sparkqty = $_POST['sparkqty'];
        $address = $_POST['address'];
        $date = date('H:i, d.m.Y');
        echo '<p>Заказ обработан в ';
        echo $date;
        echo '</p>';
        echo '<p>Список вашего заказа: </p>';
        $totalqty = 0;
        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo 'Заказано товаров: ' . $totalqty . '<br />';
        if ($totalqty == 0) {
            echo 'Вы ничего не заказали на предыдущей
    странице!<br />' .
                "<p><a href='orderform.php'>Оформить
    заказ</a></body></html>";
            exit;
        } else {
            if ($tireqty > 0)
                echo $tireqty . ' автопокрышек <br />';
            if ($oilqty > 0)
                echo $oilqty . ' бутылок с маслом<br />';
            if ($sparkqty > 0)
                echo $sparkqty . ' свечей зажигания<br />';
        }
        $totalamount = 0.00;
        define('TIREPRICE', 100);
        define('OILPRICE', 10);
        define('SPARKPRICE', 4);
        $totalamount =
            $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;
        $totalamount = number_format($totalamount, 2, '.', ' ');
        echo '<p>Итого по заказу: ' . $totalamount . '</p>';
        echo '<p>Адрес доставки: ' . $address . '</p>';
        $outputstring = $date . "\t" . $tireqty . " автопокрышек\t" . $oilqty .
            " бутылок с маслом\t" . $sparkqty .
            " свечей зажигания\t\$" . $totalamount . "\t" . $address . "\n";
        @$fp = fopen("orders.txt", 'ab');
        if (!$fp) {
            echo "<p><strong>В настоящий момент ваш запрос не
    может быть обработан. "
                . "Пожалуйста, попытайтесь позже.</strong></p>" .
                "<p><a href='index.php'>Просмотр заказов</a></body></html>";
            exit;
        }
        fwrite($fp, $outputstring, strlen($outputstring));
        fclose($fp);
        echo '<p>Заказ записан.</p>';
    ?>

    <a href='index.php'>Просмотр заказов</a>
</body>
</html>