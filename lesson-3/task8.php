<?php
    // Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
    // а в качестве значений – массивы с названиями городов из соответствующей области. 
    // Вывести в цикле значения массива, чтобы результат был таким:
    // Московская область:
    // Москва, Зеленоград, Клин
    // Ленинградская область:
    // Санкт-Петербург, Всеволожск, Павловск, Кронштадт
    // Рязанская область:

   $cities = [
      'Московская область' => [
         'Москва', 'Зеленоград', 'Клин', 'Калинин'
      ],
      'Ленинградская область' => [
         'Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'
      ],
      'Рязанская область' => [
         'Рязань', 'Михайлов', 'Караблино', 'Ряжск'
      ]
      ];

   foreach($cities as $key => $value) {
      $filterCities = array_filter($value, function ($val) {
         return mb_substr($val, 0, 1) == 'К';
      });
      if (!empty($filterCities)) {
         echo $key . ": <br>" . PHP_EOL . implode(', ', $filterCities) . '<br>' . PHP_EOL;
      }
   }
?>