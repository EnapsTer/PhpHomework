<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные о товарах</title>
</head>
<body>
    <center>
        <?php
        $searches_count = 0;
        $products_count = 0;
        $data = file_get_contents('data.txt');
        if (!empty($data))
        {
            $data_array = explode(PHP_EOL, $data);
            for ($i = 0; $i < count($data_array) - 1; $i++) {
                $name = substr($data_array[$i], 0, strpos($data_array[$i], ':'));
                $end = strpos($data_array[$i], ':', strlen($name) + 1) - strlen($name) - 1;
                $shop_name = substr($data_array[$i], strlen($name) + 1, $end);
                $string = str_replace($name, $shop_name, $data_array[$i]);
                $data_array[$i] = str_replace($name, $shop_name, $data_array[$i]);
                $shop_name = ':' . $shop_name . ':';
                $name = ':' . $name . ':';
                $data_array[$i] = str_replace($shop_name, $name, $data_array[$i]);
            }
            sort($data_array);
            foreach ($data_array as $key => $value)
            {
                if (!empty($value))
                {
                    $strings = explode(':', $value);
                    echo 'Название магазина: ' . $strings[0] . '<br>';
                    echo 'Название товара: ' . $strings[1] . '<br>';
                    echo 'Количество: ' . $strings[2] . ' шт ' . '<br>';
                    echo 'Вес: ' . $strings[3] . ' кг ' . '<br><br>';
                }
            }
        }
        else
            echo 'Файл пуст!';
        ?>
    </center>
</body>
</html>
