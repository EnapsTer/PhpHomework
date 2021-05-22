<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <style>
        form {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<center>
    <h2>Главная страница</h2>
    <form action="add_product.php" method="POST"><button>Добавить продукт</button></form>
    <form action="view_product.php" method="POST"><button>Посмотреть товар</button></form>
    <form action="print_name_sorted_products.php" method="POST"><button>Отсортированые товары по имени</button></form>
    <form action="print_shop_sorted_products.php" method="POST"><button>Отсортированые товары по магазину</button></form>
</center>
</body>
</html>