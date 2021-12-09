<?php

require_once "Mysql.php";

$connect = (new Mysql());
if ($_POST['name'] && $_POST['email']) {
    $goodId = $_POST['id'];
    $reviewerName = $_POST['name'];
    $reviewerEmail = $_POST['email'];
    $reviewerRange = $_POST['range'];
    $text = $_POST['message'];

    $insertIntoReviewsSql = "insert into reviews(good_id, reviewer_name, reviewer_range, review, reviewer_email) values ( $goodId, '$reviewerName', $reviewerRange, '$text', '$reviewerEmail')";
    $insertIntoReviews = $connect->query($insertIntoReviewsSql);

    if ($insertIntoReviews) {
        header("Location: ../../single-product-variable.php?id={$_POST['id']}");
    } else {
        header('Location: ../../index.php');
    }
}