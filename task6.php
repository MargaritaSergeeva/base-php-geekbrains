<?php
    //*С помощью рекурсии организовать функцию возведения числа в степень. 
    // Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

    $a = rand(1, 5);
    $b = rand(1, 5);

    function power($val, $pow) {
        if ($pow == 0) {
            return 1;
        }

        $pow--;

        return $val * power($val, $pow);
    }


    echo $a . PHP_EOL;
    echo $b . PHP_EOL;

    echo power($a, $b) . PHP_EOL;
?>