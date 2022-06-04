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
    <link rel="stylesheet" href="/css/adminprofile.css">
    <title>Admin profile</title>
</head>
<body>
<header>
    <ul>
        <li>
            <a href="/output/index.php" class="first_li">
            <img src="/picture/лого.png" alt="No Ethernet connection">
            <p>Merc <br> Drive</p>
            </a>    
        </li>
        <li>
            <nav>
                <ul>
                    <a href="/output/index.php"><li>Автопарк</li></a>
                    <a href="/output/index.php"><li>Услуги</li></a>
                    <a href="/output/index.php"><li>О нас</li></a>
                    <a href="/output/index.php"><li>Контакты</li></a>
                    <a href="../functions/logout.php"><li>Выход</li></a>
                </ul>
            </nav>
        </li>
    </ul>
    </header>
    <section class="section_between"></section>
    <section class="small_info">
        <div class="small_info_div">
            <img src="/picture/mercedes-me-logo-clipart-7.png" alt="">
            <p><?=$_SESSION['admin']['login']?></p>
        </div>
        <h1>Заявки</h1>
    </section>
    <section class="aplication">
    <?php
        require '../functions/connect.php';

        $sql = $connect->query("SELECT * FROM `orders`");
        while($row = $sql->fetch(PDO::FETCH_ASSOC)){
            ?>
            <div>
                <p class="id">ID заявки: <?=$row['id']?></p>
                <p class="name">Имя: <?=$row['name']?></p>
                <p class="phone">Номер телефона: <?=$row['phone_num']?></p>
                <p class="comment">Коментарий: <?=$row['comment']?></p>
                <p class="car">Автомобиль: <?=$row['car']?></p>
                <a href="/functions/delete_aplication.php?id=<?=$row['id']?>">Удалить</a>
            </div>
            <?php
        }
    ?>
    </section>
    <footer>
        <div id="4">
            <img class="logotip" src="/picture/лого.png" alt="">
            <p>© Merc Drive 2022</p>
        </div>
        <div>
            <ul>
                <li class="first_li_footer">
                    <p class="p_footer">НАВИГАЦИЯ</p>
                    <a href="#1">Автопарк</a>
                    <a href="#2">Услуги</a>
                    <a href="#3">О нас</a>
                </li>
                <li>
                    <p class="p_footer">КОНТАКТЫ</p>
                    <p href="">merc.drive.ru@gmail.com</p>
                    <p href="">+7 (927) 662-55-89</p>
                    <a href="#"><img class="inst" src="/picture/inst.png" alt=""></a>
                </li>
            </ul>
        </div>
    </footer>
</body>
</html>