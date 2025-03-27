<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа 5 - Магазин "Автозапчасти" с БД</title>
</head>
<body>
    <h1>Магазин "Автозапчасти" (база данных)</h1>
    <p><a href='index.php'>Принятые заказы</a>
    <h2>Форма заказа</h2>
    <form action="processorderadd.php" method=post>
        <table border=0>
            <tr bgcolor=#cccccc>
                <td width=150>Товар
                <td width=15>Количество
            <tr>
                <td>Автопокрышки
                <td align=left><input type="text" name="tirekol" size=3 maxlength=3>
            <tr>
                <td>Машинное масло
                <td align=left><input type="text" name="oilkol" size=3 maxlength=3>
            <tr>
                <td>Свечи зажигания
                <td align=left><input type="text" name="sparkkol" size=3 maxlength=3>
            <tr>
                <td>Адрес доставки
                <td align=center><input type="text" name="adress" size=60>
            <tr>
                <td colspan=2 align=center><input type=submit value="Отправить заказ"></td>
        </table>
    </form>
</body>
</html>