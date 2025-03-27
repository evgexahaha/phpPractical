<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа 3 - Магазин "Автозапчасти"</title>
</head>
<body>
    <h1>Магазин "Автозапчасти"</h1>
    <h2>Форма заказа</h2>

    <form action="processorder.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=150>Товар
                <td width=15>Количество
            <tr>
                <td>Автопокрышки
                <td align=left><input type="text" name="tireqty" size=3 maxlength=3>
            <tr>
                <td>Машинное масло
                <td align=left><input type="text" name="oilqty" size=3 maxlength=3>
            <tr>
                <td>Свечи зажигания
                <td align=left><input type="text" name="sparkqty" size=3 maxlength=3>
            <tr>
                <td>Адрес доставки
                <td align=center><input type="text" name="address" size=40 maxlength=40>
            <tr>
                <td colspan=2 align=center><input type=submit value="Отправить заказ">
        </table>
    </form>

    <p><a href='index.php'>Просмотр заказов</a>
</body>
</html>