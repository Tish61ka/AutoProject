<?
    session_start();

    require './connect.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    $user = $check_user->fetch(PDO::FETCH_ASSOC);

    if ($user>0){
        if($user['role'] == 1){
            $_SESSION['admin'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "login" => $user['login'],
                "email" => $user['email'],
                "avatar" => $user['avatar']
            ];
            header("Location: ../output/profile_admin.php");
        }
        else{
            $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "login" => $user['login'],
            "email" => $user['email'],
            "phone_num" => $user['phone_num'],
            "city" => $user['city']
        ];
        header("Location: ../output/profile.php");
        }        
    } 
    else{
        $_SESSION['message'] = 'Невереный логин или пароль!';
        header("Location: ../output/sign.php");
    }