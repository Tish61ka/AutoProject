<?php

session_start();

require './connect.php';

$name = $_POST['name'];
$phone_num = $_POST['phone_num'];
$comment = $_POST['comment'];
$car = $_POST['Car'];

$sql = $connect->query("INSERT INTO `orders` (`name`, `phone_num`, `comment`, `car`) VALUES ('$name', '$phone_num', '$comment','$car')");
$_SESSION['message_order'] = 'Спасибо за оставленную заявку!';
header("Location: ../output/aplication.php");