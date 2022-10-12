<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="The page you’re looking for can’t be found.">
    <meta name="keywords" content="Page not found, 404, 404 Error, Error">
    <meta name="author" content="Adam Sochorec">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Page Not Found | Adam Sochorec</title>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
</head>

<body id="error">
    <header>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-nav-bar.php';
        ?>
    </header>
    <main>
        <hr class="hide">
        <article class="wrapper-narrow flex-center">
            <section class="flex-center">
                <picture>
                    <img src="/img/gif/404.gif" alt="Trippy page not found animation">
                </picture>
                <br>
                <h1>The page you’re looking for can’t be found.</h1>
            </section>
            <br>
            <div class="btn-area"><a aria-describedby="/works" href="http://adamsochorec.com/works">
                    <div aria-describedby="works" id="btn">return to frontpage</div>
                    <div class="btn-shadow"></div>
                </a></div>
        </article>
        <hr>
    </main>
    <!-- FOOTER START -->
    <footer>
        <?php
        $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
        include $IPATH . 'global-footer.php';
        ?>
    </footer>
    <!-- FOOTER END -->
</body>

</html>