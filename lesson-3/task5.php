<?php
    //  Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
    //  и возвращает видоизмененную строчку.

   $str = 'Я люблю языки программирования';

   function changeWrap ($string) {
      $newString = "";

      for ($i = 0; $i < mb_strlen($string); $i++) {
         $char = mb_substr($string, $i, 1);
         ($char !== ' ') ? $newString .= $char : $newString .= '_';
      }

      return $newString;
   }

   echo changeWrap($str) . '<br>' . PHP_EOL;

   echo str_replace(' ', '_', $str);
?>