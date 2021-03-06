<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Carsharing</title>
</head>
<body>
    <header>
        <div></div> <!-- блок для затемнения-->
        <ul>
        <li class="first_li">
                <img src="/picture/лого.png" alt="No Ethernet connection">
                <p>Merc <br> Drive</p>
            </li>
            <li>
                <nav>
                    <ul>
                        <a href="#1"><li>Автопарк</li></a>
                        <a href="#2"><li>Услуги</li></a>
                        <a href="#3"><li>О нас</li></a>
                        <a href="#4"><li>Контакты</li></a>
                        <a href="/output/profile.php"><li><?=$_SESSION['user']['login']?></li></a>
                    </ul>
                </nav>
            </li>
        </ul>
        <h1>
            АРЕНДА АВТОМОБИЛЕЙ ПРЕМИУМ - КЛАССА С ЛИЧНЫМ ВОДИТЕЛЕМ <br>
            В МОСКВЕ И МОСКОВСКОЙ ОБЛАСТИ
        </h1>
        <p>
            От бизнес-встречи до свадьбы - <br> обеспечим наивысший уровень комфорта.
        </p>
    </header>
    <main>
        <section class="information" id="information">
            <ul>
                <li>
                    <h3>40</h3>
                    <p>Водителей</p>
                </li>
                <li class="beetween">
                    <h3>5 лет</h3>
                    <p>В индустрии</p>
                </li>
                <li>
                    <h3>Самые</h3>
                    <p>Последние модели</p>
                </li>
            </ul>
        </section>
        <section class="cars">
            <h1>Автопарк</h1>
            <ul id="1">
                <li>
                    <a href="">
                       <div class="div_top">
                        <img src="/picture/MercedesBenzG.png" alt="">
                        <h3> Mercedes Benz G</h3>
                        <p>5000 ₽/час</p>
                    </div> 
                    </a>
                    <a href="">
                        <div class="div_top_second">
                        <img src="/picture/MercedesBenzGLC.png" alt="">
                        <h3> Mercedes Benz GLC</h3>
                        <p>1000 ₽/час</p>
                    </div>
                    </a>
                    <a href="">
                        <div class="div_top_last">
                            <img src="/picture/MercedesEClass.png" alt="">
                            <h3 class="last_h3"> Mercedes E Class</h3>
                            <p>2500 ₽/час</p>
                        </div>
                    </a>
                </li>
                <li class="bottom_li" id="bot">
                    <a href="">
                        <div class="bottom_div">
                        <img src="/picture/MercedesBenzA.png" alt="">
                        <h3> Mercedes Benz A</h3>
                        <p>8000 ₽/час</p>
                    </div>
                    </a>
                    <a href="">
                        <div class="bottom_div_second">
                        <img src="/picture/MercedesVClass.png" alt="">
                        <h3> Mercedes V Class</h3>
                        <p>2500 ₽/час</p>
                    </div>
                    </a>
                    <a href="">
                        <div class="bottom_div_last">
                        <img src="/picture/MercedesCLS.png" alt="">
                        <h3 class="last_h3"> Mercedes CLS</h3>
                        <p>3500 ₽/час</p>
                    </div>
                    </a>
                </li>
            </ul>
        </section>
        <section class="our_services">
            <h1>Наши услуги</h1>
            <ul id="2">
                <li>
                    <div>
                        <img id="left_picture1" src="/picture/oursevicesfirst.png" alt="">
                    </div>
                    <div>
                        <h3 class="li_h3_first">АРЕНДА АВТОМОБИЛЯ С <br> ВОДИТЕЛЕМ ДЛЯ БИЗНЕС - ВСТРЕЧ</h3>
                        <p class="li_p_first"> 
                            Доверьте нам свой комфорт в бизнес-поездке и сконцентрируйтесь на важном. Личный водитель отвезет вас к месту встречи и будет ждать у дверей после ее окончания. Вам не надо отвлекаться и переживать о парковке или плохой погоде. В автомобиле вы найдете зарядку для телефона, воду и вай-фай.
                        </p>
                    </div>
                </li>
                <li>
                    <div>
                        <h3 class="li_h3_second">ВСТРЕЧА В АЭРОПОРТУ <br> И ТРАНСФЕР</h3>
                        <p class="li_p_second">
                            Автомобиль премиум-класса прибудет к вам офис или домой, а водитель поможет с багажом. Мы можем встретить вас в аэропорту с табличкой, чтобы вам не пришлось искать автомобиль с чемоданами. Для нас важно обеспечить вам чувство комфорта и безопасности.</p>
                    </div>
                    <div>
                        <img id="right_picture1" src="/picture/oursevicesSecond.png" alt="">
                    </div>
                </li>
                <li>
                    <div>
                        <img id="left_picture2" src="/picture/oursevicestrith.png" alt="">
                    </div>
                    <div>
                        <h3 class="li_h3_first">АРЕНДА АВТОМОБИЛЯ С <br> ВОДИТЕЛЕМ НА СВАДЬБУ</h3>
                        <p class="li_p_first">
                            Наша цель - обеспечить вам счастливый день без стресса. Водитель заберет вас в начале дня, отвезет в ЗАГС, в ресторан, на фотосессию, позаботится и поможет с платьем невесте. В течение дня вы можете передохнуть в автомобиле и устроить фотосессию. Сохраняя традицию, мы можем украсить автомобиль свадебными лентами и цветами.                        </p>
                    </div>
                </li>
                <li>
                    <div>
                        <h3 class="li_h3_second">СЪЕМКИ ФИЛЬМОВ <br> И ФОТОСЕССИИ</h3>
                        <p class="li_p_second">
                            Если вы запланировали красивую съемку или фотосессию - заказать автомобиль премиум-класса с водителем будет выгоднее. Вам не нужно резервировать автомобиль на весь день, заполнять документы о страховке, оставлять залог. Наш водитель приедет на съемку, и уедет как только она закончится. Вы не переплачиваете за весь день.                    </div>
                    <div>
                        <img id="right_picture2" src="/picture/oursevicesfourth.png" alt="">
                    </div>
                </li>
            </ul>
            <a href="/output/aplication.php" id="btn" class="btn animated-button thar-three"><p>Оставить заявку</p></a> 
        </section>
        <section class="professional">
            <h1 class="first_h1">MERC DRIVE - ЭТО КОМАНДА ПРОФЕССИОНАЛОВ</h1>
            <h1 id="3" class="second_h1">ВЫСОКОГО УРОВНЯ</h1>
            <ul>
                <li>
                    <img id="profimg" src="/picture/professionalfirst.png" alt="">
                </li>
                <li>
                    <p class="first_p">Мы 5 лет работаем в этой сфере и точно знаем, как предоставить идеальный сервис.</p>
                    <p class="second_p">Наши водители проходят личный отбор у руководителя. Они вежливы, обходительны, обучены спокойно реагировать на непредвиденные обстоятельства. Всегда в костюме, помогут вам с багажом или встретят с зонтом в дождь и снег.</p>
                    <p class="trith_p">Если у вас есть дополнительные запросы - бутылка шампанского, покупка букета или подарка, водитель выполнит любое ваше поручение. Считайте, что у вас есть личный помощник на время поездки.</p>
                </li>
            </ul>
        </section>
        <section class="search">
            <ul>
                <li >
                    <img id="searchimg" src="/picture/searchfirst.png" alt="">
                </li>
                <li class="first_li_search">
                    <h1>НЕ НАШЛИ ТО, ЧТО ИСКАЛИ?</h1>
                    <p>Оставьте ваш номер телефона, оператор свяжется и уточнит, на какой случай вам нужен автомобиль премиум-класса с личным водителем. Возможно, мы найдем для вас решение, которое не указано на сайте. У нашей команды многолетний опыт работы в этой отрасли, мы сделаем все возможное, чтобы помочь вам.</p>
                </li>
            </ul>
            <a href="/output/aplication.php" id="btn2" class="btn animated-button thar-three"><p>Свяжитесь со мной</p></a> 
        </section>
    </main>
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
    <a href="#" id="go1" class="go">↑</a>
    <script src="/js/scroll.js"></script>
</body>
</html>