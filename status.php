<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статус</title>
</head>
<body>
    <?php

    if (!empty($_POST))
    {
        $enrollee = [
            'name' => $_POST['name'],
            'shop_name' => $_POST['shop_name'],
            'cost' => $_POST['cost'],
            'count' => $_POST['count'],
        ];
    }

    ?>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (test_strs($_POST["name"]) and test_strs($_POST["shop_name"]) and test_int($_POST["cost"]) and test_int($_POST["count"])) {
                file_handler();
            }
        }

        function test_strs($data) {
            if (!ctype_alpha($data)) {
                $ErrMsg = "Only alphabets and whitespace are allowed.";
                echo $ErrMsg;
                return (0);
            }
            return (1);
        }

        function test_int($data) {
            if (!is_numeric($data) ) {
                $ErrMsg = "Not a number!";
                echo $ErrMsg;
                return (0);
            }
            return (1);
        }

        function file_handler()
        {
            if (!empty($_POST))
            {
                if (count($_POST) == 2)
                {
                    file_put_contents('data.txt', '');
                    if ($_POST['button'] == 't_1')
                    {
                        if (!empty($_POST['not_deleted_data']))
                        {
                            file_put_contents('data.txt', $_POST['not_deleted_data']);
                            echo 'Данные успешно удалены!';
                        }
                        else echo 'Нет данных для удаления!' . '<br>';
                    }
                }
                else
                {
                    $data = '';
                    if ($_POST['enrollee'])
                        $data = $_POST['enrollee'];

                    foreach ($_POST as $key => $value)
                    {
                        if ($key === 'enrollee')
                            break;
                        $tmp = $value . ':';
                        $data = $data . $tmp;
                    }
                    $data = substr($data, 0, -1);
                    $data = $data . PHP_EOL;+

                    file_put_contents('data.txt', $data, FILE_APPEND);

                    echo 'Данные успешно сохранились в файл!';
                }
            }
        }
        ?>
    <p></p>
    <a href="http://localhost:8080/">Главная страница</a>
</body>
</html>