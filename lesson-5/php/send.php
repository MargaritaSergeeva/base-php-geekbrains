<?php

require_once('./download-image.php');

$nameImg = $_FILES['photo']['name'];

$pathSmall = "../images/small-images/";
$pathBig = "../images/big-images/{$nameImg}";


if ($_FILES['photo']['error'] == 4) {
    header('Location: ../index.php');
    die();
}



resizeImage($_FILES['photo']['tmp_name'], $nameImg, 300, 85, $pathSmall, $nameImg);
move_uploaded_file($_FILES['photo']['tmp_name'], $pathBig);
header('Location: ../index.php');