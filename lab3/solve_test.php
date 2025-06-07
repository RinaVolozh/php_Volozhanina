<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
</head>
<body>
    <?php
        $a = 4;
        $b = 3;
        $c = ' мандаринок';
        $result = $a * $b;
        $result .= $c;
        echo "Задание 22. " . $result;

        $hunter = 'охотник';
        $wants_to = 'желает';
        $know = 'знать';
        $fizan = 'фазан';
        $sits = 'сидит';

        $phrase = "Каждый $hunter $wants_to $know где $sits $fizan";

        echo "<br>Задание 10. " . $phrase;

        $a = 2;  
        $b = 2.0;
        $c = '2';
        $d = 'two';
        $g = true;
        $f = false;
        echo "<br>Задание 6. ";

        function check_bool_result($label, $value) {
            $bool = (bool) $value;
            echo "$label = ";
            var_dump($bool);
        }

        check_bool_result('a + g', $a + $g);  
        check_bool_result('a + f', $a + $f);   
        check_bool_result('f + f', $f + $f);        
        check_bool_result('g + g', $g + $g);     
        check_bool_result('f - g', $f - $g);       
        check_bool_result('g - g', $g - $g);        
        check_bool_result('a * f', $a * $f);
        check_bool_result('a * g', $a * $g);
        check_bool_result('a + c', $a + $c);
        check_bool_result('a + d', $a + (int)$d);
        check_bool_result('d + f', (int)$d + $f);

        $a = 3;
        $b = '3';
        $d = '3a';

        $comparisons = [
            '$a == $b' => $a == $b,
            '$a === $b' => $a === $b,
            '$a == $d' => $a == $d,
            '$a === $d' => $a === $d,
            '$b == $d' => $b == $d,
            '$b === $d' => $b === $d,
        ];

        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>Выражение</th><th>Результат</th></tr>";

        foreach ($comparisons as $expression => $result) {
            if ($result) {
                echo "<tr><td> $expression </td><td>true</td></tr>";
            }
        }
        echo "<br>Задание 30. <br></table>";


        $sum = 0;
        $number = 2;
        $count = 0;

        do {
            $sum += $number;
            $number += 2;
            $count++;
        } while ($count < 20);
        echo "<br>Задание 50. Сумма первых 20 четных чисел: $sum";
    ?>
</body>
</html>