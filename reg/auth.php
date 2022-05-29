<?php

	define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);
	
	require_once __ROOT__ . '/config/config.php';
	require_once __ROOT__ . '/inc/head.php';
	require_once __ROOT__ . '/inc/header.php';

	$req = $_REQUEST;
        $login = $req['login'];
        $pass = $req['password'];

    if($req['btn']){
        if($login && mb_strlen($pass) > 3 && mb_strlen($pass) < 17){
            $user = R::findOne('users', 'login = ?', [$login]);
            $pass_hash = $user->password;

            if(password_verify($pass, $pass_hash)){
	            $_SESSION['authorized'] = true;
	            $_SESSION['authorized_now'] = true;
            	header('Location: /about.php');
            } else {
	            $_SESSION['error'] = 'Введите правильные логин и пароль!';
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
                    <h2>Авторизация</h2>
					<input name="login" class="reg-input mt-4" type="text" placeholder="Телефон, имя пользователя или email" value="<?= @$req['login'] ?>">
					<input name="password" class="reg-input mt-2" type="password" placeholder="Пароль" value="<?= @$req['password'] ?>">
					<button name="btn" value="1" tyoe="submit" class="btn btn-primary mt-3 reg-btn">Войти</button>
                </form>
            </div>
			<div class="reg-container">
				<div class="ask">
					<p class="mt-3">У вас ещё нет аккаунта?  <a class="login" href="/reg/reg.php">Зарегистрироваться</a></p>
				</div>
			</div>
        </div>
    </div>

<?php require_once __ROOT__ . '/inc/footer.php'; ?>