<!DOCTYPE html>
<html lang="uk">

<head>
    <?php include '_top.php';?>
    <title>New project</title>
</head>

<body class="home-page">

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">

        <!-- HEADER -->
        <header>
            <?php include '_header.php';?>
        </header>

        <!-- BANNER -->
        <div class="section banner home-banner">
            <div class="swiper-entry swiper-banner hide-arrow">
                <div class="swiper-button-prev"><i></i></div>
                <div class="swiper-button-next"><i></i></div>
                <div class="swiper-container"
                    data-options='{"slidesPerView":1, "autoHeight":true, "speed": 888 , "autoplay": {"delay": 3000}, "loop": true, "parallax": true}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banner-align full-h">
                                <div class="bg" style="background-image: url(img/main-slide1.jpg);"
                                    data-swiper-parallax="30%" data-swiper-parallax-scale="1.25"></div>
                                <div class="bg mobile" style="background-image: url(img/main-slide1.jpg);"
                                    data-swiper-parallax="30%" data-swiper-parallax-scale="1.25"></div>
                                <div class="opacity opacity-left-right"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-11 col-xl-7 col-xxl-5">
                                            <div class="banner-content">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banner-align full-h">
                                <div class="opacity opacity-left-right"></div>

                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination color2"></div>
                </div>
            </div>
        </div>

        <!-- NEWS -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-10 offset-xl-1">
                        <div class="title-shortcode text-center">
                            <div class="title h1">Title</div>
                            <a href="simple-page.php" class="btn color2">Simple page</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
            <div class="spacer-xl"></div>
        </div>

        <!-- GALLERY -->
        <div class="section">
            <div class="swiper-entry hide-arrow gallery-slider">
                <div class="swiper-button-prev"><i></i></div>
                <div class="swiper-button-next"><i></i></div>
                <div class="swiper-container"
                    data-options='{"autoplay": { "delay": 7000 }, "slidesPerView":1, "autoHeight":true, "spaceBetween":0, "loop": true}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img">
                                <picture>
                                    <source srcset="img/simple-img.jpg" type="image/jpeg">
                                    <source srcset="img/simple-img.webp" type="image/webp">
                                    <img src="img/simple-img.jpg" alt="img">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <picture>
                                    <source srcset="img/simple-img.jpg" type="image/jpeg">
                                    <source srcset="img/simple-img.webp" type="image/webp">
                                    <img src="img/simple-img.jpg" alt="img">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <picture>
                                    <source srcset="img/simple-img.jpg" type="image/jpeg">
                                    <source srcset="img/simple-img.webp" type="image/webp">
                                    <img src="img/simple-img.jpg" alt="img">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-relative"></div>
                </div>
            </div>
            <div class="spacer-xl"></div>
        </div>

        <!-- SEO -->
        <div class="section seo-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-8 offset-xl-2">
                        <div class="title-shortcode text-center">
                            <div class="title h1">SEO</div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8 offset-xl-2">
                        <div class="seo-text-block">
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo. Cras
                                    semper nunc sed luctus sagittis. Nam interdum mi in lectus ultrices, at ullamcorper
                                    justo sagittis. Fusce ac metus euismod, tincidunt nisi eget, feugiat nulla. In
                                    accumsan magna vel ipsum laoreet, id pellentesque elit viverra. Donec facilisis urna
                                    vitae leo tincidunt, blandit dictum ligula feugiat. Donec congue, massa eget laoreet
                                    mattis, ligula risus posuere dolor, vel porttitor odio purus ac odio. Curabitur sit
                                    amet turpis risus. Duis a risus a dolor placerat vehicula.</p>
                                <div class="more-text">
                                    <div class="text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus
                                            leo. Cras semper nunc sed luctus sagittis. Nam interdum mi in lectus
                                            ultrices, at ullamcorper justo sagittis. Fusce ac metus euismod, tincidunt
                                            nisi eget, feugiat nulla. In accumsan magna vel ipsum laoreet, id
                                            pellentesque elit viverra. Donec facilisis urna vitae leo tincidunt, blandit
                                            dictum ligula feugiat. Donec congue, massa eget laoreet mattis, ligula risus
                                            posuere dolor, vel porttitor odio purus ac odio. Curabitur sit amet turpis
                                            risus. Duis a risus a dolor placerat vehicula.</p>
                                    </div>
                                    <div class="btn color2 read-more" data-read-more="побачити більше"
                                        data-read-less="згорнути">побачити більше</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer-xl"></div>
        </div>

        <!-- FOOTER -->
        <footer>
            <?php include '_footer.php';?>
        </footer>

        <!-- POPUP -->
        <div class="popup-wrapper" id="popups"></div>

    </div>

    <?php include '_bottom.php';?>
    <?php include '_sumoselect.php';?>

</body>

</html>