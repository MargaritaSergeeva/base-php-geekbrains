<?php

function resizeImage ($file, $filename, $size = 300, $quality = 85, $path_save, $new_filename)
{
    /*
    * Адрес директории для сохранения картинки
    */
    $dir  = $path_save;

    /*
    * Извлекаем формат изображения, то есть получаем
    * символы находящиеся после последней точки
    */


    $ext  = strtolower(strrchr(basename($filename), "."));

    /*
    * Допустимые форматы
    */
    $extensions = array('.jpg', '.gif', '.png');

    if (in_array($ext, $extensions)) {
        $newWidth = $size; // Ширина изображения миниатюры

        list($width, $height) = getimagesize($file); // Возвращает ширину и высоту
        $newHeight    = $height * $newWidth / $width;

        $thumb = imagecreatetruecolor($newWidth, $newHeight);



        switch ($ext) {
            case '.jpg':
                $source = @imagecreatefromjpeg($file);
                break;

            case '.gif':
                $source = @imagecreatefromgif($file);
                break;

            case '.png':
                $source = @imagecreatefrompng($file);
                break;
        }

//        echo '<pre>';
//        print_r($thumb);
//        exit();

        /*
        * Функция наложения, копирования изображения
        */
        imagecopyresized($thumb, $source, 0, 0, 0, 0,$newWidth, $newHeight, $width, $height);

        /*
        * Создаем изображение
        */
        switch ($ext) {
            case '.jpg':
                imagejpeg($thumb, $dir . $new_filename, $quality);
                break;

            case '.gif':
                imagegif($thumb, $dir . $new_filename);
                break;

            case '.png':
                imagepng($thumb, $dir . $new_filename);
                break;
        }
    } else {
        return false;
    }

    /*
    *  Очищаем оперативную память сервера от временных файлов,
    *  которые потребовались для создания миниатюры
    */
    @imagedestroy($thumb);
    @imagedestroy($source);

    return true;
}

