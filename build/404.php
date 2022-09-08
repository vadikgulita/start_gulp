<!DOCTYPE html>
<html lang="uk">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name='robots' content='noindex,nofollow' />
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="img/favicon.ico" />
    <title>404</title>
</head>

<body class="no-widget">

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">

        <!-- HEADER -->
        <header>
            <?php include '_header.php';?>
        </header>

        <!-- NOT FOUND -->
        <div class="section not-found">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-10 offset-xl-1">
                        <div class="content-block title-shortcode text-center">
                            <div class="not-found-img1">
                                <img src="img/not-found-img1.png" alt="img" loading="lazy">
                            </div>
                            <div class="not-found-img2">
                                <img src="img/not-found-img2.png" alt="img" loading="lazy">
                            </div>
                            <div class="title h3">Помилка!<br> Сторінку не знайдено...</div>
                            <a href="index.php" class="btn type3">повернутись на головну</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer>
            <?php include '_footer.php';?>
        </footer>

        <!-- POPUP -->
        <div class="popup-wrapper" id="popups"></div>

    </div>


</body>

</html>