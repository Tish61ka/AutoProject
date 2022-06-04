<?php

session_start();

require './connect.php';

$name = $_POST['name'];
$phone_num = $_POST['phone_num'];
$comment = $_POST['comment'];
$car = $_POST['Car'];
$id_user = $_SESSION['user']['id'];

$sql = $connect->query("INSERT INTO `orders` (`id_user`, `name`, `phone_num`, `comment`, `car`) VALUES ('$id_user','$name', '$phone_num', '$comment','$car')");
print_r($_POST);