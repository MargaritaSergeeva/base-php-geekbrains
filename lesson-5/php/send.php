<?php

require_once "./config.php";
require_once "./resize-image.php";

$fullNameImg = $_FILES['photo']['name'];
$pathSmall = "../images/small-images/";
$pathBig = "../images/big-images/";

$nameImg = strtolower(substr($fullNameImg, 0, strpos($fullNameImg, ".")));
$typeImg = strtolower(substr(strrchr($fullNameImg, "."), 1));;
$sizeImg = $_FILES['photo']['size'];
$sqlInsert = "INSERT INTO gallery(name, type, size) VALUES ('$nameImg', '$typeImg', $sizeImg)";


if ($_FILES['photo']['error'] == 4) {
    header('Location: ../index.php');
    die();
}

if (mysqli_query($connect, $sqlInsert)) {
    resizeImage($_FILES['photo']['tmp_name'], 300, 85, $pathSmall, $fullNameImg);
    move_uploaded_file($_FILES['photo']['tmp_name'], $pathBig . $fullNameImg);
    header('Location: ../index.php');
} else {
    header('Location: ../index.php');
}