<?
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль <?=$_SESSION['user']['login']?></title>
</head>
<body>
    <p><?=$_SESSION['user']['login']?></p>
    <a href="../functions/logout.php">Выход</a>
</body>
</html>