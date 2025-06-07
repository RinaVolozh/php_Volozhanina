<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массивы. Функции. GET & POST.</title>
</head>
<body>
    <?php
        echo "Задание 1.<br>";
        $mas = ['a', 'b', 'c', 'b', 'a'];

        $result = array_count_values($mas);

        foreach ($result as $mas => $count) {
            echo "Буква '$mas' встречается $count раз.<br>";
        }

        echo "Задание 6.<br>";
        $mas = ['a', 'b', 'c', 'd', 'e'];
        $bigmas = array_map('strtoupper', $mas);
        echo "Заданный массив: " . implode(', ', $mas) . "<br>";
        echo "Результат: " . implode(', ', $bigmas);

        echo "<br>Задание 14.<br>";
        $numbers = [1, 2, 3, 4, 5];
        $first = array_shift($numbers);
        $last = array_pop($numbers);

        echo "Первый элемент: $first <br>";
        echo "Последний элемент: $last <br>";
        echo "Оставшийся массив: ";
        echo implode(', ', $numbers);

        echo "<br>Задание 22.<br>";
        $numbers = [1, 2, 3, 4, 5];
        $sum = array_sum($numbers);
        echo "Сумма элементов массива: $sum";

        echo "<br>Задание 30.<br>";
        $numbers = [1, 2, 3, 4, 5, 6, 7];
        if (in_array(3, $numbers)) {
            echo "Число 3 есть в массиве.";
        } else {
            echo "Числа 3 нет в массиве.";
        }
    ?>
</body>
</html>