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

<body id="blog">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <main>
        <article class="wrapper-standard">
            <div class="pathname-container"><i><span class="pathname"><a href="/works">adamsochorec</a></span><span
                        class="pathname-current"> / Blog</span></i></div><br>
            <h1>Articles</h1><br>
            <section class="grid-container">
                <a class="hh-stretch" href="/blog/cybersecurity">
                        <div class="grid-item grid-item-7">
                            <h3>Cybersecruity</h3>
                    </div>
                </a>
                <a href="/blog/blog-1">
                    <div class="grid-item grid-item-1">
                        <h3></h3>
                    </div>
                </a>
                <a href="/blog/blog-2">
                    <div class="grid-item grid-item-2">
                        <h3></h3>

                    </div>
                </a>
                <a href="/blog/blog-3">
                    <div class="grid-item grid-item-3">
                        <h3></h3>

                    </div>
                </a>
                <a href="/blog/blog-4">
                    <div class="grid-item grid-item-4">
                        <h3></h3>
                    </div>
                </a>
                <a href="/blog/blog-5">
                    <div class="grid-item grid-item-5">
                        <h3></h3>

                    </div>
                </a>
                <a href="/blog/blog-6">
                    <div class="grid-item grid-item-6">
                        <h3></h3>
                    </div>
                </a>
            </section>
        </article>
    </main>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
</body>

</html>