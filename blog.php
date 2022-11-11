<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Blog | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body id="articles-map">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
        <article class="wrapper-standard">
            <div class="pathname-container"><i><span class="pathname"><a href="/works">adamsochorec</a></span><span
                        class="pathname-current"> / Blog</span></i></div><br>
            <h1>Articles</h1>
            <section class="grid-container">
                <a href="/blog/house-hunting">
                    <div class="grid-item">
                        <h3></h3>
                        <picture class="grid-item-1">
                            <source srcset="/blog/img/house-hunting/avif/1.avif" type="image/avif">
                            <img src="/blog/img/house-hunting/jpg/1.jpg" alt="#">
                        </picture>
                    </div>
                </a>
                <a href="/blog/västerbotten">
                    <div class="grid-item">
                        <h3 class="grid-item-2"></h3>
                        <picture>
                            <source srcset="/blog/img/västerbotten/avif/1.avif" type="image/avif">
                            <img src="/blog/img/västerbotten/jpg/1.jpg" alt="#">
                        </picture>
                    </div>
                </a>
                <a href="/blog/flensburg-skagen">
                    <div class="grid-item">
                        <h3 class="grid-item-3"></h3>
                        <picture>
                            <source srcset="/blog/img/flensburg-skagen/avif/1.avif" type="image/avif">
                            <img src="/blog/img/flensburg-skagen/jpg/1.jpg" alt="#">
                        </picture>
                    </div>
                </a>
                <a href="/blog/blåvand">
                    <div class="grid-item">
                        <h3 class="grid-item-4"></h3>
                        <picture>
                            <source srcset="/blog/img/blåvand/avif/1.avif" type="image/avif">
                            <img src="/blog/img/blåvand/jpg/1.jpg" alt="#">
                        </picture>
                    </div>
                </a>
                <a href="/blog/kvarken-archipelago">
                    <div class="grid-item">
                        <h3 class="grid-item-5"></h3>
                        <picture>
                            <source srcset="/blog/img/kvarken-archipelago/avif/1.avif" type="image/avif">
                            <img src="/blog/img/kvarken-archipelago/jpg/1.jpg" alt="#">
                        </picture>
                    </div>
                </a>
                <a href="/blog/lakeland">
                    <div class="grid-item">
                        <h3 class="grid-item-6"></h3>
                        <picture>
                            <source srcset="/blog/img/lakeland/avif/1.avif" type="image/avif">
                            <img src="/blog/img/lakeland/jpg/1.jpg" alt="#">
                        </picture>
                    </div>
                </a>
            </section>
            <hr>
        </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
</body>

</html>