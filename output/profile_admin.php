<?php
session_start();
if(!$_SESSION['admin']){
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin profile</title>
</head>
<body>
    <a href="../functions/logout_admin.php">Выход</a>
    <h1>Заявки</h1>
    <?php
        require '../functions/connect.php';

        $sql = $connect->query("SELECT * FROM `orders`");
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            ?>
            <p>ID заявки: <?=$row['id']?></p>
            <p>Имя: <?=$row['name']?></p>
            <p>Номер телефона: <?=$row['phone_num']?></p>
            <p>Коментарий: <?=$row['comment']?></p>
            <p>Автомобиль: <?=$row['car']?></p>
            <?php
        }
    ?>
</body>
</html>