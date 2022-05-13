<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/sign.css">
    <title>Sign in</title>
</head>
<body>
    <section>
        <button onclick="click2()" id="btn1" class="click2"></button>
        <form action="../functions/reg.php" method="POST" id="form1" class="signup">
            <h2>Регистрация</h2>
            <input type="text"  name="name" placeholder="Имя" >
            <input type="text" name="login" placeholder="Логин" >
            <input type="email" name="email" placeholder="Почта" >
            <input type="password" name="password" placeholder="Пароль" >
            <input type="password" name="password_confirm" placeholder="Повторите пароль" >
            <button type="submit">Отправить</button>
            <p>Нажимая на кнопку "Отправить", вы даете согласие на обработку персональных данных и соглашаетесь
                с политикой конфиденциальности
            </p>
            <?php 
                if (isset($_SESSION['message_reg'])){
                    echo '<div class="alert alert-danger">' . $_SESSION['message_reg'] . '</div>';
                }
                unset($_SESSION['message_reg']);
            ?>
        </form>
        <button onclick="click1()" id="btn2" class="click1" ></button>
        <form action="../functions/log.php" method="POST" class="signin" id="form2">
            <h2>Авторизация</h2>
            <input type="text" class="input" name="login" placeholder="Логин" required>
            <input type="password" id="input" name="password" placeholder="Пароль" required>
            <button>Войти</button>
            <p>Нажимая на кнопку "Войти", вы даете согласие на обработку персональных данных и соглашаетесь
                с политикой конфиденциальности
            </p>
        </form>
    </section>
    <script src="/js/scroll.js"></script>
</body>
</html>