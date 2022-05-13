<?
    session_start();

    require './connect.php';

   echo $name = $_POST['name'];
   echo $login = $_POST['login'];
   echo $email = $_POST['email'];
   echo $password = $_POST['password'];
   echo $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm){
        $check_login = $connect->query("SELECT * FROM `users` WHERE `login` = '$login'");
        $response = $check_login->fetch(PDO::FETCH_ASSOC);
        if ($response['login']){
            $_SESSION['message_reg'] = "Этот логин занят, придумайте другой!";
            header("Location: ../output/sign.php");
        }
        else{
            $check_email = $connect->query("SELECT * FROM `users` WHERE `email` = '$email'");
            $response1 = $check_email->fetch(PDO::FETCH_ASSOC);
            if($response1['email']){
                $_SESSION['message_reg'] = "Такая почта уже используется, введите свою почту!";
                header('Location: ../output/sign.php'); 
            }
            else{
                $add_user = $connect->query("INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`) VALUES (NULL, '$name', '$login', '$email', '$password')");
                $_SESSION['message_reg'] = 'Регистрация прошла успешно!';
                header('Location: ../output/sign.php');
            }
        }
    } else{
        $_SESSION['message_reg'] = 'Пароли не совпадают!';
        header('Location: ../output/sign.php'); 
    }