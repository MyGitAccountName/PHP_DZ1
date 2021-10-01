<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="utf-8">
   <title>PHP 1. Формы</title>
   <link rel="stylesheet" href="../css/style.css">
</head>

<?php
    function login() {
        echo '
        <form action="forms.php" method="POST" id="login">
            <h2>Авторизация</h2>
            <label><input class="variable" type="text" name = "var1" placeholder="Логин:" title = "Правильный: login"></label>
            <label><input class="variable" type="password" name = "var2" placeholder="Пароль:" title = "Правильный: password"></label>
            <button class="task-button" type="submit" name="login" value="1">Войти</button>
            <button class="task-button" type="submit" name="login" value="2">Зарегистрироваться</button>
        </form>';
    }
    function register()
    {
        if ($_POST['register'] == 1) {
            $login = $_POST['var1'];
            $password = $_POST['var2'];
            $confirm = $_POST['var3'];
            $email = $_POST['var4'];
            $phone = $_POST['var5'];
        }
        else {
            $login = '1';
            $password = '111111';
            $confirm = '111111';
            $email = '111@111.com';
            $phone = '11111111111';
        }

        echo '
        <form action="forms.php" method="POST" id="register">
            <h2>Регистрация</h2>
            <label><input class="variable reg-login" type="text" name = "var1" placeholder="Логин:">'.$str.'</label>
            <label><input class="variable reg-password '.checkPassword($password)[0].'" type="password" name = "var2" placeholder="Пароль:">'.checkPassword($password)[1].'</label>
            <label><input class="variable reg-confirm '.checkConfirm($password, $confirm)[0].'" type="password" name = "var3" placeholder="Подтвердите пароль:">'.checkConfirm($password, $confirm)[1].'</label>
            <label><input class="variable reg-email" type="text" name = "var4" placeholder="Email:"></label>
            <label><input class="variable reg-phone '.checkPhone($phone)[0].'" type="text" name = "var5" placeholder="Телефон:">'.checkPhone($phone)[1].'</label>

            <button class="task-button" type="submit" name="register" value="1">Зарегистрироваться</button>
            <input class="task-button" type="button" value="Назад" onClick="document.location=\'forms.php\'">
        </form>';
    }
    function checkPassword($p) {
        if (strlen($p) < 6) return ["err", "Минимум 6 символов!"];
        else return ['',''];
    }
    function checkConfirm($p, $c) {
        if ($p !== $c) return ["err", "Ошибка в пароле!"];
        else return ['',''];
    }
    function checkPhone($p) {
        if (is_numeric($p) && (strlen($p) == 7 || strlen($p) == 11)) return ['',''];
        else return ["err", "Неправильно указан номер!"];
    }

?>


<body>
    <?php
        include 'header.php';
        showHeader(3);
        $goodLogin = "login";
        $goodPass = "password";
        if (empty($_POST))
            login();
        else if ($_POST['login'] == 1)
        {
            if ($_POST['var1'] == $goodLogin && $_POST['var2'] == $goodPass) {
                echo '<p class="result"><br>Добро пожаловать на сайт!</p>';
            }
            else {
                login();
                echo '<p class="result" style = "color: red !important;"><br>Неверные данные!</p>
                <form action="forms.php" method="POST" id="login2">
                <p class="result" style = "font-size: 20px !important;">Повторите попытку или пройдите
                <button class="a-button" type="submit" name="login" value="2">регистрацию</button>.</p>
                </form>';
            }
        }
        else {
            register();
        }


    ?>
</body>
</html>