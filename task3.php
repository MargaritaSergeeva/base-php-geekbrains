<?php
    //Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
    //Обязательно использовать оператор return.

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

    echo $a . PHP_EOL;
    echo $b . PHP_EOL;

    echo sum($a, $b) . PHP_EOL;
    echo substract($a, $b) . PHP_EOL;
    echo multipl($a, $b) . PHP_EOL;
    echo divis($a, $b) . PHP_EOL;
?>