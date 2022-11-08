<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page Not Found | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body id="error">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
        <article class="wrapper-narrow flex-center">
            <section class="flex-center">
                <picture>
                    <img src="/img/gif/404.gif" alt="Trippy page not found animation">
                </picture>
                <br>
                <h1>The page you’re looking<br>for can’t be found.</h1>
            </section>
            <br>
            <h2><a aria-describedby="/works" href="http://adamsochorec.com/works">Return to the homepage <svg
                        id="chevron-right"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 384 512">
                        <path
                            d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                </a></h2>
        </article>
        <hr>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
</body>

</html>