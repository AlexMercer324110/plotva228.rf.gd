<?php

	define('__ROOT__', $_SERVER['DOCUMENT_ROOT']);

    require_once __ROOT__ . '/config/config.php';
	require_once __ROOT__ . '/inc/head.php';
	require_once __ROOT__ . '/inc/header.php';

?>

    <div class="container">
        <div class="pt-5 text-white">
            <header class="py-5 mt-5">
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="feature col">
                        <?php if(@$_SESSION['authorized']): ?>
                        <div class="bg-grad">
                            <h1 class="font-weight-bold">Номер:</h1>
                            <h4><a class="font-weight-bold ml-4 link" href="tel:+38068<?= rand(1000000, 9999999) ?>">+38068<?= rand(1000000, 9999999) ?></a></h4>
                        </div> <? else: ?>
                        <div class="bg-grad">
                            <h4 class="font-weight-bold">Чтобы увидеть номер - <a class="link" href="/reg/auth.php">авторизуйтесь</a></h4>
                        </div> <? endif; ?>
                    </div>
                    <div class="feature col mt-4">
                        <?php if(@$_SESSION['authorized']): ?>
                        <div class="bg-grad">
                            <h1 class="font-weight-bold">Email:</h1>
                            <h4><a class="font-weight-bold ml-4 link" href="mailto:alex.mercer.324110@gmail.com">alex.mercer.324110@gmail.com</a></h4>
                        </div><? else: ?>
                        <div class="bg-grad">
                            <h4 class="font-weight-bold">Чтобы увидеть email - <a class="link" href="/reg/auth.php">авторизуйтесь</a></h4>
                        </div><? endif; ?>
                    </div>
                    <div class="feature col mt-5">
                        <div class="bg-grad">
                            <h1 class="font-weight-bold">Telegram:</h1>
                            <h4><a class="font-weight-bold ml-4 link" target="_blank" href="https://t.me/aleksandr_havrilutsa">@aleksandr_havrilutsa</a></h4>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>


<?php require_once __ROOT__ . '/inc/footer.php'; ?>