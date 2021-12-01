<?php
    // Объявить массив, индексами которого являются буквы русского языка,
    // а значениями – соответствующие латинские буквосочетания 
    // (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
    // Написать функцию транслитерации строк.


   $translitLetters = [
      "А"=>"A","Б"=>"B","В"=>"V","Г"=>"G",
      "Д"=>"D","Е"=>"E","Ё"=>"E","Ж"=>"J","З"=>"Z","И"=>"I",
      "Й"=>"Y","К"=>"K","Л"=>"L","М"=>"M","Н"=>"N",
      "О"=>"O","П"=>"P","Р"=>"R","С"=>"S","Т"=>"T",
      "У"=>"U","Ф"=>"F","Х"=>"H","Ц"=>"TS","Ч"=>"CH",
      "Ш"=>"SH","Щ"=>"SCH","Ъ"=>"","Ы"=>"YI","Ь"=>"",
      "Э"=>"E","Ю"=>"YU","Я"=>"YA","а"=>"a","б"=>"b",
      "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ё"=>"e","ж"=>"j",
      "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
      "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
      "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
      "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
      "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya"
   ];

   $str = 'Я люблю языки программирования';

   function translit ($string, $translitLetters) {
      $translitString = "";

      for ($i = 0; $i < mb_strlen($string); $i++) {
         $char = mb_substr($string, $i, 1);
         ($char != ' ') ? $translitString .= $translitLetters[$char] : $translitString .= ' ';
      }

      return $translitString;
   }

   echo str_replace(array_keys($translitLetters), array_values($translitLetters), $str) . '<br>' . PHP_EOL;

   echo translit($str, $translitLetters);
?>