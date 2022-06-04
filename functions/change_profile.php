<?php
session_start();

require './connect.php';

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$phone_num = $_POST['phone_num'];
$city = $_POST['city'];

$sql = $connect->query("INSERT INTO `users` (`name`, `login`, `email`, `phone_num`, `city`, `role`) VALUES ('$name', '$login', '$email', '$phone_num', '$city')");

$_SESSION['user']['name'] = $name;
$_SESSION['user']['login'] = $login;
$_SESSION['user']['email'] = $email;
$_SESSION['user']['phone_num'] = $phone_num;
$_SESSION['user']['city'] = $city;

header("Location: ../output/profile.php");