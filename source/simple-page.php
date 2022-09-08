<!DOCTYPE html>
<html lang="uk">

<head>
    <?php include '_top.php';?>
    <title>New project :: simple page</title>
</head>

<body>

    <!-- LOADER -->
    <div id="loader-wrapper"></div>

    <div id="content-block">

        <!-- HEADER -->
        <header>
            <?php include '_header.php';?>
        </header>

        <!-- BREADCRUMBS -->
        <div class="section top-sec">
            <div class="container">
                <ul class="breadcrumbs">
                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.php" itemprop="url">
                            <span itemprop="title">Головна</span>
                        </a>
                    </li>
                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="category.php" itemprop="url">
                            <span itemprop="title">Категорія</span>
                        </a>
                    </li>
                    <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                        <span itemprop="title">Контент</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-10 offset-xl-1 col-xxl-8 offset-xxl-2">
                        <div class="simple-page text text-sm">
                            <picture>
                                <source srcset="img/simple-img.jpg" type="image/jpeg">
                                <source srcset="img/simple-img.webp" type="image/webp">
                                <img src="img/simple-img.jpg" alt="" loading="lazy">
                            </picture>
                            <h5>In interdum tempor tristique. Pellentesque euismod tempus suscipit. Curabitur
                                pellentesque dignissim fermentum. Pellentesque a turpis enim. Nunc placerat neque non
                                arcu aliquet ornare. Ut ut euismod risus, vel molestie purus. In hac habitasse platea
                                dictumst. Nam suscipit gravida commodo. Fusce ac lorem non lorem pharetra vestibulum ut
                                quis nisi.</h5>
                            <p>Donec vehicula erat finibus rutrum imperdiet. Proin volutpat est at porta aliquam. In
                                tincidunt quam sed vehicula lacinia. Proin sollicitudin, nulla id varius consequat,
                                sapien dolor imperdiet risus, a consequat mauris magna sit amet orci. Curabitur a lacus
                                vitae erat molestie laoreet. Maecenas sed risus eu justo aliquam varius vitae in est.
                                Phasellus finibus turpis elit, vitae sollicitudin est luctus nec. Aliquam consectetur
                                turpis magna, eu pellentesque sapien bibendum eu. Ut magna lacus, viverra vitae sem et,
                                tempor faucibus erat. Maecenas finibus consectetur quam. Sed ut iaculis ligula. Etiam
                                fringilla congue vestibulum. In imperdiet lacus cursus justo ultricies, ac porttitor
                                metus tempor. Integer bibendum lectus at justo pulvinar molestie. Phasellus malesuada
                                ipsum sed dolor vestibulum, eu aliquam nibh eleifend. Vivamus id feugiat lacus.</p>
                            <p>In interdum tempor tristique. Pellentesque euismod tempus suscipit. Curabitur
                                pellentesque dignissim fermentum. Pellentesque a turpis enim. Nunc placerat neque non
                                arcu aliquet ornare. Ut ut euismod risus, vel molestie purus. In hac habitasse platea
                                dictumst. Nam suscipit gravida commodo. Fusce ac lorem non lorem pharetra vestibulum ut
                                quis nisi.</p>
                            <div class="swiper-entry hide-arrow simple-slider">
                                <div class="swiper-button-prev"><i></i></div>
                                <div class="swiper-button-next"><i></i></div>
                                <div class="swiper-container"
                                    data-options='{"autoplay": { "delay": 7000 }, "loop":true, "centerInsufficientSlides": true}'>
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="simple-slide">
                                                <picture>
                                                    <source srcset="img/simple-img.jpg" type="image/jpeg">
                                                    <source srcset="img/simple-img.webp" type="image/webp">
                                                    <img src="img/simple-img.jpg" alt loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="simple-slide">
                                                <picture>
                                                    <source srcset="img/simple-img.jpg" type="image/jpeg">
                                                    <source srcset="img/simple-img.webp" type="image/webp">
                                                    <img src="img/simple-img.jpg" alt loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="simple-slide">
                                                <picture>
                                                    <source srcset="img/simple-img.jpg" type="image/jpeg">
                                                    <source srcset="img/simple-img.webp" type="image/webp">
                                                    <img src="img/simple-img.jpg" alt loading="lazy">
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-relative"></div>
                                </div>
                            </div>
                            <p>Pellentesque euismod tempus suscipit.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo.</li>
                            </ul>
                            <iframe src="https://www.youtube.com/embed/9Pqf_AIT2ZI" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <p>In interdum tempor tristique. Pellentesque euismod tempus suscipit. Curabitur
                                pellentesque dignissim fermentum. Pellentesque a turpis enim. Nunc placerat neque non
                                arcu aliquet ornare. Ut ut euismod risus, vel molestie purus. In hac habitasse platea
                                dictumst. Nam suscipit gravida commodo. Fusce ac lorem non lorem pharetra vestibulum ut
                                quis nisi.</p>
                            <blockquote>In interdum tempor tristique. Pellentesque euismod tempus suscipit. Curabitur
                                pellentesque dignissim fermentum. Pellentesque a turpis enim. Nunc placerat neque non
                                arcu aliquet ornare. Ut ut euismod risus, vel molestie purus. In hac habitasse platea
                                dictumst. Nam suscipit gravida commodo. Fusce ac lorem non lorem pharetra vestibulum ut
                                quis nisi.</blockquote>
                            <ol>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin non luctus leo.</li>
                            </ol>
                            <p>In interdum tempor tristique. Pellentesque euismod tempus suscipit. Curabitur
                                pellentesque dignissim fermentum. Pellentesque a turpis enim. Nunc placerat neque non
                                arcu aliquet ornare. Ut ut euismod risus, vel molestie purus. In hac habitasse platea
                                dictumst. Nam suscipit gravida commodo. Fusce ac lorem non lorem pharetra vestibulum ut
                                quis nisi.</p>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><span>Пункт 1</span></td>
                                        <td>Опис пункту 1</td>
                                    </tr>
                                    <tr>
                                        <td><span>Пункт 2</span></td>
                                        <td>Опис пункту 2</td>
                                    </tr>
                                    <tr>
                                        <td><span>Пункт 3</span></td>
                                        <td>Опис пункту 3</td>
                                    </tr>
                                    <tr>
                                        <td><span>Пункт 4</span></td>
                                        <td>Опис пункту 4</td>
                                    </tr>
                                    <tr>
                                        <td><span>Пункт 5</span></td>
                                        <td>Опис пункту 5</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> <a href="#">Proin
                                    non luctus leo.</a></p>
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

</body>

</html>