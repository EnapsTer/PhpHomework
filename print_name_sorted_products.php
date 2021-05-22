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
        array_filter($data_array);
        sort($data_array);
        foreach ($data_array as $key => $value)
        {
            if (!empty($value))
            {
                $strings = explode(':', $value);
                echo 'Название товара: ' . $strings[0] . '<br>';
                echo 'Название магазина: ' . $strings[1] . '<br>';
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