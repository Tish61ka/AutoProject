<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/profile.css">
    <title>Профиль <?=$_SESSION['user']['login']?></title>
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
            <p><?=$_SESSION['user']['login']?></p>
        </div>
        <ul>
            <a onclick="click7()"><li id="li-1">Данные</li></a> 
            <a onclick="click8()"><li id="li-2">Настройка</li></a> 
            <a onclick="click9()"><li id="li-3">Политика</li></a> 
        </ul>
        <div id="img-1">
            <img class="img_1"  src="/picture/Vector.png" alt="">
            <div class="img_div_1">
                <ul>
                    <li>Имя: <?=$_SESSION['user']['name']?></li>
                    <li>Логин: <?=$_SESSION['user']['login']?></li>
                    <li>E-mail: <?=$_SESSION['user']['email']?></li>
                    <li>Номер: <?
                        if($_SESSION['user']['phone_num'] == NULL){
                            echo 'Не указан';
                        }
                        else{
                            echo $_SESSION['user']['phone_num'];
                        }
                    ?></li>
                    <li>Город: <?
                        if($_SESSION['user']['city'] == NULL){
                            echo 'Не указан';
                        }
                        else{
                            echo $_SESSION['user']['city'];
                        }
                    ?></li>
                </ul>
            </div>
        </div>
        <div id="img-2">
            <img class="img_2" src="/picture/Vector.png" alt="">
            <div class="img_div_2">
                <form action="../functions/change_profile.php" method="POST">
                    <input name="name" placeholder="Имя" value="<?=$_SESSION['user']['name']?>" type="text">
                    <input name="login" placeholder="Логин" value="<?=$_SESSION['user']['login']?>" type="text">
                    <input name="email" placeholder="E-mail" value="<?=$_SESSION['user']['email']?>" type="email">
                    <input name="phone_num" placeholder="Номер телефона" value="<?=$_SESSION['user']['phone_num']?>" pattern="[0-9]{11}" type="text">
                    <input name="city" placeholder="Город" maxlength="100" value="<?=$_SESSION['user']['city']?>" type="text">
                    <a class="btn animated-button thar-three"><button type="submit">Сохранить</button></a>
                </form>
            </div>
        </div>
        <div id="img-3">
            <img class="img_3" src="/picture/Vector.png" alt="">
            <div class="img_div_3">
                <h1>Политика конфиденциальности персональных данных</h1>
                <p>
                    Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в 
		            отношении всей информации, которую сайт <strong>Merc Drive</strong>, (далее – Merc Drive) расположенный на 
		            доменном имени <strong>merc.drive.com</strong> (а также его субдоменах), может получить о Пользователе во время использования 
		            сайта merc.drive.com (а также его субдоменов), его программ и его продуктов.
                </p>
                <a href="/politica.html">Читать далее</a>
            </div>
        </div>
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
    <script src="/js/profile.js"></script>
</body>
</html>