<?php
    function calcTrig($func, $value) {
        $value = deg2rad($value);
        switch (strtolower($func)) {
            case 'sin': return sin($value);
            case 'cos': return cos($value);
            case 'tan': return tan($value);
            default: return "Неизвестная функция";
        }
    }
?>