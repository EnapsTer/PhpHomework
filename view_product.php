<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные о товаре</title>
</head>
<body>
    <center>
        <h2>Данные о товаре</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <p>Название: <input type="text" name="product_name"></p>
            <button>Далее</button>
        </form>
        <br>
        <a href="http://localhost:8080/">Главная страница</a>
        <br>
        <br>
        <?php
            if (!empty($_POST))
            {
                $name = $_POST['product_name'];
                $searches_count = 0;
                $products_count = 0;
                $data = file_get_contents('data.txt');
                if (!empty($data))
                {
                    $data_array = explode(PHP_EOL, $data);
                    foreach ($data_array as $key => $value)
                    {
                        $strings = explode(':', $value);
                        if (!empty($strings) and strcasecmp($strings[0], $name) == 0)
                        {
                            echo 'Название товара: ' . $strings[0] . '<br>';
                            echo 'Название магазина: ' . $strings[1] . '<br>';
                            echo 'Количество: ' . $strings[2] . ' шт ' . '<br>';
                            echo 'Вес: ' . $strings[3] . ' кг ' . '<br><br>';
                        }
                        else
                            $searches_count++;
                        $products_count++;
                    }
                    if ($searches_count == $products_count)
                        echo "Not valid product name";
                }
                else
                    echo 'Файл пуст!';
            }
        ?>
    </center>
</body>
</html>