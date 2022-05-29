
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container">
                <a href="/" class="navbar-brand text-uppercase font-weight-bold">Aleksandr Havrilutsa</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link text-uppercase font-weight-bold">Про меня</a></li>
                        <li class="nav-item"><a href="/contact.php" class="nav-link text-uppercase font-weight-bold">Контакты</a></li>
                        <?php if($_REQUEST['logout']){
                            session_destroy(); 
                            header("Location: {$_SERVER['REQUEST_URI']}"); 
                        } ?>
                        <?php if($_SESSION['authorized']): ?>
                        <form method="post">
                            <li class="nav-item"><button name="logout" value="1" type="submit" class="nav-link text-uppercase font-weight-bold">Выйти</button></li>
                        </form>
                        <?php else: ?>
                        <li class="nav-item"><a href="/reg/auth.php" class="nav-link text-uppercase font-weight-bold">Авторизоваться</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
