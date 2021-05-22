<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление товара</title>
    <style>
    </style>
</head>
<body>
    <center>
        <h2>Добавление товара</h2>
        <h3>Основные данные</h3>
        <form action="status.php" method="POST">
            <p>Название: <input type="text" name="name"></p>
            <p>Название магазина: <input type="text" name="shop_name"></p>
            <p>Стоимость: <input type="text" name="cost"></p>
            <p>Количество: <input type="text" name="count"> шт</p>
            <button>Далее</button>
        </form>
        <br>
        <a href="http://localhost:8080/">Главная страница</a>
    </center>
</body>
</html>