<?php
include 'function.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expression = $_POST['expression'] ?? $_GET['expression'] ?? null;

    if (!$expression && file_exists('Task/expression.txt')) {
        $expression = file_get_contents('Task/expression.txt');
    }

    if (!isValidBrackets($expression)) {
        echo "Ошибка: скобки неправильно расставлены";
        exit;
    }

    echo calculateRecursive($expression);
}

function isValidBrackets($str) {
    $stack = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === '(') $stack++;
        if ($str[$i] === ')') $stack--;
        if ($stack < 0) return false;
    }
    return $stack === 0;
}

function calculateRecursive($expr) {
    $expr = str_replace(' ', '', $expr);
    if (strpos($expr, '(') === false) {
        return evalSimple($expr);
    }
    if (preg_match('/(sin|cos|tan)\(([^)]+)\)/i', $expr, $matches)) {
        $func = $matches[1];
        $arg = $matches[2];

        $val = calcTrig($func, $arg);
        $expr = str_replace($matches[0], $val, $expr);
        return calculateRecursive($expr);
    }
    $start = strrpos($expr, '(');
    $end = strpos($expr, ')', $start);
    $inner = substr($expr, $start + 1, $end - $start - 1);
    $result = calculateRecursive($inner);
    $newExpr = substr($expr, 0, $start) . $result . substr($expr, $end + 1);
    return calculateRecursive($newExpr);
}

function evalSimple($expr) {
    if (!preg_match('/^[0-9+\-*\/.]+$/', $expr)) return 'Недопустимое выражение';
    return eval("return $expr;");
}
?>