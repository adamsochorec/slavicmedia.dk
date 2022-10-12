<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Lakeland | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main id="lakeland">
        <article class="wrapper-standard">
            <section>
                <h1></h1>
                <picture>
                    <source srcset="/blog/img/lakeland/avif/1.avif" type="image/avif">
                    <img src="/blog/img/lakeland/jpg/1.jpg" alt="#">
                </picture>
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