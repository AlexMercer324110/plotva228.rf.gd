<?php

    define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
	
	require_once __ROOT__ . '/config/config.php';
	require_once __ROOT__ . '/inc/head.php';
	require_once __ROOT__ . '/inc/header.php';

    $req = $_REQUEST;
        $login = $req['login'];
        $ip = $_SERVER['REMOTE_ADDR'];  
        $date = date("Y-m-d H:i:s");
        $pass = $req['password'];

    if($req['btn']){
        if($login && mb_strlen($pass) > 3 && mb_strlen($pass) < 17){
            try {
                $_SESSION['authorized_now'] = true;
                $_SESSION['authorized'] = true;

                $user = R::dispense('users');
                    $user->login = $login; 
                    $user->ip = $ip; 
                    $user->date = $date; 
                    $user->password = password_hash($pass, PASSWORD_DEFAULT);
                R::store($user); 

                header('Location: /about.php');
            } catch(Exception $e){
                $_SESSION['error'] = 'Данный пользователь уже зарегистрирован!';
                unset($_SESSION['authorized_now']);
                unset($_SESSION['authorized']);
            }

        } else {
            $_SESSION['error'] = 'Введите правильные логин и пароль!';
        }
    }

?>

    <div class="container">
        <div class="pt-5 text-white">
            <div class="reg-container">
                <?php if($_SESSION['error']): ?>
                <div style="margin-top: 50px;" class="alert alert-danger" role="alert">
                    <?= $_SESSION['error'] ?>
                </div> <?php unset($_SESSION['error']); endif; ?>

                <form class="reg-form" method="post">
                    <h2>Регистрация</h2>
                    <input name="login" class="reg-input mt-4" type="text" placeholder="Моб. телефон или эл. адрес" value="<?= @$login ?>">
                    <input name="password" class="reg-input mt-2" type="password" placeholder="Пароль" value="<?= @$pass ?>">
                    <button name="btn" type="submit" value="1" class="btn btn-primary mt-3 reg-btn">Зарегистрироваться</button>
                </form>
            </div>
            <div class="reg-container">
                <div class="ask">
                    <p class="mt-3">Есть аккаунт?  <a class="login" href="/reg/auth.php">Войти</a></p>
                </div>
            </div>
        </div>
    </div>

<?php require_once __ROOT__ . '/inc/footer.php'; ?>