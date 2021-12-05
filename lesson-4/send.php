<?php

$pathSmall = "images/small-images/{$_FILES['photo']['name']}";
$pathBig = "images/big-images/{$_FILES['photo']['name']}";

if ($_FILES['photo']['error'] == 4) {
  header('Location: index.php');
}

if (move_uploaded_file($_FILES['photo']['tmp_name'], $pathSmall)) {
  copy($pathSmall, $pathBig);
  header('Location: index.php');
};