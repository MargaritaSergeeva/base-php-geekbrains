<?php
    //Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
    // где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
    // В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
    // и вернуть полученное значение (использовать switch).

    $a = rand(0,15);
    $b = rand(0,15);

    function sum($arg1, $arg2) {
        return $arg1 + $arg2;
    }

    function substract($arg1, $arg2) {
        return $arg1 - $arg2;
    }

    function multipl ($arg1, $arg2) {
        return $arg1 * $arg2;
    }

    function divis ($arg1, $arg2) {
        if ($arg2 === 0) {
            return 'на ноль делить нельзя';
        }

        return $arg1 / $arg2;
    }

    function mathOperation($arg1, $arg2, $operation) {
        $answer = 0;

        switch ($operation) {
            case 'sum': 
                $answer = sum($arg1, $arg2);
                break;
            case 'substract': 
                $answer = substract($arg1, $arg2);
                break;
            case 'multipl': 
                $answer = multipl($arg1, $arg2);
                break;
            case 'divis': 
                $answer = divis($arg1, $arg2);
                break;
            default:
                $answer = "неизвестный оператоор";
        }

        return $answer;
    }

    echo $a . PHP_EOL;
    echo $b . PHP_EOL;

    echo mathOperation($a, $b, 'sum') . PHP_EOL;
    echo mathOperation($a, $b, 'substract') . PHP_EOL;
    echo mathOperation($a, $b, 'multipl') . PHP_EOL;
    echo mathOperation($a, $b, 'divis') . PHP_EOL;
    echo mathOperation($a, $b, '5') . PHP_EOL;
?>