<?php

	define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);

    require_once __ROOT__ . '/config/config.php';
	require_once __ROOT__ . '/inc/head.php';
	require_once __ROOT__ . '/inc/header.php';

?>

    <div class="container">
        <?php if($_SESSION['authorized_now']): unset($_SESSION['authorized_now']); ?>
        <div style="margin-top: 100px;" class="alert alert-success" role="alert">
            All is OK!
        </div>
        <?php endif; ?>

        <div class="pt-5 text-white">
            <header class="py-5 mt-5">
                <div class="bg-grad">
                    <h1 class="display-4 font-weight-bold">Привет! Я - Саша.</h1>
                    <h2 class="font-weight-bold">Мне 16.</h2>
                    <p class="lead mb-0 font-weight-bold">Увлекаюсь всем, что касается Web-разработки.</p>
                    <p class="lead mb-0 font-weight-bold">Точнее Back-end'ом.</p>
                </div>
            </header>
        </div>
    </div>

<?php require_once __ROOT__ . '/inc/footer.php'; ?>