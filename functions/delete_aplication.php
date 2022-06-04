<?php
    session_start();

    require_once('./connect.php');
    $id = $_GET['id'];

    $delete_user = $connect->query("DELETE FROM `orders` WHERE `id` = '$id'");
    header('Location: ../output/profile_admin.php');