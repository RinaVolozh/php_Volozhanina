<?php
    $equation = 'x + 3 = 7';
    $parts = explode(' ', $equation);
    $oper = $parts[1];
    $compo = $parts[2];
    $result = $parts[4];
    $posx = strpos($equation, 'x');
    $posoper = strpos($equation, $oper);
    if ($posx < $posoper){
        echo "Переменная слева от оператора<br>";
        $x_place = 'left';
    } else {
        echo "Переменная справа от оператора<br>";
        $x_place = 'right';
    }

    switch ($oper) {
        case '+':
            echo "Оператор: сложение<br>";
            if ($x_place === 'left') {
                $solve = $result - $compo;
            } else {
                $solve = $result - $compo;
            }
            break;
        case '-':
            echo "Оператор: вычитание<br>";
            if ($x_place === 'left') {
                $solve = $result + $compo;
            } else {
                $solve = $compo - $result;
            }
            break;
        case '*':
            echo "Оператор: умножение<br>";
            $solve = $result / $compo;
            break;
        case '/':
            echo "Оператор: деление<br>";
            if ($x_place === 'left') {
                $solve = $result * $compo;
            } else {
                $solve = $compo / $result;
            }
            break;

        default:
            echo "Неизвестный оператор";
            $solve = null;
    }

    if ($solve !== null) {
        echo "Решение: x = " . $solve;
    }
?>