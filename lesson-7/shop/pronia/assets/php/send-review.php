<?php

require_once "Mysql.php";

$connect = (new Mysql());

if ($_POST['name'] && $_POST['email']) {
    $goodId = (int) $_POST['id'];
    $reviewerName = htmlspecialchars($_POST['name']);
    $reviewerEmail = htmlspecialchars($_POST['email']);
    $reviewerRange = (int) $_POST['range'];
    $text = htmlspecialchars($_POST['message']);

    $insertIntoReviewsSql = "insert into reviews(good_id, reviewer_name, reviewer_range, review, reviewer_email) values ( $goodId, '$reviewerName', $reviewerRange, '$text', '$reviewerEmail')";
    $insertIntoReviews = $connect->query($insertIntoReviewsSql);

    if ($insertIntoReviews) {
        header("Location: ../../single-product-variable.php?id={$_POST['id']}");
    } else {
        header('Location: ../../index.php');
    }
}