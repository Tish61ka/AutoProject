<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/aplication.css">
    <title>Оставить заявку</title>
</head>
<body>
    <section class="section_first">
        <h1>Как заказать</h1>
        <ul>
            <li>
                <div>
                    <h2>01</h2>
                    <div></div>
                </div>
                <h3>Заполните форму заявки или оставьте ваш номер телефона</h3>
                <p>Оператор свяжится с вакми и расчитает стоимость поездки.</p>
            </li>
            <li>
                <div>
                    <h2>02</h2>
                    <div></div>
                </div>
                <h3>Предоплата 30%</h3>
                <p>Вы переводите предоплату, чтобы зарезервировать автомобиль.
                    В случае отмены свадьбы, мероприятия или съемки, предупредите нас за 7 дней, 
                    мы вернем предоплату.
                </p>
            </li>
            <li>
                <div>
                    <h2>03</h2>
                    <div></div>
                </div>
                <h3>Наслаждайесь поездкой</h3>
                <p>Мы убедимся, чтобы чистый автомобиль прибыл во время в назначенное место.
                    Позаботимся о том, чтобы все ваши пожелания были выполнены.
                </p>
            </li>
        </ul>
    </section>
    <section class="second_section">
        <div>
            <h2>Оставьте заявку</h2>
            <p>Заполните форму, и менеджер позвонит вам в течении 15 минут</p>
            <form method="POST" action="../functions/order.php">
               <input name="name" placeholder="Имя" type="text" required>
               <input name="phone_num" placeholder="Ваш номер телефона" type="text" required>
               <input name="comment" placeholder="Коментарий (необезательно)" type="text">
               <select class="select" size="1" name="Car" required>
                   <option selected disabled>Выберите автомобиль</option>
                   <option value="Mercedes Benz G">Mercedes Benz G</option>
                   <option value="Mercedes Benz GLC">Mercedes Benz GLC</option>
                   <option value="Mercedes E Class">Mercedes E Class</option>
                   <option value="Mercedes Benz A">Mercedes Benz A</option>
                   <option value="Mercedes V Class">Mercedes V Class</option>
                   <option value="Mercedes CLS">Mercedes CLS</option>
               </select> 
               <a href=""><button type="submit">Отправить</button></a>
               <p>Нажимая на кнопку "Отправить", вы даете согласие на обработку персональных данных
                   и соглашаетесь с политикой конфидециальности
               </p>
               <?php 
                if (isset($_SESSION['message_order'])){
                    echo '<div class="alert alert-danger">' . $_SESSION['message_order'] . '</div>';
                }
                unset($_SESSION['message_order']);
            ?>
            </form>
        </div>
    </section>
    <section class="last_section">
        <h1>Почему стоит довериться именно нам</h1>
        <ul>
            <div>
                <li>
                    <h3>01</h3>
                    <p>Автомобили самых последнх моделей</p>
                </li>
                <li>
                    <h3>02</h3>
                    <p>Принимаем заказы круглосуточно</p>
                </li>
                <li>
                    <h3>03</h3>
                    <p>Полная <br> анонимность</p>
                </li>
            </div>
            <div>
                <li>
                    <h3>04</h3>
                    <p>Высокая квалификация водителей</p>
                </li>
                <li>
                    <h3>05</h3>
                    <p>Говорим <br> на английском</p>
                </li>
                <li>
                    <h3>06</h3>
                    <p>Места для детей</p>
                </li>
            </div>
        </ul>
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
                    <a href="./index.php">Автопарк</a>
                    <a href="./index.php">Услуги</a>
                    <a href="./index.php">О нас</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>